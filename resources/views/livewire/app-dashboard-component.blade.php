<div class="grid grid-cols-1 md:grid-cols-2 md:gap-2">
    <!-- Styles -->
    @livewireStyles
    <div wire:poll.visible.5s class="col-span-2 md:col-span-1 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
        <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
            Welcome <strong>{{ auth()->user()->name }}</strong>, Good day Isn't it? 😊🤞
        </h1>

        {{ $this->pollServiceStatus() }}

        <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
            You can lock/unlock your door from here.
        </p>
        <div class="mt-12 bg-gray-300 dark:bg-gray-800 bg-opacity-50 rounded-xl p-6 lg:p-8">
            <livewire:system-service-status-component :status="$status" :faceEnabled="$faceEnabled" :rfidEnabled="$rfidEnabled" :webapiEnabled="$webapiEnabled" wire:key="system-service-status-component-{{ $status }}" />
        </div>
    </div>

    <div class="col-span-2 md:col-span-1 bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 flex items-center h-full">
        <livewire:authentication-component :service_status="$status" wire:key="authentication-component-{{ $status }}"  />
    </div>
    <script>
        window.livewire.onError(statusCode => {
            //
        })
    </script>
    @stack('modals')

    @livewireScripts
</div>
