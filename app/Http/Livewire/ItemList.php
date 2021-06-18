<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use Illuminate\Support\Carbon;

class ItemList extends Component
{
    public $items;
    public $isDone;
    public $name;
    public $completedItems;
    public $totalItems;
    public $greetingMessage;

    protected $listeners = [
        'itemDeleted' => 'refreshList',
        'itemAdded' => 'refreshList',
        'itemEdited' => 'refreshList'
    ];
     
    public function mount()
    {
        $this->items = Item::all()->sortByDesc('created_at');
        $this->completedItems = $this->items->where('is_done',1)->count();
        $this->totalItems = $this->items->count();
        $this->time();
    }

    public function render()
    {
        return view('livewire.item-list');
    }

    public function refreshList(){
        $this->mount();
    }
    public function items()
    {
        return Item::all()->sortByDesc('created_at');
    }

    
    public function time()
    {
        $Hour = date('G');

        if ( $Hour >= 5 && $Hour <= 11 ) {
            $this->greetingMessage = "Good Morning";
        } else if ( $Hour >= 12 && $Hour <= 18 ) {
            $this->greetingMessage = "Good Afternoon";
        } else if ( $Hour >= 19 || $Hour <= 4 ) {
            $this->greetingMessage = "Good Evening";
        }

   
    }
    
}
