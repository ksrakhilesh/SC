<?php
namespace App;
class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice  = 0;
	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}else{
				$this->items = null; // #Redundant
			}
		}
		public function add($item , $id){
			$storedItem = ['qty' =>'0','price' => $item->price , 'item' => $item];
			if($this->items){
				if (array_key_exists($id , $this->items)) {
					$storedItem = $this->items[$id];
				}
			}
			$storedItem['qty']++;
			$storedItem['price'] = $item->price * $storedItem['qty'];
			$this->items[$id] = $storedItem;
			$this->totalPrice += $item->price;
			$this->totalQty++; 
		}
		public function reduceOne($item , $id){
			if ($this->items[$id]) {
				if($this->items[$id]['qty'] == 1){
					
					$this->totalPrice -= $this->items[$id]['price'];
					$this->totalQty--;
					unset($this->items[$id]);
				}else{
					$this->totalPrice -=$this->items[$id]['price'];
					$this->totalQty--;
					$this->items[$id]['qty']--;
					$this->items[$id]['price'] -=$this->items[$id]['item']->price;
				}
			}
		}
		public function removeAll($item , $id){
					$this->totalPrice -= $this->items[$id]['price'];
					$this->totalQty = $this->totalQty - $this->items[$id]['qty'];
					unset($this->items[$id]);
		}
	
	}
