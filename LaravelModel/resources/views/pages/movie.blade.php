@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <ul>
        <li><h1>ID: {{ $movie -> id }}</h1></li>
        <li><h1>Title: {{ $movie -> title }}</h1></li>
        <li><h1>Original Title: {{ $movie -> original_title }}</h1></li>
        <li><h1>Nationality: {{ $movie -> nationality }}</h1></li>
        <li><h1>Date: {{ $movie -> date }}</h1></li>
        <li><h1>Vote: {{ $movie -> vote }}</h1></li>
      </ul>
    </div>
    <a class="home" href="http://localhost:8000/">List Movies</a>
  </main>
@endsection
