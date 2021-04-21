<div class="list-group-item">
    <img class="mr-3" src="{{ $banner->url }}" alt="{{ $banner->id }}" width=320>
	<div class="float-right">
		<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit">
			编辑
		</button>
		@include('banners._edit')
		<form action="{{ route('banners.destroy', $banner->id) }}" method="post" class="float-right">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button type="submit" class="btn btn-sm btn-danger">删除</button>
		</form>
	</div>
</div>
