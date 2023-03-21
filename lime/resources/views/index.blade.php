@extends('layouts.app')

@section('content')
<div class="container flex justify-center items-center">
    <div class="bg-gray-100 py-8 px-4 sm:px-6 lg:px-8 max-w-xl">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden md:max-w-lg">
          <div class="md:flex">
            <div class="md:flex-shrink-0 bg-indigo-600">
              <img class="h-48 w-full object-cover md:w-48" src="https://i.etsystatic.com/20986367/r/il/0bfeb2/2619062962/il_794xN.2619062962_lwdw.jpg" alt="Limesol-NMS Logo">
            </div>
            <div class="p-8">
              <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Limesol-NMS</div>
              <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">A Network Management System</a>
              <p class="mt-2 text-gray-500">Limesol-NMS is a comprehensive Network Management System designed to help network administrators manage their network resources more efficiently. With advanced features such as real-time monitoring, performance analysis, and network automation, Limesol-NMS simplifies the complex task of managing a modern network.</p>
              <div class="mt-4 flex justify-center">
                @guest
                <a href="{{ route('login') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded">Login</a>
                <a href="{{ route('register') }}" class="inline-block bg-gray-400 hover:bg-gray-500 text-white py-2 px-4 rounded ml-2">Register</a>
                @endguest
                
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
