<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = "film";
    protected $fillable = ["judul", "ringkasan", "tahun", "genre_id"];
}
