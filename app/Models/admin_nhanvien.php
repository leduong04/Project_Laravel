<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_nhanvien extends Model
{
    use HasFactory;

    protected $table = 'admin_nhanvien';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'date_of_birth',
        'gender',
        'address',
        'phone',
        'img_link',
        'level',
        'chuc_vu',
    ];

    protected $dates = ['date_of_birth'];

    // protected $table = 'admin_nhanvien';
}
