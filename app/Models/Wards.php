<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "wards";
    public $primaryKey ="wid";
    public $inrementing =true;

    protected $fillable = ['wid', 'ward','wardaddress'];

}
