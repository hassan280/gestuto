{{-- <!DOCTYPE html>
<html>
<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   
</body>
</html> --}}


<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('meetings') }}
      </h2>
  </x-slot>
  <div class="mt-10 flex justify-center mx-auto p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

  <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-subject')}}">
    @csrf
    <div class="mb-6">
      <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">subject name</label>
      <input type="text" id="subject" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="subject" required>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger text-red-700 ">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
  </div>
    
 
{{-- 
  <div class="container mt-4 offset-md-2" >
  
    <div class="card" style="width: 28rem;">
      <div class="card-header text-center font-weight-bold">
        add a subject
      </div>
      <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-subject')}}">
         @csrf
          <div class="form-group">
            <label for="subject"></label>
            <input type="text" id="subject" name="subject" class="form-control" required="">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>  --}}
 
  
    
</x-app-layout>
