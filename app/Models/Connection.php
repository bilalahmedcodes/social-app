<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','friend_id'];
    public function connection()
    {
        return $this->hasOne(User::class,'id','friend_id');
    }
}
