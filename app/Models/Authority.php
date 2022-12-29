<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;
    public $table = "authority";
    public $primaryKey = "aid";
    public $inrementing =true;
    protected $fillable = ['aid','aname', 'phone', 'address','addharno','designation', 'password'];
    public $timestamps = false;
}
