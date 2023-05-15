<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Models\Provincia;
use Livewire\Component;

class ShowSelect extends Component
{

          public function __construct($name)
          {
            switch ($name) {
                case 'apellido':
                    # code...
                    break;
                case 'nombre':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
          }

          public function render()
    {
        return view('livewire.show-select');
    }

   
}
