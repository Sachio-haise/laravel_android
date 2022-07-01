<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function novel(){
        return $this->belongsTo(Novel::class);
    }
}
