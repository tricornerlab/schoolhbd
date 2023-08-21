@extends('welcome')

@section('content')

    <section class="mx-auto max-w-6xl mt-8 ">

        <main class="flex inline-flex w-full mt-10 mr-2 pr-0 ">

            <div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0 bg-gray-50">
                <a href="{{url('program')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                    {{ ucfirst($program[0]->{'title_'.app()->getLocale() } )  }}
                </a>
                <section class="text-gray-700 font3 m-6">{!!  $program[0]->{'content_'.app()->getLocale()} !!}</section>

                <p class="mb-4">Selectionnez la classe pour visualiser le programme pour l'année scolaire:</p>

                @foreach($classes as $id => $class)
                    <a href="{{ route('classes.show', $id) }}" class="text-green-600 px-2 ">{{  $class  }}</a>
                @endforeach
            </div>



            <x-rightmenu :sidemenu="$sidemenu" :director="$director" class="" />

        </main>


@endsection

