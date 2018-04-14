<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function __construct() {
        $word = array('w','o','r','d');
    }    
}
