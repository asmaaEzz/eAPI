<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'total price'=>round((1-($this->discount /100) )*$this->price , 2 ),
            'rating' =>$this->reviews->count() >0 ?round($this->reviews->sum('star')/$this->reviews->count(),2) : 'no rating yet',
            'href'=>[
                'details'=>route('products.show',$this->id)
            ]
        ];
    }
}
