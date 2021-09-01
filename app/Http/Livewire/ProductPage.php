<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product as PD;
use App\Models\Color;
use Session;
use Cart;

class ProductPage extends Component
{
    public $quantity=1;
    public $products,$colors;
    public function increaseQty()
    {
        $this->quantity++;
    }
    public function decreaseQty()
    {
        $this->quantity--;
        if($this->quantity < 1)
        {
            $this->quantity=1;
        }
    }
    public function addToCart($id)
    {
        $product = PD::find($id);
        $qty=$this->quantity;
        $images=json_decode($product->thumbnail_path);
        $path=$images[0];
         Cart::add(['id' => $product->id, 'name' => $product->product_name, 
        'qty' => $qty,'options'=>['desc'=>$product->product_desc,'code'=>$product->code,'img' => $path], 'price' => $product->price
        ]);
        return redirect('/');
    }
    public function render()
    {
        
        return view('livewire.product-page');
    }
    public function mount(Request $req)
    {
        $product_id=$req->route('slug');
        $products=PD::find($product_id);
        $color_ids=unserialize($products->colors);
        foreach($color_ids as $color)
        {
            $clr=Color::find($color);
            $colors[]=$clr->colorcode;
        }
        $this->products=$products;
        $this->colors=$colors;
    }
    public function checkout($id)
    {
        $product = PD::find($id);
        $qty=$this->quantity;
        $images=json_decode($product->thumbnail_path);
        $path=$images[0];
         Cart::add(['id' => $product->id, 'name' => $product->product_name, 
        'qty' => $qty,'options'=>['desc'=>$product->product_desc,'code'=>$product->code,'img' => $path], 'price' => $product->price
        ]);

        return redirect()->route('shipping.info');
    }
}
