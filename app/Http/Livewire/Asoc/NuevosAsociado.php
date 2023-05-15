<?php

namespace App\Http\Livewire\Asoc;

use App\Models\Location;
use App\Models\Provincia;
use Livewire\Component;


class NuevosAsociado extends Component
{

    public $apellido;
    public $selectedProvincia = null;
    public $selectedLocalidad;
    public $localidades = null;

    protected $rules = ['apellido' => 'required|max:50|min:4'];

    public function save(){
        $this->validate();
    }

    public function upddated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.asoc.nuevos-asociado' , [
            'provincias' => Provincia::all(),
        ]);
    }

    public function updatedselectedProvincia($id_provincia)
    {
        $this->localidades = Location::where('id_provincia', $id_provincia)->get();
    }
}

