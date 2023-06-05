<?php 
namespace App\Helper;
class ProductTotal {
    
    public $items = [];
    // private $totalPrice = 0;
    // private $totalQty = 0;

    public function __construct()
    {   
        
         $this->items = session('product') ? session('product') : [];   
    }

    public function update($id,$quantity)
    {
        if(isset($this->items[$id])){
            $this->items[$id]['quantity'] = $quantity;
            session(['product'=>$this->items]);
        }
    }
    
    public function getContent($id)
    {
        return $this->items[$id];
    }
    public function getTotal()
    {
        $totalQty=0;
        foreach ($this->items as $item){
            $totalQty += $item['quantity'];
        }
        return $totalQty;
    }

}