

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('meetings') }}
      </h2>
  </x-slot>

  {{-- <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  You're logged in!
              </div>
          </div>
      </div>
  </div> --}}
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-6 mt-6 rounded-full"><a href="/add-subject" class="ml-3 	decoration-gray-500 btn btn-primary	">add a subject</a></button>

  <div class="container flex justify-center mx-auto "><h1 >Subjects</h1></div>
  
  <div class="container flex justify-center mx-auto">
    
    <div class="flex flex-col mt-8">
      
        <div class="w-full">
          
            <div class="border-b border-gray-200 shadow">
             
              <table >
                <thead class="bg-gray-50">
                    <tr>
                        {{-- <th class="px-20 py-2 text-xs text-gray-500 ">
                            ID
                        </th> --}}
                        <th class="px-20 py-2 text-xs text-gray-500">
                          Name
                        </th>
                        <th class="px-20 py-2 text-xs text-gray-500">
                            
                          </th>

                        
                        
                    </tr>
                </thead>
                <tbody class="bg-white">
                 
                  @foreach ($subjects as $s) 
                    <tr class="whitespace-nowrap">
                        {{-- <td class="px-6 py-4 text-sm text-gray-500">
                          {{$s->id}}
                        </td> --}}
                        <td class="px-20 py-4">
                            <div class="text-sm text-gray-900">
                              {{$s->name}}
                            </div>
                        </td>
                        <td class="px-20 py-4">
                            <div class="text-sm text-red-700">
                            <form action="subjects/{{ $s->id }}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                              <button type="submit" >DELETE</button>
                            </form>
                        </div>
                        </td>
                        
                        
                    </tr>
                    @endforeach
                    

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
  
    
</x-app-layout>
