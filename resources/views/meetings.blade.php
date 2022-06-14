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
    <div class="container flex justify-center mx-auto mt-6"><h1 >Meetings</h1></div>
    
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
                                Meeting id
                              </th>
                              <th class="px-20 py-2 text-xs text-gray-500">
                                Topic
                              </th>
                              <th class="px-20 py-2 text-xs text-gray-500">
                                date
                              </th>
                              <th class="px-6 py-2 text-xs text-gray-500">
                                Join Url
                              </th>
                              
                          </tr>
                      </thead>
                      <tbody class="bg-white">
                       
                        @foreach ($reunions as $r) 
                          <tr class="whitespace-nowrap">
                              {{-- <td class="px-6 py-4 text-sm text-gray-500">
                                {{$r->id}}
                              </td> --}}
                              <td class="px-20 py-4">
                                  <div class="text-sm text-gray-900">
                                    {{$r->metting_id}}
                                  </div>
                              </td>
                              <td class="px-20 py-4">
                                  <div class="text-sm text-gray-500">{{$r->topic}}</div>
                              </td>
                              <td class="px-20 py-4">
                                <div class="text-sm text-gray-500">{{$r->start_at}}</div>
                            </td>
                              <td class="px-20 py-4 text-sm text-gray-500">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"><a href="{{$r->join_url}}" target="_blank">join meeting</a></button>
                              </td>
                              <td class="px-20 py-4">
                                <div class="text-sm text-red-700">
                                <form action="meetings/{{ $r->id }}" method="POST">
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
