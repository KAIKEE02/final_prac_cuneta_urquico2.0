<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class studentmngt extends Model
{
    use HasFactory;
    protected $table = '3a_tbl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'age',
        'dobirth',
    ];
}