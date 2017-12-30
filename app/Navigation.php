<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model {

    /*public function getRouteKeyName() {
        return 'name';
    }*/
    
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
