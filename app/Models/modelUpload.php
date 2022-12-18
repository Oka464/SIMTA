<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelUpload extends Model
{
    // use HasFactory;

    protected $table = 'upload_revisi';
    protected $fillable = ['', 'NRP', 'name', 'berkas', 'deskripsi'];
}
