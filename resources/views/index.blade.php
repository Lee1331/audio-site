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
        {{-- <section class="flex
        h-108 relative bg-theme-gray
        "> --}}

        <section class="sm:flex h-108 content-center">
        {{-- <section class="sm:flex h-halfscreen content-center"> --}}
            <image-component src="{{ asset('images/cassette.jpeg')}}"></image-component>
        </section>

        <section class="
        sm:flex h-108 content-center
        {{-- sm:flex h-halfscreen content-center --}}
        ">
            <image-component src="{{asset('images/mixer.jpg')}}"></image-component>
            <image-component src="{{asset('images/mic.jpg')}}"></image-component>
            <image-component src="{{asset('images/mic.jpg')}}"></image-component>
        </section>

    </div>
@endsection
