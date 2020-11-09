<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Create New Department
        </h2>
        <br>
    </div>

    <form id="contact-me" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 "  wire:submit.prevent="submit">


        <!-- name field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                       id="name" type="text" placeholder="Department Name" wire:model.lazy="name" required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Department name
                </label>
            </div>
        </div>

        <button type="submit" class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Create
        </button>

    </form>

</div>


