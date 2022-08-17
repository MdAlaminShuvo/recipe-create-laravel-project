@extends('Layouts.layout')
@section('title')
    <title>Recipeis</title>
@endsection
@section('body')
    
    <div class="flex flex-wrap justify-center">
        @foreach ($ingredients as $ingredient)
            <div class="w-full max-w-sm m-2">
                <div class="bg-white border-2 border-gray-400 rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ $ingredient->name }}
                        </div>
                        
                        <div class="flex justify-center">
                            
                            
                            <img src="{{ asset('images/food1.jpg') }}" alt="food1" class="w-full">
                        </div>

                        <p class="text-gray-700 text-base">
                            {{ $ingredient->description }}
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        @foreach ($recipe->ingradients as $ingradient)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                {{$ingradient->name}}
                            </span>
                        @endforeach

                    <div class="px-6 py-4">
                        @foreach ($ingredient->recipes as $recipe)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                {{$recipe->name}}
                            </span>
                        @endforeach            

                    </div>
                </div>
            </div>
        @endforeach
    
@endsection