@extends('layouts.app')

@section('content')
<body class="bg-blue-100 flex items-center justify-center h-screen">
    <div class="grid grid-cols-3 gap-4 max-w-5xl w-full mx-auto">

        <div class="bg-white rounded-lg shadow-md overflow-hidden w-80">
            <div class="card-header">
                <img class="w-full h-48 object-cover" src="https://picsum.photos/640/480?random=1" />
            </div>
            <div class="card-body flex flex-col items-start py-4 px-6">
                <span class="tag tag-teal text-white bg-green-200 text-xs uppercase font-semibold mb-2">Technology</span
          >
          <h4 class="text-lg font-semibold mb-2">Title of Article</h4>
          <p class="text-gray-600 font-medium mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
            interdum aliquet diam, nec convallis nibh sollicitudin vel. Donec
            sit amet leo augue.
          </p>
          <div class="user mt-auto flex items-center">
            <img
              class="w-8 h-8 rounded-full object-cover mr-2"
              src="https://picsum.photos/640/480?random=2"
            />
            <div class="user-info">
              <h5 class="font-bold">John Doe</h5>
              <small class="text-gray-600">Mar 10, 2021</small>
            </div>
          </div>
          <div class="mt-4 flex items-center">
               
            <button >
             <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" viewBox="0 0 24 24">
               <path d="M12 21.984l-1.734-1.547c-4.125-3.703-7.031-6.328-7.031-9.281 0-2.625 2.25-4.734 4.969-4.734 1.734 0 3.281 0.891 4.031 2.297l0.984 1.828 0.984-1.828c0.75-1.406 2.297-2.297 4.031-2.297 2.719 0 4.969 2.109 4.969 4.734 0 2.953-2.906 5.578-7.031 9.281l-1.734 1.547z"/>
             </svg>
             
           </button>
               <button class=" ml-4 bg-gray-50 w-12 h-6 rounded-md">
                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray" viewBox="0 0 24 24">
                   <path d="M21.984 4.5h-19.969c-1.078 0-2.016 0.938-2.016 2.016v12c0 1.078 0.938 1.969 2.016 1.969h7.969l3 3 3-3h7.031c1.078 0 2.016-.891 2.016-1.969v-12c0-1.078-.938-2.016-2.016-2.016zM6.984 9v-1.5h10.031v1.5h-10.031zM6.984 12.984v-1.5h10.031v1.5h-10.031zM6.984 16.5v-1.5h7.031v1.5h-7.031z"/>
                 </svg>
    
           </button>
            
              
           </div>
        </div>
      </div>
      <!-- Add more cards here... -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden w-80">
        <div class="card-header">
            <img class="w-full h-48 object-cover" src="https://picsum.photos/640/480?random=1" />
        </div>
        <div class="card-body flex flex-col items-start py-4 px-6">
            <span class="tag tag-teal text-white bg-red-200 text-xs uppercase font-semibold mb-2">Technology</span
      >
      <h4 class="text-lg font-semibold mb-2">Title of Article</h4>
      <p class="text-gray-600 font-medium mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
        interdum aliquet diam, nec convallis nibh sollicitudin vel. Donec
        sit amet leo augue.
      </p>
      <div class="user mt-auto flex items-center">
        <img
          class="w-8 h-8 rounded-full object-cover mr-2"
          src="https://picsum.photos/640/480?random=2"
        />
        <div class="user-info">
          <h5 class="font-bold">John Doe</h5>
          <small class="text-gray-600">Mar 10, 2021</small>
        </div>
      </div>
      <div class="mt-4 flex items-center">
               
        <button >
         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" viewBox="0 0 24 24">
           <path d="M12 21.984l-1.734-1.547c-4.125-3.703-7.031-6.328-7.031-9.281 0-2.625 2.25-4.734 4.969-4.734 1.734 0 3.281 0.891 4.031 2.297l0.984 1.828 0.984-1.828c0.75-1.406 2.297-2.297 4.031-2.297 2.719 0 4.969 2.109 4.969 4.734 0 2.953-2.906 5.578-7.031 9.281l-1.734 1.547z"/>
         </svg>
         
       </button>
           <button class=" ml-4 bg-gray-50 w-12 h-6 rounded-md">
             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray" viewBox="0 0 24 24">
               <path d="M21.984 4.5h-19.969c-1.078 0-2.016 0.938-2.016 2.016v12c0 1.078 0.938 1.969 2.016 1.969h7.969l3 3 3-3h7.031c1.078 0 2.016-.891 2.016-1.969v-12c0-1.078-.938-2.016-2.016-2.016zM6.984 9v-1.5h10.031v1.5h-10.031zM6.984 12.984v-1.5h10.031v1.5h-10.031zM6.984 16.5v-1.5h7.031v1.5h-7.031z"/>
             </svg>

       </button>
        
          
       </div>
    </div>
    
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden w-80">
        <div class="card-header">
            <img class="w-full h-48 object-cover" src="https://picsum.photos/640/480?random=1" />
        </div>
        <div class="card-body flex flex-col items-start py-4 px-6">
            <span class="tag tag-teal text-white bg-blue-200 text-xs uppercase font-semibold mb-2">Technology</span
      >
      <h4 class="text-lg font-semibold mb-2">Title of Article</h4>
      <p class="text-gray-600 font-medium mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
        interdum aliquet diam, nec convallis nibh sollicitudin vel. Donec
        sit amet leo augue.
      </p>
      <div class="user mt-auto flex items-center">
        <img
          class="w-8 h-8 rounded-full object-cover mr-2"
          src="https://picsum.photos/640/480?random=2"
        />
        <div class="user-info">
          <h5 class="font-bold">John Doe</h5>
          <small class="text-gray-600">Mar 10, 2021</small>
        </div>
        
      </div>
      <div class="mt-4 flex items-center">
               
        <button >
         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" viewBox="0 0 24 24">
           <path d="M12 21.984l-1.734-1.547c-4.125-3.703-7.031-6.328-7.031-9.281 0-2.625 2.25-4.734 4.969-4.734 1.734 0 3.281 0.891 4.031 2.297l0.984 1.828 0.984-1.828c0.75-1.406 2.297-2.297 4.031-2.297 2.719 0 4.969 2.109 4.969 4.734 0 2.953-2.906 5.578-7.031 9.281l-1.734 1.547z"/>
         </svg>
         
       </button>
           <button class=" ml-4 bg-gray-50 w-12 h-6 rounded-md">
             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray" viewBox="0 0 24 24">
               <path d="M21.984 4.5h-19.969c-1.078 0-2.016 0.938-2.016 2.016v12c0 1.078 0.938 1.969 2.016 1.969h7.969l3 3 3-3h7.031c1.078 0 2.016-.891 2.016-1.969v-12c0-1.078-.938-2.016-2.016-2.016zM6.984 9v-1.5h10.031v1.5h-10.031zM6.984 12.984v-1.5h10.031v1.5h-10.031zM6.984 16.5v-1.5h7.031v1.5h-7.031z"/>
             </svg>

       </button>
        
          
       </div>
       
        </div>
</body>
    @endsection



