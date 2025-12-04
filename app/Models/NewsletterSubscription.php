<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsletterSubscription extends Model
{
    protected $table = 'newsletter_subscriptions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    protected $fillable = [
        'email',
        'status',
        'subscribed_at',
    ];

    protected $casts = [
        'subscribed_at' => 'datetime',
    ];

    public function getRec($id)
    {
        $rtVal = $this->find($id);
        return $rtVal;
    }

    public function getRecAll($whereData = array())
    {
        $query = $this;
        if (isset($whereData['status'])) {
            $query = $query->where('status', $whereData['status']);
        }
        $rtVal = $query->orderBy('subscribed_at', 'desc')->get();
        return $rtVal;
    }

    public function getCount($whereData = array())
    {
        $query = $this;
        if (isset($whereData['status'])) {
            $query = $query->where('status', $whereData['status']);
        }
        $rtVal = $query->count();
        return $rtVal;
    }

    public function ajaxNewsletterList($limit, $offset, $whereData = array(), $count = false, $orderInfo = array())
    {
        $where = "";
        $selectClause = "";
        $groupByClause = "";
        $limitClause = "";
        $orderClause = (count($orderInfo) > 0) ? " ORDER BY ns." . $orderInfo['orderByCol'] . " " . $orderInfo['orderByDir'] . " , ns.id " . $orderInfo['orderByDir'] . " " : " ORDER BY ns.subscribed_at desc, ns.id desc ";

        if ($count === true) {
            $joinClause = "";
            $selectClause = " COUNT(ns.id) as NewsletterCount FROM newsletter_subscriptions as ns $joinClause WHERE 1=1";
            $groupByClause = "";
            $limitClause = "";
            $orderClause = "";
        } else {
            $selectClause = " ns.id,
            ns.email,
            ns.status,
            ns.subscribed_at,
            ns.created_at,
            ns.updated_at
            FROM newsletter_subscriptions as ns 
            WHERE 1=1
            ";
            $groupByClause = "";
            $limitClause = " limit " . $limit . " offset " . $offset;
        }

        $sql = "SELECT " . $selectClause;
        
        if (isset($whereData['status']) == true && empty($whereData['status']) == false && $whereData['status'] !== '') {
            $where .= " AND ns.status = " . $whereData['status'];
        }

        if (isset($whereData['search']) == true && empty($whereData['search']) == false) {
            $where .= " AND (ns.email LIKE '%" . $whereData['search'] . "%')";
        }

        $sql = $sql . $where . $groupByClause . $orderClause . $limitClause;
        $rtVal = DB::select($sql);
        return $rtVal;
    }

    public function updateStatus($id, $status)
    {
        $rtVal = $this->where('id', $id)->update([
            'status' => $status,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return $rtVal;
    }

    public function remove($id)
    {
        $rtVal = $this->where('id', $id)->delete();
        return $rtVal;
    }
}
