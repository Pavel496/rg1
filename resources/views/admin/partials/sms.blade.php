<div class="modal fade" id="myModalsms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form method="POST" action="{{ route('admin.posts.store', '#create') }}">
    {{ csrf_field() }}
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Введите заголовок новой публикации</h4>
          </div>
          <div class="modal-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
              {{-- <label>Title</label> --}}
              <input id="post-title" name="title"
              class="form-control"
              value="{{ old('title') }}"
              placeholder= "Введите полученный смс код" autofocus required>
              {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button class="btn btn-primary">Создать публикацию</button>
          </div>
        </div>
      </div>
    </form>
</div>

@push('scripts')
  <script>
    if (window.location.hash === '#sms')
    {
      $('#myModalsms').modal('show');
    }

    $('#myModalsms').on('hide.bs.modal', function(){
      window.location.hash = '#';
    })

    $('#myModalsms').on('shown.bs.modal', function(){
      $('#post-title').focus();
      window.location.hash = '#sms';
    })
  </script>
@endpush
