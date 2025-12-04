<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DateTime;
use DateTimeZone;

class BlogsController extends WebAppBaseController
{

	public function listBlogs()
	{
		return view('admin.pages.blogs.blogs-list', []);
	}

	public function loadBlogList(Request $request)
	{
		$data = [];
		try {
			$data = $request->all();
			$projectionData = array();
			$params['draw'] = isset($data['draw']) ? $data['draw'] : 1;
			$start = isset($data['start']) ? $data['start'] : 0;
			$length = isset($data['length']) ? $data['length'] : 10;
			
			$orderByCol = 'created_on';
			$orderByDir = 'desc';
			if (isset($data['order'][0]['column']) && isset($data["columns"][$data['order'][0]['column']]["name"])) {
				$orderByColNo = $data['order'][0]['column'];
				$orderByCol = $data["columns"][$orderByColNo]["name"];
				$orderByDir = isset($data['order'][0]['dir']) ? $data['order'][0]['dir'] : 'desc';
			}

			$orderInfo = array(
				'orderByCol' => $orderByCol,
				'orderByDir' => $orderByDir
			);

			$frmData = array();
			if (isset($data['frmData']) && !empty($data['frmData'])) {
				parse_str($data['frmData'], $frmData);
			}

			$objBlogs = new Blogs();
			$recordsTotal = $objBlogs->getCount($frmData);

			$countResult = $objBlogs->ajaxBlogList($length, $start, $frmData, true);
			$recordsFiltered = !empty($countResult) && isset($countResult[0]->BlogCount) ? $countResult[0]->BlogCount : 0;
			$projectionData = $objBlogs->ajaxBlogList($length, $start, $frmData, false, $orderInfo);

			$jsonData = array(
				"draw" => intval($params['draw']),
				"recordsTotal" => intval($recordsTotal),
				"recordsFiltered" => intval($recordsFiltered),
				"data" => $projectionData
			);

			return $jsonData;

		} catch (\Exception $ex) {
			// Return DataTables compatible error format
			return response()->json([
				"draw" => isset($data['draw']) ? intval($data['draw']) : 0,
				"recordsTotal" => 0,
				"recordsFiltered" => 0,
				"data" => [],
				"error" => $ex->getMessage()
			], 200);
		}
	}

	public function viewBlogAddPage()
	{
		try {
			return view('admin.pages.blogs.blog-add', []);
		} catch (\Exception $ex) {
			return $ex->getMessage();
			exit();
			return redirect()->to('/blogs')->withInput()->with('error', $ex->getMessage());
		}
	}

	public function viewBlogEditPage($id)
	{
		try {
			// Get Blog
			$objBlogs = new Blogs();
			$blog = $objBlogs->getRec($id);

			if (!$blog) {
				return redirect()->to(env('ADMIN_URL_PREFIX') . '/blogs')->with('error', 'Blog not found');
			}

			return view('admin.pages.blogs.blog-edit', [
				'blog' => $blog,
			]);
		} catch (\Exception $ex) {
			return redirect()->to(env('ADMIN_URL_PREFIX') . '/blogs')->withInput()->with('error', $ex->getMessage());
		}
	}

	public function addBlog(Request $request)
	{
		try {
			$niceNames = array(
				'title' => 'Title',
				'content' => 'Content',
				'status' => 'Status',
			);

			$validate = Validator::make($request->all(), [
				'title'	=> 'required',
				'content' => 'required',
				'status' => 'required',
			], [], $niceNames);
			if ($validate->fails()) {
				return $this->sendErrorJson('', $validate->getMessageBag()->first());
			}

			$data = $request->all();

			// Handle OG image upload (used as featured image)
			if ($request->hasFile('og_image_url')) {
				$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$name_str = $date->format('dmYHis') . '_' . uniqid();

				$file = $request->file('og_image_url');
				$file_name = $file->getClientOriginalName();
				$file_ext = $file->getClientOriginalExtension();
				$file_name = 'blog_' . $name_str . "." . $file_ext;

				$file_path = public_path() . '/assets/images/blogs/';
				if (!file_exists($file_path)) {
					mkdir($file_path, 0755, true);
				}
				$file->move($file_path, $file_name);
				$data['og_image_url'] = url('assets/images/blogs/' . $file_name);

				if (isset($data['fileOld']) && !empty($data['fileOld'])) {
					// Extract filename from URL if it's a full URL
					$oldFileName = basename(parse_url($data['fileOld'], PHP_URL_PATH));
					$fileOld = $file_path . $oldFileName;
					if (file_exists($fileOld) === true) {
						unlink($fileOld);
					}
				}
			} else {
				if (isset($data['fileOld']) && !empty($data['fileOld'])) {
					$data['og_image_url'] = $data['fileOld'];
				} else {
					$data['og_image_url'] = '';
				}
			}

			// Set published_at if status is published
			if (isset($data['status']) && $data['status'] == 'published' && empty($data['published_at'])) {
				$data['published_at'] = date('Y-m-d H:i:s');
			}

			// Generate slug if not provided
			if (empty($data['slug'])) {
				$data['slug'] = Str::slug($data['title']);
			}

			// Save Blog
			$data['author_id'] = session('admin_id');
			$objBlogs = new Blogs();
			$data['id'] = $objBlogs->insertRec($data);
			$blog = $objBlogs->getRec($data['id']);
		
			return $this->sendResponse(array(
				'blogData' => $data['id']
			), 'Blog was added successfully!', '/blogs');
		} catch (\Exception $ex) {
			return $this->sendErrorJson('', $ex->getMessage());
		}
	}

	public function editBlog(Request $request)
	{
		try {
			$id = $request->id;
			$niceNames = array(
				'title' => 'Title',
				'content' => 'Content',
				'status' => 'Status',
			);

			$validate = Validator::make($request->all(), [
				'title'	=> 'required',
				'content' => 'required',
				'status' => 'required',
			], [], $niceNames);

			if ($validate->fails()) {
				return $this->sendErrorJson('', $validate->getMessageBag()->first());
			}

			$objBlogs = new Blogs();
			$objBlog = $objBlogs->getRec($request->id);

			if (!$objBlog) {
				return $this->sendErrorJson('', 'Blog not found');
			}

			$data = $request->all();

			// Handle OG image upload (used as featured image)
			if ($request->hasFile('og_image_url')) {
				$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$name_str = $date->format('dmYHis') . '_' . uniqid();

				$file = $request->file('og_image_url');
				$file_name = $file->getClientOriginalName();
				$file_ext = $file->getClientOriginalExtension();
				$file_name = 'blog_' . $request->id . '_' . $name_str . "." . $file_ext;

				$file_path = public_path() . '/assets/images/blogs/';
				if (!file_exists($file_path)) {
					mkdir($file_path, 0755, true);
				}
				$file->move($file_path, $file_name);
				$data['og_image_url'] = url('assets/images/blogs/' . $file_name);
				if (isset($data['fileOld'])) {
					$fileOld = $data['fileOld'];
					$fileOld = $file_path . basename($fileOld);
					if (file_exists($fileOld) === true) {
						unlink($fileOld);
					}
				}
			} else {
				if (isset($data['fileOld']) && !empty($data['fileOld'])) {
					$data['og_image_url'] = $data['fileOld'];
				} else {
					$data['og_image_url'] = $objBlog->og_image_url ?? '';
				}
			}

			// Set published_at if status is published and not already set
			if (isset($data['status']) && $data['status'] == 'published' && empty($objBlog->published_at)) {
				$data['published_at'] = date('Y-m-d H:i:s');
			}

			// Generate slug if not provided
			if (empty($data['slug'])) {
				$data['slug'] = Str::slug($data['title']);
			}

			// Update Blog
			$data['id'] = $objBlogs->updateRec($data);

			return $this->sendResponse(array(
				'blog' => $data['id']
			), 'Blog was updated successfully!', '/blogs');
		} catch (\Exception $ex) {
			return $this->sendErrorJson('', $ex->getMessage());
		}
	}

	public function deleteBlog($id)
	{
		try {
			$obj = new Blogs();
			$update = $obj->remove($id);

			return $this->sendResponse('', 'Blog Deleted Successfully.', '/blogs');
			
		} catch (\Exception $ex) {
			return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
		}
	}
}

