@extends('welcome')

@section('content')


    <section class="mx-auto w-[70%] mt-8 ">

            <main class="flex inline-flex w-full mr-0 pr-0">

                <div class="w-[80%] mr-5   text-[#2f506c] p-3  pb-0 pt-[15px] pl-0 bg-gray-50">
                {{--      title              --}}
                    <a href="{{url('partners')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                        {{ ucfirst($text[0]->{'title_'.app()->getLocale()}) }}
                    </a>
                {{--      content              --}}
                    <section class="text-gray-700 font3 m-6">
                        {!!  $text[0]->{'content_'.app()->getLocale()} !!}
                    </section>




                </div>

            <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </main>

@endsection

