@extends('layouts.app')
@section('title', 'Banner管理')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <a href="{{ route('banners.create') }}">新建banner</a>
    </div>

    <div class="list-group list-group-flush">
        @foreach ($banners as $banner)
        @include('banners._banner')
        @endforeach
    </div>
    <div class="mt-3">
        {!! $banners->render() !!}
    </div>
</div>
@stop
