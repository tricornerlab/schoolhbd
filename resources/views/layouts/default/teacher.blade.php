@extends('welcome')

@section('content')


    <section class="mx-auto w-[70%] mt-8 ">

            <main class="flex inline-flex w-full mr-0 pr-0">

                <div class="w-[80%] mr-5   text-[#2f506c] p-3  pb-0 pt-[15px] pl-0">
                    <a href="{{url('teachers')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                        TEACHERS{{ $enseignant[0]->{'title_'.app()->getLocale()} }}
                    </a>

                    <section class="text-gray-700 h3 m-6">
                        <img src="{{ env('APP_URL').$enseignant[0]->img }}" class="h-[200px]">
                        {!!  $enseignant[0]->name.  $enseignant[0]->surname  !!}
                    </section>




                    <p>Enseignante de {{$enseignant[0]->role}}<a href="{{url('suppliers')}}" class="text-green-600">here.
                            </a>
                    </p>
                </div>

            <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </main>


        {{--                    TEACHERS CAROUSEL--}}

        <x-carousel-component :teachers="$teachers" />

@endsection

