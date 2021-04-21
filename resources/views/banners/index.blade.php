@extends('layouts.app')
@section('title', 'Banner管理')

@section('content')
<div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        新建Banner
    </button>
    @include('banners._create')
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
