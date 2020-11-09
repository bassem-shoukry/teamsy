@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Start your free trial
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                sign in to your account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">

                <x-input wire:model.lazy="name" />

                <x-input wire:model.lazy="email" type="email" label="Email Address"/>

                <x-input wire:model.lazy="companyName" label="Company Name"/>

                <x-input wire:model.lazy="password" type="password" />

                <x-input wire:model.lazy="passwordConfirmation" type="password"  label="Confirm Password" placeholder="Confirm your password"/>

                <x-button>Register</x-button>
            </form>
        </div>
    </div>
</div>
