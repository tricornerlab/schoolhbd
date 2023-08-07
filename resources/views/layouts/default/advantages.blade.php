@extends('welcome')

@section('content')

<section class="w-[70%]  mx-auto px-auto mt-8  bg-white  position-static inline-flex ">

    <main class="flex inline-flex w-full   mt-10 mr-0 pr-0">

        <div class="w-full mr-5  bg-gray-50 text-[#2f506c] p-3  pb-0 pt-[12px] pl-0">
            <a href="{{url('advantages')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                {{ $advantages[0]->{'title_'.app()->getLocale()} }}
            </a>

            <section class="text-gray-700 font3 m-6">{!!  $advantages[0]->{'content_'.app()->getLocale()} !!}</section>

        </div>

        <x-rightmenu :sidemenu="$sidemenu" :director="$director" />
    </main>

</section>
</main>
 <main class="w-[70%]  mx-auto">

@endsection
