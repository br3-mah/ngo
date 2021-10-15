
<div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">

      <header class="has-background-secondary modal-card-head">
        <span class="file-icon">
            <i class="fas fa-photo-video"></i>
        </span>
        <p class="has-white modal-card-title">Add An Intervension</p>
        <button wire:click.defer="toggleModal" class="delete" aria-label="close"></button>
      </header>

      <section class="modal-card-body">
            <div class="field">
                <label class="small is-primary">Name</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-large" wire:model="name" type="text" placeholder="">
                    <span class="icon is-medium is-left">
                        <i class="fa fa-search"></i>
                    </span>
                    <span class="icon is-medium is-right">
                        <i class="fa fa-check"></i>
                    </span>
                </div>
            </div>        
           
            <div class="field">
                <label class="small is-primary">Associated Module</label>
                <div class="control has-icons-left has-icons-right">
                    <select class="input is-large" wire:model="module_id" type="text" placeholder="">
                        <optgroup>
                            @forelse($modules as $m)
                            <!-- <option value="">-- Select --</option> -->
                                <option value="{{$m->id}}">{{$m->name}}</option>
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
                <label class="small">Intervension Description</label>
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