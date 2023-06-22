<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    // khai bao table de modl truy vans
    protected $table ="categories";
    // neeus table  categories không có 2 trường create_at, update_up thì phải khai báo dòng sau
    public $timestamps =false;
}
