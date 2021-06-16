<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileWeb extends Model
{
    use HasFactory;

    protected $fillable = ['visionTitle', 'visionText', 'missionTitle', 'missionText', 'pastorName', 'pastorText', 'pastorImage'];
}
