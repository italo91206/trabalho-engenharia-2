<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    protected $fillable = [
        'nome',
        'user_id',
    ];

    protected $guarded = [
        'created_at',
        'update_at'
    ];
}
