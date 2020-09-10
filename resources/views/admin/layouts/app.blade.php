<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
        <title>{{env('APP_NAME')}}</title>
        <link rel="stylesheet" href="{{asset('css/admin.css')}}" rossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <script src="{{asset('js/admin.js')}}"></script>
    </head>


    <body>
        <div class="page-wrapper chiller-theme toggled">
            <!-- sidebar-wrapper  -->
            @if(Auth::check())
                @include('admin.layouts.top-bar')
                @include('admin.layouts.left-sidebar')
            @endif
            <!-- page-content" -->
            <main class="@if(Auth::check()) page-content @endif w-100 h-100" id="app" style="background-color: #f2f2f2;">
                @yield('content')
            </main>
        </div>
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
