@extends('welcome')

@section('content')

    <section class="mx-auto w-[70%] mt-8">
        <main class="flex inline-flex w-full  mt-10 mr-0 pr-0">

<div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0 bg-gray-50">
    <a href="{{route('messages.create')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">
        {{ $text[0]->{'title_'.app()->getLocale()} }}
    </a>
    <section class="text-gray-700 font3 m-6 w-full">

        {!!  $text[0]->{'content_'.app()->getLocale()} !!}

        <form class="w-full " action="{{route('messages.store')}}" method="POST" enctype="multipart/form-data">
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
            {{--            <button type="submit" >--}}
            <x-green-button class="" type="submit">submit</x-green-button>

        </form>

    </section>
</div>




            <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

        </main>


@endsection

