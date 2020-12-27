<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids" />
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                        @error('firstname')
                            <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                         @error('lastname')
                            <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" wire:model="email" />
                         @error('email')
                            <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" />
                         @error('phone')
                            <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
            </div>
        </div>
    </div>
</div>