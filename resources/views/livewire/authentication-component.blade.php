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
        Use these features to control the lock status.
    </p>

    <div wire:poll class="inline-flex p-2 mt-3" role="group">

            <button type="button" wire:click="lock" wire:loading.remove class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Lock
            </button>
            <button disabled type="button" wire:loading wire:target="lock" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                </svg>
                Loading...
            </button>

        <button type="button" wire:click="$toggle('confirmingPassword')" wire:loading.remove wire:target="unlock" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Unlock
        </button>
        <button disabled type="button" wire:loading wire:target="unlock" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
            </svg>
            Loading...
        </button>
    </div>

    <x-alert />

    <x-success wire:model="successLockModal">
        <x-slot name="title">
            Door Locks Engaged.
        </x-slot>

        <x-slot name="content">
            {{ $message }}
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="$toggle('successLockModal')" wire:loading.attr="disabled">
                Nevermind
            </x-button>

            <button type="button" wire:click="$toggle('successLockModal')"  class="mx-3 inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
                Unlock
            </button>
        </x-slot>
    </x-success>

    <x-error wire:model="errorLockModal">
        <x-slot name="title">
            Error Encountered...!!!
        </x-slot>

        <x-slot name="content">
            {{ $message ?? 'Something went wrong, please try again.' }}
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="$toggle('errorLockModal')" wire:loading.attr="disabled">
                Retry
            </x-button>

        </x-slot>
    </x-error>



    <x-success wire:model="successUnlockModal">
        <x-slot name="title">
            Door locks disengaged
        </x-slot>

        <x-slot name="content">
           {{ $message }}
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="$toggle('successUnlockModal')" wire:loading.attr="disabled">
                Nevermind
            </x-button>

            <button type="button" wire:click="lock" class="mx-3 inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
                Lock again
            </button>
        </x-slot>
    </x-success>

    <x-error wire:model="errorUnlockModal">
        <x-slot name="title">
            Error encountered..
        </x-slot>

        <x-slot name="content">
            {{ $message ?? 'Something went wrong, please try again.' }}
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="$toggle('errorUnlockModal')" wire:loading.attr="disabled">
                Retry
            </x-button>
        </x-slot>
    </x-error>


    <!-- Log Out Other Devices Confirmation Modal -->
    <x-dialog-modal wire:model="confirmingPassword">
        <x-slot name="title">
            {{ __('Enter password to unlock..') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Please enter your password to unlock the lock.') }}

            <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                <x-input type="number" class="mt-1 block w-3/4"
                         autocomplete="pin"
                         placeholder="{{ __('Access Pin') }}"
                         x-ref="pin"
                         wire:model.defer="pin"
                         wire:keydown.enter="unlock" />

                <x-input-error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingPassword')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-3"
                      wire:click="unlock"
                      wire:loading.attr="disabled">
                {{ __('Unlock') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
