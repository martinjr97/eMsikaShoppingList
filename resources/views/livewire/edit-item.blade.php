
@if(!empty($item))
<div wire:ignore.self class="modal fade" id="editItemModel-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit {{$item->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                        <div class="modal-body">
                                <form wire:submit.prevent="update({{$item->id}})">  
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="text-info"> Update item name:</label>
                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                <input wire:model="name" type="text" class="form-control" placeholder="{{$item->name}}" value="{{$item->name}}" > 
                                            </div>                             
                                        </div>           
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                                        <button type="update"  class="btn btn-primary close-modal">Update Item</button>
                                    </div>
                                </form>
                        </div>
                 </div>
            </div>
</div>
@endif





