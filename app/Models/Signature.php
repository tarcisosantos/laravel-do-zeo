<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'email',
    ];
    protected $dates = [
        'deleted_at',
    ];}
