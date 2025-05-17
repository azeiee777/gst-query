<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GstQuery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'gst_number', 'message'];
}
