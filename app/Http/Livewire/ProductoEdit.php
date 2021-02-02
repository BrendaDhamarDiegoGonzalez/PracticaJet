<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class ProductoEdit extends Component
{
    public Producto $prod;

    protected $rules=[
        'prod.codigo'=>'required|min:6',
        'prod.descripcion'=>'required|min:6',
        'prod.precio1'=>'numeric',
        'prod.precio2'=>'numeric'
    ];
    public function mount($id = null){
        if(is_null($id)){
           $this->prod= new Producto(); 
        }else{
            $this -> prod =Producto::find($id);
        }
    }
    public function render()
    {
        return view('livewire.producto-edit');
    }
    public function save(){
        $this->validate();
        $this->prod->save();
        return redirect()->route('producto');
    }
}
