<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    public $timestamps = true;


    protected $fillable = [
        'name',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
}
