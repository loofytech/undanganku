<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undanganku extends Model
{
    use HasFactory;

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }

    public function photos() {
        return $this->hasMany(Photo::class, "undangan_id");
    }

    public function greetings() {
        return $this->hasMany(Greeting::class, "undangan_id");
    }

    public function gifts() {
        return $this->hasMany(Gift::class, "undangan_id");
    }

    public function template() {
        return $this->belongsTo(Template::class, "template_id");
    }
}
