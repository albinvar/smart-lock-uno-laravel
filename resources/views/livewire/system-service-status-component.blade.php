<div>
    <div wire:poll.visible.5s>
        {{ $this->pollServiceStatus() }}

        System Status :

        @if($status)
            <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 text-sm font-medium mr-2  rounded-full dark:bg-green-900 dark:text-green-300 animate-pulse">Online</div>
        @else
            <div class="inline-flex items-center px-3 py-1 bg-red-100 text-red-800 text-sm font-medium mr-2 rounded-full dark:bg-red-900 dark:text-red-300 animate-pulse"> Offline...</div>
        @endif

    </div>
</div>
