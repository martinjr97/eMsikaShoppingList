
<div class="items-list">
  <h4 class="mt-0 header-title">Current Items</h4> 
  @isset($greetingMessage){{$greetingMessage}}!@endisset 
  @if(!empty($items)&& count($items)>0) <p> @if(isset($completedItems) && $completedItems == 0) you currently havn't purchased any item @else you currently have purchased Item(s)@endif <span style="color:blue;">  {{$completedItems}} </span> out of your  <span style="color:red;"> {{$totalItems}}</span> listed </p>
  @else
  @endif
    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" style="text-align:center;" >
         <thead>
            <tr>
            <th scope="col"><strong>Item Name</strong></th>
            <th scope="col"><strong>Status</strong></th>
            <th scope="col"><strong>Actions</strong></th>
            </tr>
         </thead>
         <tbody>


            @if(!empty($items) && count($items)>0)
                @foreach($items as $item)
                @livewire('item',['item' => $item], key($item->id))
                   
                    @endforeach
            @else
                <th scope="col" colspan="3">No Items added!!!</th>
            @endif
        </tbody>
    </table>
</div>
