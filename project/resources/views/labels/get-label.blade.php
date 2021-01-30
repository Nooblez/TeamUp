<x-guest-layout>
    <ul>
        @foreach(App\Models\Label::all() as $label)
            <li>
                <x-label-button title="getLabel">
                    {{ $label->label_name }}
                </x-label-button>
            </li>
        @endforeach
    </ul>
</x-guest-layout>