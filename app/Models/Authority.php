<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;
    protected $table = "authority";
    protected $fillable = ['aname', 'phone', 'address','addharno','designation', 'password'];
    public $timestamps = "false";
}
