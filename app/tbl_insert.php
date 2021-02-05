<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_insert extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'city_name', 'email',
    ];
}
