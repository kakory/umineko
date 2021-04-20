@extends('layouts.app')
@section('title', 'Banner管理')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('banners.update', $banner->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
			{{ method_field('PATCH') }}

            <div class="form-group">
                <input type="file" name="pic" class="form-control-file">
            </div>
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">修改</button>
            </div>
        </form>
    </div>
</div>
@stop
