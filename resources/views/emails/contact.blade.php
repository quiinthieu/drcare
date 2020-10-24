<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    <h1>{{$details['title']}}</h1>
    <p>Name :{{$details['name']}}</p>
     <p>Subject: {{$details['subject']}}</p>
      <p>Message:  {{$details['message']}}</p>
</body>
</html>