{{-- <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }} "> --}}
<head>


    <title>{{ Nova::name() }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">
    {{--<link rel="stylesheet" href="{{ mix('public/app.css') }}">--}}




        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">

        <!-- Tool Styles -->
        @foreach(Nova::availableStyles(request()) as $name => $path)
            <link rel="stylesheet" href="/nova-api/styles/{{ $name }}">
    @endforeach

    {{--    FONTS--}}
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=OpenSans:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=HelveticaNeue:wght@300;400;600;700&display=swap" rel="stylesheet">




    <style>
        body {}
        .font1 {font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 13px; font-weight: 300;  }
        .font2{font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 20px;}
        .font3{font-family: 'Open Sans', sans-serif; font-size: 15px; font-weight: 400; line-height: 29px;}
        .font4{font-family:system-ui,-apple-system; font-size: 14px; font-weight: 300; line-height: 20px;}
        .font5{font-family:system-ui,-apple-system; font-size: 15px; font-weight: 400; line-height: 20px;}
        h3{font-weight: bold; font-size: 16px;}

        a, a:hover{text-underline: none!important; text-decoration: none}
        li{list-style-type: none}
        .sopra0{position: relative; left: 30px; bottom: 120px;}
        .parent{position: static; display: inline-block}
        .frame{ border: 10px solid rgb(242, 240, 240);
            box-shadow: 0 0 3px grey}

    </style>

</head>

<body class="bg-gray-200  w-full">
