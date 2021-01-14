@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="display: block;">
        <div class="col-md-6" style="flex: 0 0 50%;
    max-width: 100%;">
            @include('admin.category.form')
        </div>
        <div class="col-md-6" style="flex: 0 0 50%;
    max-width: 100%;">
            @include('admin.category.table', ['categories' => $categories])
        </div>
    </div>
</div>


@endsection