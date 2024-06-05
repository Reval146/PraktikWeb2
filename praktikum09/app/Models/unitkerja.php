<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitkerja extends Model
{
    use HasFactory;
    protected $table = 'unitkerjas';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
    ];
}
