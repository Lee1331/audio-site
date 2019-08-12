@extends('layouts.app')
@section('content')
{{--
<div class="main-container flex justify-center bg-red-500">
    <div class="container bg-teal-600 w-screen">

        <section class="flex">
            <div class="block bg-green-500
            ">
            <h3>Samples</h3>
            <p>View all our samples</p>
            </div>
        </section>
        <section class="flex">
            <div class="inline-flex bg-green-500 h-2/5 ">

            </div>
        </section>

    </div>
</div> --}}

{{-- <div class="flex"> --}}
    <div class="
    {{-- h-screen overflow-hidden --}}
    h-full
    ">
        <section class="flex
        h-108 relative bg-theme-gray
        {{-- sm:h-64 --}}
        ">
                {{-- <div class="bg-local ..." style="background-image: url({{asset('images/cassette.jpeg')}})">
                    <p>img1</p>
                </div> --}}
                {{-- <div
                class="bg-local ... py-20"
                style="background-image: url({{asset('images/cassette.jpeg')}})"></div> --}}
                {{-- <p>img1</p> --}}

                    {{-- <div
                        class="relative"
                    > --}}

                        <img
                        class="
                        {{-- object-cover h-64 w-full ... --}}
                        {{-- object-fit h-2/5 w-full ... --}}
                        object-cover
                        {{-- p-12  --}}
                        w-full ...
                        overflow-hidden
                        "
                        src="{{asset('images/cassette.jpeg')}}">
                        <div class="absolute">
                            <h3 class="text-white">Samples</h3>
                            <p class="text-white">Click here to browse our libary</p>

                        </div>
                    </div>
        </section>
        <section class="block sm:flex h-108 relative bg-theme-gray">
            <div class="container">
                {{-- <p>img2</p> --}}
                <img
                class="
                    object-cover h-108 w-full ...
                    overflow-hidden
                    "
                src="{{asset('images/mixer.jpg')}}">
            </div>
            <div class="container">
                {{-- <p>img3</p> --}}
                <img
                class="
                    {{-- object-contain --}}
                    object-cover h-108 w-full ...
                    overflow-hidden
                    "
                src="{{asset('images/mic.jpg')}}">
            </div>
        </section>

    </div>
@endsection
