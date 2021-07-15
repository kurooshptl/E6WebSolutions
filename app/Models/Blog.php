<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blog';
    public $fillable = [ 'title', 'text', 'written_by','image'];
}
