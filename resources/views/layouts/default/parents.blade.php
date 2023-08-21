@extends('welcome')

@section('content')


    <section class="mx-auto w-[70%] mt-8 ">

            <main class="flex inline-flex w-full mr-0 pr-0 ">

                <div class="w-[80%] mr-5   text-[#2f506c] p-3  pb-0 pt-[15px] pl-0 bg-gray-50">
{{--                    title--}}
                    <a href="{{url('toparents')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                        {{ $text[0]->{'title_'.app()->getLocale()} }}
                    </a>
{{--                    content--}}
                    <section class="text-gray-700  m-6">

                        <p class="">{{ __('sections.parentmessage') }}</p>
                        {!!  $text[0]->{'content_'.app()->getLocale()} !!}
                    </section>




                    <div CLASS="flex flex-col flex-wrap h-[120px] mt-6 ml-4">
                        <a href="{{ url('aboutm') }}">- {{ __('sections.esupport') }}</a>
                        <a href="{{ route('events.index') }}">- {{ __('sections.extractivities') }}</a>
                        <a href="{{ route('meals.index') }}">- {{ __('sections.meals') }}</a>
                        <a href="{{ url('program') }} ">- {{ __('sections.infoclass') }}</a>
                        <a href="{{ url('program') }}">- {{ __('sections.program') }}</a>
                        <a href="{{ url('calendar') }}">- {{ __('sections.calendar') }}</a>
                    </div>
                </div>

            <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </main>

@endsection

