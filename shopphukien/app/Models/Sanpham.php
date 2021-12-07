<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $fillable = ['masp', 'maloaisp', 'tensp', 'motasp', 'hinhanh', 'dvt', 'mausac', 'dongia', 'giakm', 'created_at', 'updated_at'];
    protected $primarykey = 'masp';
    protected $table = 'sanphams';
    public function loaisp()
    {
        return $this->belongsTo(LoaiSP::class, 'maloaisp', 'maloaisp');
    }
}
