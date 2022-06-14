<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Update Classroom') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('classroom.update', $classroom->id) }}">
                        @csrf
                        @method("PATCH")
                        <div>
                            <!-- Class Name -->
                            <div>
                                <x-label for="classroom" :value="('Classroom')" />

                                <x-input id="classroom" class="block mt-1 w-full" type="text" name="classroom" :value="$classroom->classroom" autofocus />
                            </div>
                            <!-- Section Number -->
                            <div class="mt-4">
                                <x-label for="section" :value="('Section')" />

                                <x-input id="section" class="block mt-1 w-full" type="number" name="section" :value="$classroom->section"/>
                            </div>

                            <!-- Description -->
                            <div class="mt-4">
                                <x-label for="description" :value="('Description')" />

                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$classroom->description"/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Update Classroom') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>