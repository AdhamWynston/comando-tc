<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Client extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'clients';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'type_person',
        'document_number',
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
    public function person(){
        return $this->hasOne(Person::class);
    }

}
