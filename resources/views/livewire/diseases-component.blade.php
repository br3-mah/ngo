<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diseases') }}
        </h2>
    </x-slot>
    <div class="column is-12">
        <button wire:click="toggleModal" class="button">Create</button>
    </div>
    @if($isPopped)
        @include('modals.create._add_disease')
    @endif
</div>
