
{{--USERNAME--}}
<dropdown-trigger class="h-9 flex items-center ">
    @isset($user->email)
        {{-- avatar       --}}
        <img
            src="https://secure.gravatar.com/avatar/{{ md5(\Illuminate\Support\Str::lower($user->email)) }}?size=512"
            class="rounded-full w-8 h-8 mr-3"
        />
    @endisset
        {{--   user     --}}
    <span class=" font4">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>



{{--LOGOUT BUTTON--}}
<dropdown-menu slot="menu" width="200" direction="rtl" class="rounded bg-green-600 px-2 text-white mx-2">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
