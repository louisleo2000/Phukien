<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $fillable = ['madm', 'tendm'];
    protected $primarykey = 'madm';
    protected $table = 'DanhMuc';
    public function loaisp()
    {
        return $this->hasMany(LoaiSP::class, 'madm', 'madm');
    }
}
