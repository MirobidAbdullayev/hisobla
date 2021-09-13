<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Withdraw extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'withdraw', 'comment', 'day', 'month', 'year', 'user_id', 'is_mine' 
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, user_id);
    }
}
