@extends('welcome')

@section('content')

    <section class="mx-auto max-w-6xl mt-8">


            <main class="flex inline-flex w-full  mt-10 mr-0 pr-0">

    <div class="w-[80%] mr-5  bg-gray-50 text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
        <a href="{{url('history')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
            {{ $text[0]->{'title_'.app()->getLocale()} }}
        </a>

        <section class="text-gray-700 font3 m-6">{!!  $text[0]->{'content_'.app()->getLocale()} !!}</section>


    </div>





                <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

            </main>

@endsection
