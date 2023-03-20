<div>
<div class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
    </svg>
    <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
        Intruders
    </h2>
</div>

<p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
    The images captured based on unauthorized presence.
</p>

<div class="mt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach($intruders as $intruder)
        <div class="flex flex-col items-center">
            <img src="{{ env('API_ENDPOINT', '') . $intruder }}" class="w-full h-auto rounded-lg shadows-lg">
            <span class="text-sm mt-2"></span>
        </div>
    @endforeach
</div>

@push('scripts')
    <script>
        function fetchIntruders() {
            Livewire.emit('fetchIntruders');
        }

        setInterval(fetchIntruders, 30000);
    </script>
@endpush
</div>
