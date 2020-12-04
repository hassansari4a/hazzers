<?php

namespace App;

class Cart
{
  public $items;
  public $total = 0;
  public $totalPrice = 0;
  public $totalQty = 0;
  public $delCharge = 0;

  public function __construct($oldcart){
    if ($oldcart){
     $this->items = $oldcart->items;
     $this->totalPrice = $oldcart->totalPrice;
     $this->totalQty = $oldcart->totalQty;
     $this->delCharge = $oldcart->delCharge;
     $this->total = $oldcart->total;
    }else{
      $this->items = null;
    }
  }

  public function add($item, $slug){
    $storedItem = ['price'=>$item->price, 'item'=>$item];
    if ($this->items){
      if (array_key_exists($slug, $this->items)){
        $storedItem = $this -> items[$slug];
        $this->totalPrice = $this->totalPrice - $item->price - $item->deliverycharge;
        $this->delCharge -= $item->deliverycharge;
        $this->totalQty--;
        $this->total -= $item->price;
      }
    }
    
    $this->items[$slug] = $storedItem;
    $this->totalQty++;
    $this->delCharge += $item->deliverycharge;
    $this->total += $item->price;
    $this->totalPrice = $this->totalPrice + $item->price + $item->deliverycharge;

   }
}
