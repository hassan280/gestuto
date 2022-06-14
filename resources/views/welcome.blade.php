<x-guest-layout>
    <nav class="sticky bg-gray-50 shadow py-5">
        <div class="container mx-auto flex flex-row justify-between">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <img src="{{ asset('image/image1.png') }}" alt="tag" class="w-20 h-20 fill-current" >
            </a>
            <div >
                @if (Auth::user())
                <a href="/meetings" class="py-2 px-3 rounded bg-gray-600 text-gray-50">Dashboard</a>

                @else
                <a href="/login" class="py-2 px-3 rounded bg-gray-600 text-gray-50">Login</a>
                    
                <a href="/register" class="py-2 px-3 rounded bg-indigo-600 text-gray-50">Sign Up</a>
              

                @endif
            </div>
        </div>
    </nav>

    <div class="bg-gray-100 py-20">
        <div class="container mx-auto grid grid-cols-2 gap-4 items-center">
            <x-hero-image class="w-20 h-20 fill-current text-gray-500" />
            <div class="ml-40">
                <h6 class="text-indigo-600 text-xs font-bold my-0.5">ONLINE CLASS</h6>
                <h2 class="text-4xl font-bold mt-0 mb-2">Stay positive, Learn In Your Free Time</h2>
                <p class="text-sm text-gray-400 my-2">Follow your dreams, work hard, practice and persevere. Make sure you find the best instructors.</p>
               
            </div>
        </div>
    </div>
</x-guest-layout>
