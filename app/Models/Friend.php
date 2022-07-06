<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userfriend()
    {
        return  $this->hasMany(User::class, 'user_id','id');
    }

    public function myFriend()
    {
        return  $this->belongsTo(Friend::class, 'status_id','id');
    }
}
