<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'msg',
        'user_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
