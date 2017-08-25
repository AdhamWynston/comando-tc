<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Event extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'client_id',
        'name',
        'street',
        'state',
        'zipcode',
        'city',
        'complement',
        'address',
        'started_date',
        'termination_date'
    ];

    public function client(){
        return $this->hasOne(Client::class);
    }
    public function items(){
        return $this->hasMany(EventManage::class);
    }

}
