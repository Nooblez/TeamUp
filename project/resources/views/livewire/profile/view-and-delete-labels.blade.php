{{-- Success is as dangerous as failure. --}}

<x-jet-action-section>
    <x-slot name="title">
        View and Delete Labels
    </x-slot>

    <x-slot name="description">
        The Labels assigned to your user. Click on the label to remove it from your profile.
    </x-slot>

    <x-slot name="content">
        @if( Auth::user()->hasLabels() )
            @foreach(Auth::user()->whatLabels() as $label)
                <div class="mt-5">
                    <x-label-button title="profile-label-button" wire:click="deleteLabel($label, Auth::user())">
                        $label->label_name
                    </x-label-button>
                </div>
             @endforeach
        @else
            <h3 class="text-lg font-medium text-gray-900">
                View and Delete Labels
            </h3>

            <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>
                    The Labels assigned to your user. Click on the label to remove it from your profile.
                </p>
            </div>
                
        @endif 
    </x-slot>
</x-jet-action-section>