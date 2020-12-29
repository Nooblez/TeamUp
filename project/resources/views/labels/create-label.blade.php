<x-jet-form-section submit="createLabel">
    <x-slot name="title">
        New Label
    </x-slot>

    <x-slot name="description">
        Create a new label to expand your horizons.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="Label Name" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autofocus />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="description" value="Label Description" />
            <x-textarea title="description" id="description" class="mt-1 block w-full" wire:model.defer="state.description" autofocus>Label Description</x-textarea>
            <x-jet-input-error for="description" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
