<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compro extends Model
{
    use HasFactory;
    protected $stable = "compro";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'deskripsi', 'nama', 'email', 'whatsapp', 'pdf', 'downloaded_at'
    ];
}
