<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ComproBlog extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute() {
      return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
