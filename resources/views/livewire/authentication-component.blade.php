<div>
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
        </svg>
        <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
            Authentication
        </h2>
    </div>

    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Authentication and registration views are included with Laravel Jetstream.
    </p>

    <div class="inline-flex p-2 mt-3" role="group">
        <button type="button" wire:click="$toggle('confirmingPassword')" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Lock
        </button>
        <button type="button" wire:click="unlock" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Unlock
        </button>
    </div>

    <x-alert />

    <x-confirm />

    <!-- Log Out Other Devices Confirmation Modal -->
    <x-dialog-modal wire:model="confirmingPassword">
        <x-slot name="title">
            {{ __('Enter password to unlock..') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Please enter your password to unlock the lock.') }}

            <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                <x-input type="password" class="mt-1 block w-3/4"
                         autocomplete="current-password"
                         placeholder="{{ __('Password') }}"
                         x-ref="password"
                         wire:model.defer="password"
                         wire:keydown.enter="lock" />

                <x-input-error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingPassword')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-3"
                      wire:click="lock"
                      wire:loading.attr="disabled">
                {{ __('Unlock') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
