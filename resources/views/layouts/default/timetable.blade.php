@extends('welcome')

@section('content')

    <main class="flex inline-flex w-full  ml-10 mt-10 mr-0 pr-0">

    <div class="w-[65%] mr-5  bg-gray-50 text-[#2f506c] py-3 pt-0  pb-0 pt-[15px] pl-0">
        <a href="{{url('timetables')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
            Timetable
        </a>

        <section class="text-gray-700 font3 my-6"></section>

        <x-timetable :timetable="$timetable" class="items-center"></x-timetable>

    </div>

@endsection
