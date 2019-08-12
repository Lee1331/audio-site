@extends('layouts.app')
@section('content')
{{-- <div class="flex flex-wrap h-screen bg-red-500">
    <section>
        <div class="container bg-teal-600 h-screen">
            <div class="bg-green-500 ">

            </div>
        </div>
    </section>
</div> --}}
<div class="main-container flex justify-center bg-red-500">
    <div class="container
    bg-teal-600 w-screen
    {{-- sh-screen --}}
    {{-- w-5/6 --}}
    ">
        <section class="flex">
            <div class="block bg-green-500
            h-2/5 sm:h-full md:h-5/12 lg:h-5/12 xl:h-5/12
            ">

                {{-- <img
                class=" --}}
                {{-- object-cover h-64 w-full ... --}}
                    {{-- overflow-hidden
                    "
                src="{{asset('images/cassette.jpeg')}}"> --}}

            </div>
        </section>
        <section class="flex">
            <div class="inline-flex bg-green-500 h-2/5 ">
                {{-- <img
                class="
                    object-cover h-64 w-1/2 ...
                    overflow-hidden
                    "
                src="{{asset('images/mixer.jpg')}}">

                <img
                class="
                    object-cover h-64 w-1/2 ...
                    overflow-hidden
                    "
                src="{{asset('images/mic.jpg')}}"> --}}
            </div>
        </section>
    {{-- <div class="bg-orange-500 h-2/5 ">
            <section>
                e
            </section>
        </div> --}}
    </div>
</div>
@endsection
