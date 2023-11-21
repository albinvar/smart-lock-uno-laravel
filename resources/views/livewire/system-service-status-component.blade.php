<div class="flex flex-col">
    <div class="pb-2">
        Lock Status :
        @if($status)
            <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 text-sm font-medium mr-2 rounded-full dark:bg-green-900 dark:text-green-300 animate-pulse">Online</div>
        @else
            <div class="inline-flex items-center px-3 py-1 bg-red-100 text-red-800 text-sm font-medium mr-2 rounded-full dark:bg-red-900 dark:text-red-300 animate-pulse">Offline...</div>
        @endif
    </div>

    <div id="auth-methods" class="text-xs mt-3">
        <div class="flex items-center justify-between pb-2">
            <span>Face Recognition :</span>
            @if($faceEnabled)
                <div class="inline-flex items-center px-3 py-1 text-green-800 text-xs font-medium mr-2 rounded-full dark:text-green-300 animate-pulse">Active ✅</div>
            @else
                <div class="inline-flex items-center px-3 py-1 text-red-800 text-xs font-medium mr-2 rounded-full dark:text-red-300 animate-pulse">Inactive ⚠️</div>
            @endif
        </div>

        <div class="flex items-center justify-between pb-2">
            <span>Card Access :</span>
            @if($rfidEnabled)
                <div class="inline-flex items-center px-3 py-1 text-green-800 text-xs font-medium mr-2 rounded-full dark:text-green-300 animate-pulse">Active ✅</div>
            @else
                <div class="inline-flex items-center px-3 py-1 text-red-800 text-xs font-medium mr-2 rounded-full dark:text-red-300 animate-pulse">Inactive ⚠️</div>
            @endif
        </div>

        <div class="flex items-center justify-between pb-2">
            <span>Web API :</span>
            @if($webapiEnabled)
                <div class="inline-flex items-center px-3 py-1 text-green-800 text-xs font-medium mr-2 rounded-full dark:text-green-300 animate-pulse">Active ✅</div>
            @else
                <div class="inline-flex items-center px-3 py-1 text-red-800 text-xs font-medium mr-2 rounded-full dark:text-red-300 animate-pulse">Inactive ⚠️</div>
            @endif
        </div>
    </div>
</div>
