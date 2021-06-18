<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;


class Item extends Component
{
    /**
     * @var \App\Models\Item
     */

    public $isDone;
    public $item;
    public $name;
     public $updateMode = false;

    public function mount(\App\Models\Item $item)
    { 
        $this->item = $item;

    }
    public function render()
    {
        return view('livewire.item');
    }

    public function toggle()
    {
        $this->isDone = !$this->isDone;
        $this->item->is_done = $this->isDone;
        $this->item->save();
        $this->item->refresh();
        $this->emit('itemEdited');
    }

    public function delete()
    {
        $this->item->delete();
        session()->flash('success', 'Item deleted successfully.');
        $this->emit('itemDeleted');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {   
        $this->updateMode = true;
        $selectedItem = \App\Models\Item::findOrFail($id);
        $this->name = $selectedItem ->name;
        $this->isDone = $selectedItem ->is_done;
        
    }

 
    
}
