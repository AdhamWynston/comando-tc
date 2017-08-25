<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Address extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'id',
        'street',
        'state',
        'zip_code',
        'number',
        'city',
        'complement',
        'address'

    ];

    public function client(){
        return $this->hasOne(Person::class);
    }

}
