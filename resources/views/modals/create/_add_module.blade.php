
<div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">

      <header class="has-background-secondary modal-card-head">
        <span class="file-icon">
            <i class="fas fa-photo-video"></i>
        </span>
        <p class="has-white modal-card-title">Add A Module</p>
        <button wire:click.defer="toggleModal" class="delete" aria-label="close"></button>
      </header>

      <section class="modal-card-body">
            <div class="field">
                <label class="small is-primary">Module Name</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-large" wire:model="module_name" type="text" placeholder="">
                    <span class="icon is-medium is-left">
                        <i class="fa fa-search"></i>
                    </span>
                    <span class="icon is-medium is-right">
                        <i class="fa fa-check"></i>
                    </span>
                </div>
            </div>        
           
            <div class="field">
                <label class="small is-primary">Associated Disease</label>
                <div class="control has-icons-left has-icons-right">
                    <select class="input is-large" wire:model="disease_id" type="text" placeholder="">
                        <optgroup>
                            @forelse($diseases as $d)
                            <!-- <option value="">-- Select --</option> -->
                                <option value="{{$d->id}}">{{$d->name}}</option>
                            @empty
                                <option>No Diseases Found</option>
                            @endforelse
                        </optgroup>
                    </select>
                    <span class="icon is-medium is-left">
                        <i class="fa fa-search"></i>
                    </span>
                    <span class="icon is-medium is-right">
                        <i class="fa fa-check"></i>
                    </span>
                </div>
            </div>  

            <div class="field">
                <label class="small">Module Description</label>
                <div class="control">
                  <textarea wire:model="description" class="textarea" placeholder="A brief description about the disease"></textarea>
                  
                </div>
            </div>

      </section>

      <footer class="modal-card-foot">
        <button wire:click="store" class="button is-large is-right is-success is-text-sm">Save</button>
        <button wire:click.defer="toggleModal" class="button is-right is-large">Cancel</button>
      </footer>
    </div>
</div>