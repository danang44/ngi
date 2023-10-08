<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banking extends Model
{
    use HasFactory;
    protected $table = 'bankings';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'gambar', 'kategori', 'tanggal', 'deskripsi, kontenlengkap'];
}
