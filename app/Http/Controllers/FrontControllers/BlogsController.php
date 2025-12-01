<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Blogs;
use App\Models\Admin;
use App\Models\Applicant;
use App\Models\ApplicationStatus;

class BlogsController extends WebAppBaseController
{

    public function blogs()
    {
        try {
            $objBlogs = new Blogs();
            $blogs = $objBlogs->getRecAll(['status' => 'published', 'is_delete' => 0]);
            return view('front.pages.blogs', ['blogs' => $blogs]);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function blogDetails($slug)
    {
        try {
            $objBlogs = new Blogs();
            $blog = $objBlogs->getRecBySlug($slug);
            
            if (!$blog) {
                abort(404, 'Blog not found');
            }

            // Get related blogs (excluding current blog)
            $relatedBlogs = $objBlogs->getRecAll(['status' => 'published', 'is_delete' => 0])
                ->where('id', '!=', $blog->id)
                ->take(3);

            return view('front.pages.blog-details', [
                'blog' => $blog,
                'relatedBlogs' => $relatedBlogs
            ]);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }
}
