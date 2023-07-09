<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public function render()
    {
        /* consulta para crear buscador filta por contenido de campo de nombre y de descripcion  */
        $products = Product::where('name', 'like', '%'. $this->search . '%')
                            ->orWhere('description', 'like', '%'. $this->search . '%')
                            ->orderBy($this->sort, $this->direction)
                            ->get();
        return view('livewire.show-posts', compact('products'));
    }

    /* Mandamos la variable sort desde la vista, esto nos permite acomodar de forma descendente o ascendente dependiendo de como se encuentre el contenido de los campos */
    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->direction == "desc") {
                $this->direction = "asc";
            } else {
                $this->direction = "desc";
            }
        } else {
            $this->sort = $sort;
            $this->direction = "asc";
        }
        
    }
}
