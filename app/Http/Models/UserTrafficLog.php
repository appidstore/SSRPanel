<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户流量记录
 * Class UserTrafficLog
 *
 * @package App\Http\Models
 * @property-read \App\Http\Models\SsNode $SsNode
 * @property-read \App\Http\Models\User $User
 * @mixin \Eloquent
 */
class UserTrafficLog extends Model
{
    protected $table = 'user_traffic_log';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // 关联账号
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // 关联节点
    public function node()
    {
        return $this->belongsTo(SsNode::class, 'node_id', 'id');
    }

}