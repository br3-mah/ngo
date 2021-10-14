<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modules') }}
        </h2>
    </x-slot>
    <div wire:loading class="is-justify-content-center">
        <div class="px-4 has-background-warning has-text-white">
            <small>Working...</small>
        </div>
    </div>
    <div class="column is-12">
        <button wire:click="toggleModal" class="is-large is-primary py-5 px-12 button">Add New</button>

        <div class="p-2 mt-2 card">
            <table class="table table-responsive">
                <thead class="header">
                    <th><small>Name of Disease</small></th>
                    <th><small>Description</small></th>
                    <th><small>Group/Organization</small></th>
                    <th><small>Modifed</small></th>
                    <th><small>Added on</small></th>
                </thead>
                <tbody>
                    @forelse($results as $disease)
                    <tr>
                        <td>{{ $disease->name }}</td>
                        <td>{{ $disease->description }}</td>
                        <td>{{ "ATS" }}</td>
                        <td>{{ $disease->updated_at }}</td>
                        <td>{{ $disease->created_at }}</td>
                        <td><button wire:click="destroy({{$disease->id}})" class="has-background-danger has-text-white rounded-full is-clickable px-3 py-1">X</button></td>
                        <td><button wire:click="edit({{$disease->id}})" class="has-background-success has-text-white rounded-full is-clickable px-3 py-1">Edit</button></td>
                    </tr>
                    @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="card">
                                    Nothing Here
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>
    @if($isPopped)
        @include('modals.create._add_disease')
    @endif
</div>
