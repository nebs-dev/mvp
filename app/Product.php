<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * Fillable fields for the flyer
     * @var array
     */
    protected $fillable = ['street', 'city', 'state', 'country', 'zip', 'price', 'description'];

}
