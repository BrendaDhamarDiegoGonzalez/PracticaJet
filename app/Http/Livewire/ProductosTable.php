<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductosTable extends Component
{
    public function render()
    {
        $prods=Producto::all();
        return view('livewire.productos-table',compact('prods'));
    }
}
