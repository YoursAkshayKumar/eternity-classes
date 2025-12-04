<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'course',
        'grade',
        'source',
        'terms_accepted',
        'status',
        'admin_notes',
        'created_on',
        'updated_on',
        'is_delete'
    ];

    public function insertRec($_Request_Data)
    {
        $rtVal = $this->insertGetId([
            'full_name' => $_Request_Data['full_name'],
            'email' => $_Request_Data['email'],
            'phone' => $_Request_Data['phone'],
            'course' => $_Request_Data['course'],
            'grade' => isset($_Request_Data['grade']) ? $_Request_Data['grade'] : null,
            'source' => isset($_Request_Data['source']) ? $_Request_Data['source'] : null,
            'terms_accepted' => isset($_Request_Data['terms_accepted']) ? 1 : 0,
            'status' => 0, // Pending by default
            'admin_notes' => isset($_Request_Data['admin_notes']) ? $_Request_Data['admin_notes'] : null,
            'is_delete' => 0,
            'created_on' => date('Y-m-d H:i:s'),
            'updated_on' => date('Y-m-d H:i:s'),
        ]);
        return $rtVal;
    }

    public function updateRec($_Request_Data)
    {
        $data = array(
            'full_name' => $_Request_Data['full_name'],
            'email' => $_Request_Data['email'],
            'phone' => $_Request_Data['phone'],
            'course' => $_Request_Data['course'],
            'grade' => isset($_Request_Data['grade']) ? $_Request_Data['grade'] : null,
            'source' => isset($_Request_Data['source']) ? $_Request_Data['source'] : null,
            'terms_accepted' => isset($_Request_Data['terms_accepted']) ? 1 : 0,
            'status' => isset($_Request_Data['status']) ? $_Request_Data['status'] : 0,
            'admin_notes' => isset($_Request_Data['admin_notes']) ? $_Request_Data['admin_notes'] : null,
            'updated_on' => date('Y-m-d H:i:s'),
        );
        $rtVal = $this
            ->where('id', $_Request_Data['id'])
            ->update($data);
        return $rtVal;
    }

    public function remove($id)
    {
        $rtVal = $this->where('id', $id)->update(['is_delete' => 1]);
        return $rtVal;
    }

    public function getRec($id)
    {
        $rtVal = $this->where('is_delete', 0)->find($id);
        return $rtVal;
    }

    public function getRecAll($whereData = array())
    {
        $query = $this->where('is_delete', 0);
        if (isset($whereData['status'])) {
            $query = $query->where('status', $whereData['status']);
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
                $isDelete = $whereData['is_delete'];
            }
        }

        $rtVal = $query
            ->where('is_delete', $isDelete)
            ->count();
        return $rtVal;
    }

    public function ajaxEnrollmentList($limit, $offset, $whereData = array(), $count = false, $orderInfo = array())
    {
        $where = "";
        $selectClause = "";
        $groupByClause = "";
        $limitClause = "";
        $orderClause = (count($orderInfo) > 0) ? " ORDER BY e." . $orderInfo['orderByCol'] . " " . $orderInfo['orderByDir'] . " , e.id " . $orderInfo['orderByDir'] . " " : " ORDER BY e.created_on desc, e.id desc ";

        if ($count === true) {
            $joinClause = "";
            $selectClause = " COUNT(e.id) as EnrollmentCount FROM enrollments as e $joinClause WHERE 1=1";
            $groupByClause = "";
            $limitClause = "";
            $orderClause = "";
        } else {
            $selectClause = " e.id,
            e.full_name,
            e.email,
            e.phone,
            e.course,
            e.grade,
            e.source,
            e.terms_accepted,
            e.status,
            e.admin_notes,
            e.created_on,
            e.updated_on,
            e.is_delete
            FROM enrollments as e 
            WHERE 1=1
            ";
            $groupByClause = "";
            $limitClause = " limit " . $limit . " offset " . $offset;
        }

        $sql = "SELECT " . $selectClause;
        if (isset($whereData['is_delete']) == true) {
            $where .= " AND e.is_delete = " . $whereData['is_delete'];
        }

        if (isset($whereData['status']) == true && empty($whereData['status']) == false && $whereData['status'] !== '') {
            $where .= " AND e.status = " . $whereData['status'];
        }

        if (isset($whereData['search']) == true && empty($whereData['search']) == false) {
            $where .= " AND (e.full_name LIKE '%" . $whereData['search'] . "%'";
            $where .= " OR e.email LIKE '%" . $whereData['search'] . "%'";
            $where .= " OR e.phone LIKE '%" . $whereData['search'] . "%'";
            $where .= " OR e.course LIKE '%" . $whereData['search'] . "%')";
        }

        $sql = $sql . $where . $groupByClause . $orderClause . $limitClause;
        $rtVal = DB::select($sql);
        return $rtVal;
    }
}

