<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organizations') }}
        </h2>
    </x-slot>
    <div wire:loading class="is-justify-content-center">
        <div class="px-4 has-background-warning has-text-white">
            <small>Working...</small>
        </div>
    </div>
    <div class="column is-12">
        <button wire:click="toggleModal" class="is-large is-primary py-5 px-12 button">Create Organization</button>

        <div class="p-2 mt-2 card">
            
        </div>
    </div>
</div>
