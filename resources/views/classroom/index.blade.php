<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Classroom') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4">
            @foreach ($classrooms as $classroom)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">
                    <div class="bg-white border-b border-gray-200">
                        <div class="bg-red-400 p-6">
                            <div class="flex justify-between">
                                <a href="classroom/{{$classroom->id}}" class="font-bold text-gray-50 text-lg capitalize">
                                    {{$classroom->classroom}}
                                </a>

                                <div class="flex">
                                    @can('delete-classroom', User::class)
                                    <form action="{{ route('classroom.destroy', $classroom->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">
                                            <x-icons.delete/>
                                        </button>
                                    </form>
                                    @endcan
    
                                    @can('update-classroom', User::class)
                                    <a href="{{ route('classroom.edit', $classroom->id)}}">
                                        <x-icons.update/>
                                    </a>
                                    @endcan
                                </div>
                    
                            </div>

                            <p class="text-gray-100 text-sm">{{$classroom->section}}</p>
                        </div>
                        <div class="p-6">
                            <ul>
                                <h5 class="font-bold">Upcoming Tasks:</h5>
                                <li>Final Assignment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
