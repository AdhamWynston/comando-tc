<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Person extends Model implements Transformable
{
    use TransformableTrait;
    public function client(){
        return $this->belongsTo(Client::class);
    }
    protected $fillable = [
        'id',
        'name',
        'birth_date',
        'principal_phone',
        'secundary_phone',
        'street',
        'state',
        'zip_code',
        'number',
        'city',
        'complement',
        'address',
        'status'

    ];

}
