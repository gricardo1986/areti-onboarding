<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Country;

class Whitelist extends Component
{
    use WithPagination;

    //protected $paginationTheme = 'bootstrap';

    public $paginar=5;
    public $search="";

    public function render()
    {
        return view('livewire.administration.whitelist',[
            'countries' => Country::where('name', 'LIKE', "%".$this->search."%")
                                ->orWhere('code', 'LIKE', "%".$this->search."%")
                                ->orWhere('phone_code', 'LIKE', "%".$this->search."%")
                                ->paginate($this->paginar),
        ]);
    }

    public function add($id){
        $country=Country::find($id);
        $country->active=1;
        $country->save();
    }

    public function delete($id){
        $country=Country::find($id);
        $country->active=0;
        $country->save();
    }
}
