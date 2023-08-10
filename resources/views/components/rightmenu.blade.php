
{{--      third column   NAVIGATION           --}}
<div class="w-auto    ">
    <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0">
        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[13px] px-3">Navigation</a>
        <ul class="font5 text-[#6c9abf] pl-4 flex flex-col w-[150px] ">
            @foreach($sidemenu as $side)
                <li class="py-1  inline-flex items-center "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short mr-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                    </svg><a href="{{url($side->link)}}">{{ ucfirst( $side->{'title_'.app()->getLocale()} ) }}</a></li>
            @endforeach
        </ul>
    </section>

    {{--                        MOODLE LOGIN--}}
    <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[14px] pl-0 mt-4  min-h-[250px] max-h-fit">

        <a class="flex inline-flex items-center font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[0px] pl-1 " href="https://moodle.idistance.school">
            <div class="">Moodle Login</div>
            <img src="{{env('APP_URL')}}\img\Moodle-Logo.png" class="w-20 h-auto mb-1 ">
        </a>


        <form class="mx-4  mt-0  flex flex-col justify-end" action="{{url('/mlogin')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

                @if(session()->has('failed'))
                    <div class="alert alert-success w-[200px] h-[60px] p-2.5 text-center text-small pt-1 ">
                        {{__('auth.failed')}}
                    </div>
                @endif

            <x-input name="login"  />
            <x-input name="pwd" />
            {{--                                <x-login></x-login>--}}



            <x-green-button type="submit" value="sign in" class=""></x-green-button>
        </form>
    </section>

    {{--   CALENDAR --}}
    <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0 mt-4 h-[300px]">
        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3 " href="{{ url('calendar') }}">Calendar</a>
    </section>

    {{--                        DIRECTORS DETAILS--}}
    <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0 mt-4 h-[250px]">
        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3 ">Direction</a>
        @foreach($director as $dir)
            <div class="pl-4">{{$dir['name']}} {{ $dir['surname']}}</div>
            <img src="{{env('APP_URL')}}/img/teachers/{{$dir['img']}}" class="w-[160px] h-auto pl-4 pt-4">
        @endforeach
    </section>
</div>






