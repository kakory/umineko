<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('banners.update', $banner->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">修改Banner</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="pic" class="form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">修改</button>
                </div>
            </form>
        </div>
    </div>
</div>