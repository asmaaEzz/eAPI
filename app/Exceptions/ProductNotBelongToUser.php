<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    public function render(){
        return ["errors"=>"product not belong to user"];
    }
}
