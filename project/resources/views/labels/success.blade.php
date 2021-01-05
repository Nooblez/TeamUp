<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
            	La tua label è stata creata con successo! <br> Sarai reindirizzato alla Dashboard in 5 secondi.
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
	
setTimeout(function () {
   window.location.href="{{ route('dashboard') }}"; // the redirect goes here
},5000);

</script>