<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/ShortenedUrl.php

class ShortenedUrl extends Model
{
    protected $fillable = ['original_url', 'short_url'];
}
