<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    use HasFactory;
    protected $stable = "contactus";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'tujuan', 'isi', 'send_at'
    ];
}
