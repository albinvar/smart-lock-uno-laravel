<x-success wire:model="successModal">
    <x-slot name="title">
        Application Submitted
    </x-slot>

    <x-slot name="content">
        Hello, Your application has been submitted successfully. We will get back to you soon. Please check out for <strong>emails</strong> from us.
    </x-slot>

    <x-slot name="footer">
        <x-button wire:click="$toggle('successModal')" wire:loading.attr="disabled">
            Nevermind
        </x-button>

        <button type="button" class="mx-3 inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
            Download Application Memo
        </button>
    </x-slot>
</x-success>

<x-error wire:model="errorModal">
    <x-slot name="title">
        Submission Failed
    </x-slot>

    <x-slot name="content">
        Hello , Your application has failed to submit. Please contact support team if you cant submit your application.
    </x-slot>

    <x-slot name="footer">
        <x-button wire:click="$toggle('errorModal')" wire:loading.attr="disabled">
            Retry
        </x-button>

        <x-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
            Contact Support Team
        </x-button>
    </x-slot>
</x-error>
