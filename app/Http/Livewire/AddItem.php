<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class AddItem extends Component
{
    public $name;
    public $created_at;
    public $updated_at;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|min:1',
        ]);
        $item = new Item;
        $item->name = $data['name'];
        $item->save();
        

        $this->reset();
        session()->flash('success', 'Item added successfully.');
        $this->emit('itemAdded');

    }

    public function render()
    {
        return view('livewire.add-item');
    }
    
}
