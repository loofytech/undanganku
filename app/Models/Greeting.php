<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;

    protected $hidden = [
        'undangan_id',
        'created_at',
        'updated_at'
    ];

    public function undangan() {
        return $this->belongsTo(Undanganku::class, "undangan_id");
    }
}
