@extends('welcome')

@section('content')


    <section class="mx-auto w-[70%] mt-8 ">

            <main class="flex inline-flex w-full mr-0 pr-0">

                <div class="w-[80%] mr-5   text-[#2f506c] p-3  pb-0 pt-[15px] pl-0">
                    <a href="{{url('partners')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                     ABOUT MOODLE
{{--{{ $text[0]->{'title_'.app()->getLocale()} }}--}}
                    </a>
                    <section class="text-gray-700 font3 m-6">
                        {!!  $text[0]->{'title_'.app()->getLocale()} !!}
                    </section>



                    <p>For supply collaboration please click <a href="{{url('suppliers')}}" class="text-green-600">here.
                            <p>You will be redirected to suppliers area.</p></a>
                    </p>
                </div>

            <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </main>

@endsection

