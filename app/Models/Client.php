<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes=[
        'status'=>1
    ];

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return[
            '0' => 'Inactif',
            '1' => 'Actif',
            '2'=>'En attente'
        ];
    }
}
