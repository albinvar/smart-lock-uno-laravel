<x-success wire:model="successLockModal">
    <x-slot name="title">
        Door Locks Engaged.
    </x-slot>

    <x-slot name="content">
        {{  session("success") ?? null }}
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
        {{  session("error") ?? null }}
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
        {{  session("success") ?? null }}
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
        {{  session("error") ?? null }}
    </x-slot>

    <x-slot name="footer">
        <x-button wire:click="$toggle('errorUnlockModal')" wire:loading.attr="disabled">
            Retry
        </x-button>
    </x-slot>
</x-error>
