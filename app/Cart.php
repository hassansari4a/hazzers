<?php

namespace App;

class Cart
{
  public $items;
  public $totalPrice = 0;
  public $totalQty = 0;

  public function __construct($oldcart){
    if ($oldcart){
     $this->items = $oldcart->items;
     $this->totalPrice = $oldcart->totalPrice;
     $this->totalQty = $oldcart->totalQty;
    }else{
      $this->items = null;
    }
  }

  public function add($item, $slug){
    $storedItem = ['price'=>$item->price, 'item'=>$item];
    if ($this->items){
      if (array_key_exists($slug, $this->items)){
        $storedItem = $this -> items[$slug];
        $this->totalPrice -= $item->price;
        $this->totalQty--;
      }
    }
    
    $this->items[$slug] = $storedItem;
    $this->totalQty++;
    $this->totalPrice += $item->price;
   }
}
