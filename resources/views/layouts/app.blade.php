<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/path/to/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/isia-form-repeater.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faculty.store') }}">{{ __('faculty') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('community.store') }}">{{ __('community') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->get('warning'))
                <div class="alert alert-warning">
                    {{ session()->get('warning') }}
                </div>
                @endif
            </div>
            @yield('content')
        </main>
    </div>
</body>

</html>
<!-- <script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<div id="row' + i + '" id="dynamic_field"> <div class= "form-row"><div class = "form-group col-md-6"><label for = "majorField" > {{__("Major Field")}}</label><input id = "majorField"class = "form-control"type = "text" name="majorField[]"></div> <div class = "form-group col-md-6" ><label for = "subspecialtyField" > {{__("Subspecialty Field")}}</label> <input id = "subspecialtyField"class = "form-control"type = "text"  name="subspecialtyField[]" value = "{{ old("subspecialty_field") }}" ></div> </div> <div class = "form-row" ><div class = "form-group col-md-4" ><label for = "degreeName" > {{ __("Degree Name")}}</label> <input id = "degreeName"type = "text"class = "form-control" name="degreeName[]" ></div> <div class = "form-group col-md-4" ><label for = "graduateInstitution" > {{__("Graduate Institution")}} </label> <input id = "graduateInstitution"class = "form-control"type = "text" name="graduateInstitution[]"  placeholder = "King Saud bin Abdulaziz for Heath Sciences"></div> <div class = "form-group col-md-4" ><label for = "year" > {{__("Graduated Year" ) }} </label><input id = "year"class = "form-control"type = "number"name = "year[]"placeholder = "2012"></div> </div><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Remove</button > ');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "faculty.store",
                method: "POST",
                data: $('#dynamic_field').serialize(),
                success: function(data) {
                    alert(data);
                    $('#dynamic_field')[0].reset();
                }
            });
        });
    });
</script> -->