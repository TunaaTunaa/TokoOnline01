<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // <-- Pastikan ini ada
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable  // <-- User harus mewarisi Authenticatable
{
    use HasFactory;

    protected $table = 'user';

    // Menambahkan kolom-kolom yang boleh diisi
    protected $fillable = [
        'nama', 'email', 'password', 'hp', 'role', 'status', 'foto'
    ];

    protected $hidden = [
        'password',
    ];
}
