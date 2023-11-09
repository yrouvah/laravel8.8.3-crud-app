<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }
}
