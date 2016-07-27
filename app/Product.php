<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * Fillable fields for the flyer
     * @var array
     */
    protected $fillable = ['code', 'description', 'audio', 'video'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

}
