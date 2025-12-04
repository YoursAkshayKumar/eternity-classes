<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Blogs extends Model
{
  use HasFactory;
  protected $table = 'blogs';
  protected $primaryKey = 'blog_id';
  const CREATED_AT = 'created_on';
  const UPDATED_AT = 'updated_on';
  public $timestamps = false;

  protected $fillable = [
    'title',
    'slug',
    'content',
    'excerpt',
    'status',
    'author_id',
    'published_at',
    'seo_title',
    'meta_description',
    'meta_keywords',
    'canonical_url',
    'og_image_url',
    'og_title',
    'og_description',
    'created_on',
    'updated_on',
    'is_delete'
  ];

  public function insertRec($_Request_Data)
  {
    $rtVal = $this->insertGetId([
      'title' => $_Request_Data['title'],
      'slug' => isset($_Request_Data['slug']) && !empty($_Request_Data['slug']) ? $_Request_Data['slug'] : Str::slug($_Request_Data['title']),
      'content' => isset($_Request_Data['content']) ? $_Request_Data['content'] : '',
      'excerpt' => isset($_Request_Data['excerpt']) ? $_Request_Data['excerpt'] : '',
      'status' => isset($_Request_Data['status']) ? $_Request_Data['status'] : 'draft',
      'author_id' => isset($_Request_Data['author_id']) ? $_Request_Data['author_id'] : session('admin_id'),
      'published_at' => isset($_Request_Data['published_at']) && !empty($_Request_Data['published_at']) ? $_Request_Data['published_at'] : (isset($_Request_Data['status']) && $_Request_Data['status'] == 'published' ? date('Y-m-d H:i:s') : null),
      'seo_title' => isset($_Request_Data['seo_title']) ? $_Request_Data['seo_title'] : '',
      'meta_description' => isset($_Request_Data['meta_description']) ? $_Request_Data['meta_description'] : '',
      'meta_keywords' => isset($_Request_Data['meta_keywords']) ? $_Request_Data['meta_keywords'] : '',
      'canonical_url' => isset($_Request_Data['canonical_url']) ? $_Request_Data['canonical_url'] : '',
      'og_image_url' => isset($_Request_Data['og_image_url']) ? $_Request_Data['og_image_url'] : '',
      'og_title' => isset($_Request_Data['og_title']) ? $_Request_Data['og_title'] : '',
      'og_description' => isset($_Request_Data['og_description']) ? $_Request_Data['og_description'] : '',
      'is_delete' => 0,
      'created_on' => date('Y-m-d H:i:s'),
      'updated_on' => date('Y-m-d H:i:s'),
    ]);
    return $rtVal;
  }

  public function updateRec($_Request_Data)
  {
    $data = array(
      'title' => $_Request_Data['title'],
      'slug' => isset($_Request_Data['slug']) && !empty($_Request_Data['slug']) ? $_Request_Data['slug'] : Str::slug($_Request_Data['title']),
      'content' => isset($_Request_Data['content']) ? $_Request_Data['content'] : '',
      'excerpt' => isset($_Request_Data['excerpt']) ? $_Request_Data['excerpt'] : '',
      'status' => isset($_Request_Data['status']) ? $_Request_Data['status'] : 'draft',
      'published_at' => isset($_Request_Data['published_at']) && !empty($_Request_Data['published_at']) ? $_Request_Data['published_at'] : (isset($_Request_Data['status']) && $_Request_Data['status'] == 'published' && !isset($_Request_Data['published_at']) ? date('Y-m-d H:i:s') : null),
      'seo_title' => isset($_Request_Data['seo_title']) ? $_Request_Data['seo_title'] : '',
      'meta_description' => isset($_Request_Data['meta_description']) ? $_Request_Data['meta_description'] : '',
      'meta_keywords' => isset($_Request_Data['meta_keywords']) ? $_Request_Data['meta_keywords'] : '',
      'canonical_url' => isset($_Request_Data['canonical_url']) ? $_Request_Data['canonical_url'] : '',
      'og_image_url' => isset($_Request_Data['og_image_url']) ? $_Request_Data['og_image_url'] : '',
      'og_title' => isset($_Request_Data['og_title']) ? $_Request_Data['og_title'] : '',
      'og_description' => isset($_Request_Data['og_description']) ? $_Request_Data['og_description'] : '',
      'updated_on' => date('Y-m-d H:i:s'),
    );
    $rtVal = $this
      ->where('blog_id', $_Request_Data['id'])
      ->update($data);
    return $rtVal;
  }

  public function remove($id)
  {
    $rtVal = $this->where('blog_id', $id)->delete();
    return $rtVal;
  }

  public function getRec($id)
  {
    $rtVal = $this->find($id);
    return $rtVal;
  }

  public function getRecBySlug($slug)
  {
    $rtVal = $this
      ->where('slug', $slug)
      ->where('status', 'published')
      ->first();
    return $rtVal;
  }

  public function getRecAll($whereData = array())
  {
    $query = $this;
    if (isset($whereData['status'])) {
      $query = $query->where('status', $whereData['status']);
    }
    if (isset($whereData['is_delete'])) {
      $query = $query->where('is_delete', $whereData['is_delete']);
    }
    $rtVal = $query->orderBy('created_on', 'desc')->get();
    return $rtVal;
  }

  public function getCount($whereData = array())
  {
    $isDelete = 0;
    $query = $this;
    if (isset($whereData)) {
      if (isset($whereData['is_delete']) == true && empty($whereData['is_delete']) == false) {
        $isDelete =  $whereData['is_delete'];
      }
    }

    $rtVal = $query
      ->where('is_delete', $isDelete)
      ->count();
    return $rtVal;
  }

  public function ajaxBlogList($limit, $offset, $whereData = array(), $count = false, $orderInfo = array())
  {
    $where = "";
    $selectClause = "";
    $groupByClause = "";
    $limitClause = "";
    $orderClause = (count($orderInfo) > 0) ? " ORDER BY b." . $orderInfo['orderByCol'] . " " . $orderInfo['orderByDir'] . " , b.blog_id " . $orderInfo['orderByDir'] . " "  : " ORDER BY b.created_on desc, b.blog_id desc ";

    if ($count === true) {
      $joinClause = "";

      $selectClause = " COUNT(b.blog_id) as BlogCount FROM blogs as b $joinClause WHERE 1=1";
      $groupByClause = "";
      $limitClause = "";
      $orderClause = "";
    } else {
      $selectClause = " b.blog_id,
      b.title,
      b.slug,
      b.content,
      b.excerpt,
      b.status,
      b.author_id,
      b.published_at,
      b.seo_title,
      b.meta_description,
      b.meta_keywords,
      b.canonical_url,
      b.og_image_url,
      b.og_title,
      b.og_description,
      b.created_on,
      b.updated_on,
      b.is_delete
        FROM blogs as b 
        WHERE 1=1
      ";
      $groupByClause = "";
      $limitClause = " limit " . $limit . " offset " . $offset;
    }

    $sql = "SELECT " . $selectClause;
    $bindings = [];
    
    if (isset($whereData['is_delete']) == true) {
      $where .= " AND b.is_delete = ?";
      $bindings[] = $whereData['is_delete'];
    }

    if (isset($whereData['status']) == true && empty($whereData['status']) == false) {
      $where .= " AND b.status = ?";
      $bindings[] = $whereData['status'];
    }

    if (isset($whereData['search']) == true && empty($whereData['search']) == false) {
      $searchTerm = '%' . $whereData['search'] . '%';
      $where .= " AND (b.title LIKE ?";
      $where .= " OR b.content LIKE ?";
      $where .= " OR b.excerpt LIKE ?";
      $where .= " OR b.slug LIKE ?)";
      $bindings = array_merge($bindings, [$searchTerm, $searchTerm, $searchTerm, $searchTerm]);
    }

    $sql = $sql . $where . $groupByClause . $orderClause . $limitClause;
    $rtVal = DB::select($sql, $bindings);
    return $rtVal;
  }
}
