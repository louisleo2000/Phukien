<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sanpham;
class LoaiSP extends Model
{
    use HasFactory;
    protected $fillable = ['maloaisp','madm', 'tenLsp', 'motaLsp', 'hinhanhLSP'];
    protected $primarykey = 'maloaisp';
    protected $table = 'loaisp';
    public function danhmuc()
    {
        return $this->belongsTo(DanhMuc::class,'madm');
    }
    public function sanpham()
    {
        return $this->hasMany(Sanpham::class,'maloaisp','maloaisp');
    }
}
