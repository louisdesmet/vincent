<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function navigation()
    {
        return $this->hasOne('App\Navigation');
    }
}
