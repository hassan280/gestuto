<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Create New Classroom') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('classroom.join') }}">
                        @csrf
                        <div>
                            <!-- Class Name -->
                            <div>
                                <x-label for="code" :value="('code')" />

                                <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" autofocus />
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Join New Classroom') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>