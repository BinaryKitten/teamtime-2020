@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap overflow-hidden">

        @foreach ($people as $person)
        <div class="w-64 bg-white rounded-lg shadow-xl m-4 p-4">
            <h2 class="font-semibold text-xl leading-snug text-gray-900">{{ $person->name }}</h2>
            <p class="mt-4 text-gray-600">{{ $person->timezone }}</p>
        </div>
        @endforeach

    </div>
@endsection
