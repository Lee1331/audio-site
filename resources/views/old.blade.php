@extends('layouts.app')
@section('content')
    {{-- <div class="bg-theme-gray">
        test
    </div> --}}
    {{-- <div class="w-5/6 flex justify-center"> --}}
    <div class="flex w-5/6
     {{-- h-screen --}}
     ">

            <img
            {{-- class="h-1/2" --}}
            class="
            {{-- w-5/6 --}}
            {{-- h-1/2 --}}
            {{-- w-screen --}}
                {{-- max-w-screen sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl --}}
                {{-- h-auto  --}}
                {{-- max-h-full sm:max-h-screen md:max-h-full lg:max-h-screen xl:max-h-half --}}

                {{-- h-screen --}}
                {{-- max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl --}}
                {{-- max-h-md sm:max-h-md md:max-h-lg lg:max-h-xl xl:max-h-2xl --}}
                {{-- bg-cover bg-center
                    --}}

                    {{-- object-cover h-1/2 w-full ... --}}
                    object-cover h-2/5 w-full ...
                    {{-- object-scale-down h-1/2 w-full ... --}}
                {{-- overflow-hidden --}}
                overflow-auto
                "
            {{-- src="{{$img}}"> --}}
            src="{{asset('images/cassette.jpeg')}}">

            {{-- <div class="flex m-auto">
                <img
                class="
                    object-contain h-2/5 w-1/2 ...
                    overflow-hidden
                    "
                src="{{asset('images/mixer.jpg')}}">

                <img
                class="
                    object-contain h-2/5 w-1/2 ...
                    overflow-hidden
                    "
                src="{{asset('images/mic.jpg')}}">
            </div> --}}
    </div>

    {{-- <div class="w-5/6 flex m-auto">
        <div class="flex m-auto">
            <img
            class="
                object-contain h-2/5 w-1/2 ...
                overflow-hidden
                "
            src="{{asset('images/mixer.jpg')}}">

            <img
            class="
                object-contain h-2/5 w-1/2 ...
                overflow-hidden
                "
            src="{{asset('images/mic.jpg')}}">
        </div>
    </div> --}}



@endsection
