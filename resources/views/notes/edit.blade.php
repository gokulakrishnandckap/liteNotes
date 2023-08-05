<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                {{-- @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach --}}

                <form action="{{ route('notes.update',$note) }}" method="post">
                    @method('put')
                    @csrf
                    <input 
                        type="text"
                        name="title" 
                        placeholder="Title" 
                        class="w-full" autocompleted="off" :value="$note->title">

                    <textarea name="text" id=""rows="10" placeholder="Start typing here.." class="w-full mt-6" :value="$note->title"></textarea>
                    @error('text')
                    <div class="text-red-600 text-sm">{{ $message }}</div>   
                @enderror
                    <button class="mt-6">Save Note</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>