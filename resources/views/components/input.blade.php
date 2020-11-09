@props([
    'type' => 'text',
    'required' => true,
    'label' => ucwords($attributes->whereStartsWith('wire:model')->first()),
    'placeholder' => 'Enter your '. $attributes->whereStartsWith('wire:model')->first(),
    'label' => $attributes->whereStartsWith('wire:model')->first()
])

<div class="mt-6">
    <label for="{{$label}}" class="block text-sm font-medium text-gray-700 leading-5">
        {{ucwords($label)}}
    </label>

    <div class="mt-1 rounded-md shadow-sm">
        <input {{$attributes->whereStartsWith('wire:model')}}
                id="{{$label}}"
               type="{{$type}}"
               required="{{$required}}"
               placeholder="{{$placeholder}}"
               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error($attributes->whereStartsWith('wire:model')->first()) border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
    </div>

    @error($attributes->whereStartsWith('wire:model')->first())
        <p class="mt-2 text-sm text-red-600" wire:key="error_{{$attributes->whereStartsWith('wire:model')->first()}}">{{$message}}</p>
    @enderror
</div>
