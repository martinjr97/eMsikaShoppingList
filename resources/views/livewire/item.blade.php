    <tr>
            <td>{{$item->name}}</td>
            <td><input wire:click="toggle" @if ($item->is_done) checked @endif  type="checkbox" class="form-check-input" id="itemCheck{{$item->id}}" /></td>
            <td> <button wire:click="delete" type="button" class="btn btn-link btn-sm py-0"><em class="fa fa-trash"></em> </button>
                 <button type="button" data-toggle="modal" data-target="#editItemModel-{{$item->id}}" class="btn btn-link btn-sm py-0"><em class="fa fa-pencil"></em>
                </button></td>                  
    </tr>

    @livewire('edit-item',['item' => $item], key($item->id))


