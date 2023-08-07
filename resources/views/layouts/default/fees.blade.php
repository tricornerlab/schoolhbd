@extends('welcome')



@section('content')

    <section class="mx-auto w-[80%]  ">


        <section class="mx-auto flex inline-flex w-full  mt-10  ">

            <div class="w-full   text-[#2f506c]   px-3 mr-6 pb-0 pt-[12px] pl-0 bg-gray-50">
                <a href="{{url('fees')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
                   {{$fees[0]->{'title_'.app()->getLocale()} }}
                </a>
                <section class="text-gray-700 font3 m-6">{!!  $fees[0]->{'content_'.app()->getLocale()} !!} : </section>





                    <form class="ml-6 flex flex-col items-center " action="{{route('fees.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        {{--   message         --}}
                        @if(session()->has('success'))
                            <div class="alert alert-success w-[400px] h-[40px] p-2.5">{{session()->get('success')}}</div>
                        @endif


                        @error('name')

                        <div class="alert alert-primary w-[400px] h-[40px] p-2.5">{{$message}}</div>

                        @enderror
                        {{--   FORM         --}}

                        <x-contact></x-contact>
                        <x-green-button class="align-content-lg-end" type="submit">submit
                                </x-green-button>
                    </form>
            </div>


        <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </section>

@endsection

