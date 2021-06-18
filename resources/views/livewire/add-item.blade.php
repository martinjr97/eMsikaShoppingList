<div>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Create Item
    </button>


        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Item Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                <div class="modal-body">
                        <form wire:submit.prevent="submit">  
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="text-info"> Enter item name:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        </div>
                                    <input wire:model="name" type="text" class="form-control" placeholder="Enter name" name="name" id="name" > 
                                    </div>
                        
                                </div>           
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary close-modal">Save Item</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
</div>
