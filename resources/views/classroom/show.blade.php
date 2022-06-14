<x-app-layout>
    <div class="container relative d-flex mx-auto p-10 h-60 bg-blue-400 shadow items-baseline rounded">
        <h2 class="text-blue-100 font-black text-5xl mb-1">{{$classroom->classroom}}</h2>
        <h4 class="text-white text-lg mb-10"><span>Section: </span>{{$classroom->section}}</h4>
        <h4 class="text-white text-2xl">{{$classroom->description}}</h4>
        <h4 class="text-white text-2xl"><span class="fw-bold">Class Code: </span>{{$classroom->code}}</h4>
    </div>


    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-2 col-span-4 shadow-sm bg-white p-10 mb-5">

                <form method="POST" action="{{ route('content.store') }}">
                    @csrf
                    <div>
                        <h1 class="font-bold mb-10 text-3xl">Create a New Post:</h1>
                        <!-- Class Name -->
                        <div>
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                autofocus />
                        </div>

                        <!-- Section Number -->
                        <div class="mt-4">
                            <x-label class="mt-5" for="description" :value="__('Description')" />
                            <textarea name="description" id="description" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                        </div>

                        <input type="hidden" value="{{$classroom->id}}" name="classroom_id">

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('post') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
            @foreach ($contents as $content)
            <div class="relative col-start-2 col-span-4 shadow-lg bg-white p-5">

                <div x-data="{ show: false }" class="absolute top-0 right-0 mt-5 mr-5">
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">        
                                    <div class="ml-1">
                                        <x-icons.more-vert/>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                               <x-dropdown-link href="{{ route('content.edit', $content->id)}}">
                                    {{ __('Update') }}
                                </x-dropdown-link>
                                <x-dropdown-link>
                                <form action="{{ route('content.destroy', $content->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">
                                        {{ __('Delete') }}
                                        </button>
                                    </form>
                                    </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

                <h2 class="font-bold text-lg">{{$content->title}}</h2>    
                <p class="text-xs">Updated at: {{$content->updated_at}}</p>    
                <p class="mt-5 text-lg">{{$content->description}}</p>    
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
