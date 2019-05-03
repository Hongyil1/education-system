<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- development version, includes helpful console warnings -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
</head>
<body>
    <div id="app">
      <h1 class="new-class">This is vue!</h1>
    </div>

    {{-- <div id="root">
        <my-button text="My New Text Button" type="submit"></my-button>


  <my-button text="My New Text Button" type="submit"></my-button>
    </div>
        <div id="learn">
<learn></learn>
        </div> --}}
    <div id="test">
      <my-button text="This is my button"></my-button>
      <br>
      <learn></learn>
      <br>
    </div>

    <div id="test2">
      <h1>This is a new Test for two ids!</h1>
      <my-input></my-input>
    </div>
</body>
</html>
