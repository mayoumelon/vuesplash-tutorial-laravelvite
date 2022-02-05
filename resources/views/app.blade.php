<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>
</head>
<body>
  <div id="app">
    <example-component msg="app.blade.phpより">テストだよ</example-component>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
