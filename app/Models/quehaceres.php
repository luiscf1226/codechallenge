<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quehaceres extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'completado'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
