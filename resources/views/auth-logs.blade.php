<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Access Logs') }}
        </h2>
    </x-slot>

    <div class="py-0 md:py-12 mx-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <livewire:auth-logs />
        </div>
    </div>
</x-app-layout>
