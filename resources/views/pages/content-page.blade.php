@extends('layout', [
'theme' => $theme,
'footer' => $footer
])



@section('title', $title)

@section('content')

<h2 style='text-align: center'>{{$title}}</h2>

@endsection