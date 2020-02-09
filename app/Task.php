<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//タスクモデル
class Task extends Model
{   //一対多の関係を記述
    protected $fillable = ['content', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
