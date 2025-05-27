<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "kategori";

    // Jika ingin menggunakan fillable (aktifkan ini dan sesuaikan):
    // protected $fillable = ['nama_kategori'];

    // Menggunakan guarded untuk melindungi kolom 'id' agar tidak bisa di-*mass-assign*
    protected $guarded = ['id'];
}
