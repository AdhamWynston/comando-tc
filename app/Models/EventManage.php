<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class EventManage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'event_id',
        'employee_id',

    ];
    public function event(){
        return $this->belongsTo(Event::class);
    }

}
