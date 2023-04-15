<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  <title>ArentTest Project</title>
</head>

<body class="bg-gray-bit">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="main-nav">
      <div class="container">
        <a href="{{ route('toppage') }}" class="navbar-brand">
          <h4 class="d-inline align-middle text-primary">Healthy</h4>
        </a>
        <button class="navbar-toggler text-primary" style="border: none; color: orange;" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              @if(Route::is('databaseDescription'))
              <a href="{{ route('databaseDescription') }}" class="nav-link link-active">Summarize Database/API</a>
              @else
              <a href="{{ route('databaseDescription') }}" class="nav-link text-white">Summarize Database/API</a>
              @endif
            </li>

            <li class="nav-item">
              @if(Route::is('apiDescription'))
              <a href="{{ route('apiDescription') }}" class="nav-link link-active" target="_blank">Api Docs</a>
              @else
              <a href="{{ route('apiDescription') }}" class="nav-link text-white" target="_blank">Apis Docs</a>
              @endif
            </li>

            <li class="nav-item">
              @if(Route::is('recommended'))
              <a href="{{ route('recommended') }}" class="nav-link link-active">Recommended</a>
              @else
              <a href="{{ route('recommended') }}" class="nav-link text-white">Recommended</a>
              @endif
            </li>
            
            @guest
              <li class="nav-item">
                <a href="{{ route('myrecord') }}" class="nav-link text-white" data-toggle="modal" data-target="#loginModal">Login</a>
              </li>
            @else
              <li class="nav-item">
                @if(Route::is('toppage'))
                <a href="{{ route('toppage') }}" class="nav-link link-active">Top Page</a>
                @else
                <a href="{{ route('toppage') }}" class="nav-link text-white">Top Page</a>
                @endif
              </li>

              <li class="nav-item">
                @if(Route::is('myrecord'))
                <a href="{{ route('myrecord') }}" class="nav-link link-active">My Record</a>
                @else
                <a href="{{ route('myrecord') }}" class="nav-link text-white">My Record</a>
                @endif
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link text-white">Logout</a>
              </li>
            @endguest 
          </ul>
        </div>
      </div>
    </nav>