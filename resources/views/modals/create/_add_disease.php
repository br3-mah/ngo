
<div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">

      <header class="has-background-black modal-card-head">
        <span class="file-icon">
            <i class="fas fa-photo-video"></i>
        </span>
        <p class="has-white modal-card-title">Add A Disease</p>
        <button wire:click.defer="toggleModal" class="delete" aria-label="close"></button>
      </header>

      <section class="modal-card-body">
            <div class="field">
                <label class="label">Disease Name</label>
                <div class="control">
                  <input wire:model="caption_title" class="input" type="text" placeholder="Movie, Series, Sports or New Title">
                    @error('caption_title') <small class="error has-text-danger">{{ $message }}</small> @enderror
                </div>
            </div>        
           
          
            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                  <textarea wire:model="background_desc" class="textarea" placeholder="Brief story background about the media"></textarea>
                  
                </div>
            </div>

      </section>

      <footer class="modal-card-foot">
        <button wire:click="uploadMedia" class="button is-success">Save changes</button>
        <button class="button">Cancel</button>
      </footer>
    </div>
</div>