<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $fillable=[
    'Product_Name','Product_Description','Product_Price','Product_Quantity'

   ];
}
