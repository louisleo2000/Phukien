<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
 
    protected $fillable = ['maHD', 'id_user'];
    protected $primarykey = 'maHD';
    protected $table = 'hoadon';
}
