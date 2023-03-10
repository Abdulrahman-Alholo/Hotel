<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['message', 'name', 'job_title', 'customer_id', 'message'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
