<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quehaceres extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'completado', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}