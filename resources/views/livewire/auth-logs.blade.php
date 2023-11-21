<div>
    <main class="h-full overflow-y-auto">
        <div class="flex justify-center">

            <div class="bg-white dark:bg-gray-800 mt-4 px-4 py-3 rounded-lg shadow-md max-w-xs lg:max-w-xl mb-6">


                @forelse($authLogs as $log)
                    <div class="mt-3 mb-4">
                        <div class="flex items-center mt-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 rounded-lg px-1 py-1 cursor-pointer">
                            <div class="mx-3 py-2">
                                <span class="font-medium font-semibold dark:text-gray-200 text-sm">@if($log->status == 1) Successful Authentication ✅@else Failed Authentication ❌@endif</span>
                                <br>
                                <span class="text-xs mt-2 font-italic text-gray-600 font-semibold dark:text-gray-500">Method : {{ $log->type }}</span>
                                <p class="text-sm font-sans dark:text-gray-300">{{ $log->message }}</p>
                                <div class="mt-2">
                                    <span class="text-xs mt-2 font-italic text-gray-600 font-semibold dark:text-gray-500">Recorded : {{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="mt-3 mb-2">
                        {{-- The best athlete wants his opponent at his best. --}}
                        <div class="flex items-center mt-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 rounded-lg px-1 py-1 cursor-pointer">
                            <div class="mx-3">
                                <span class="font-medium font-semibold dark:text-gray-200 text-sm">No Logs Found...!!!</span>
                            </div>
                        </div>
                    </div>

                @endforelse
        </div>
        </div>

</main>

</div>
