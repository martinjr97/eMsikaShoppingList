<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use Illuminate\Support\Carbon;


class EditItem extends Component
{
 
    public $item;
    public $name;

    public function mount(\App\Models\Item $item)
    { 
        $this->item = $item;

    }
    public function update($id)
    {
       
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
   
        if ($id) {
            $updateItem = Item::find($id);
            $updateItem->update([
                'name' => $validatedDate['name'],
                'updated_at' => carbon::now(),
            ]);
            $updateItem->save();
            session()->flash('message', 'Item updated successfully.');
            $this->reset();
            $this->emit('itemEdited');

        }
    }

    public function render()
    {
        return view('livewire.edit-item');
    }
}
