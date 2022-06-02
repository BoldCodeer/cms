<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Section</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="section" placeholder="Enter Section">
        @error('section') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Year</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="year" placeholder="Enter Year">
        @error('year') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Course</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="course" placeholder="Enter Course">
        @error('course') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
