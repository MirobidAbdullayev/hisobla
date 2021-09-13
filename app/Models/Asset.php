<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'asset', 'comment', 'day', 'month', 'year', 'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, user_id);
    }
}
