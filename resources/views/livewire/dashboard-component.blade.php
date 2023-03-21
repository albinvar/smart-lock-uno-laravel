<div wire:poll.visible.5s class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome <strong>{{ auth()->user()->name }}</strong>, Good day Isn't it? 😊🤞
    </h1>

    {{ $this->pollServiceStatus() }}

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        You can lock/unlock your door from here.
    </p>
    <div class="mt-12 bg-gray-300 dark:bg-gray-800 bg-opacity-50 rounded-xl grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
        <livewire:system-service-status-component :status="$status" wire:key="system-service-status-component-{{ $status }}" />
    </div>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <livewire:authentication-component :service_status="$status" wire:key="authentication-component-{{ $status }}"  />
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <livewire:intruder-frames-viewer-component />
</div>

<script>
    window.livewire.onError(statusCode => {
        //
    })
</script>