<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;
    public $name;
    public $description;
    public $price;
    public $stock;

    /* crear producto */
    public function save(){
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);
        /* para que el modal se cierre y se limpien los campos se usa metodo reset(dentro de reset van los  valores que se desean limpiar)  */
        $this->reset(['open', 'name', 'description','price', 'stock' ]);
        /* emitir evento con el metodo  emit('')*/
        $this->emit('render');
    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
