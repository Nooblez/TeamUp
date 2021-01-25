{{-- Success is as dangerous as failure. --}}

<x-jet-action-section>
    <x-slot name="title">
        View and Delete Labels
    </x-slot>

    <x-slot name="description">
        The Labels assigned to your user. Click on the x to delete.
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            All your labels are here.
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                A label represents one of your expertise.
            </p>
        </div>

        <div class="mt-5">
            <x-label-button title="profile-label-button">
                LABEL
            </x-label-button>
        </div>
    </x-slot>
</x-jet-action-section>