<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['adtitle','description','price','deliverycharge','categoryselect','phone','email','adphoto','slug'];

}
