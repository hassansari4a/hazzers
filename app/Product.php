<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.adtitle' => 10,
            'products.description' => 5,
            'products.categoryselect' => 2,
            'products.email' => 1,
        ]
    ];

    protected $table = "products";

    protected $fillable = ['adtitle','description','price','deliverycharge','categoryselect','phone','email','adphoto','slug'];

}
