<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
   
    protected $fillable = [
        'user_id',
        'meeting_id',
        'start_at',
        'join_url',
        'teacher_id'
        
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
