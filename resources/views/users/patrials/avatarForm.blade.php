<!-- .modal-body -->
<div class="modal-body">
    <div class="form-group">
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::label('avatar', 'Foto de Perfil') }}
        <div class="custom-file">
            {{ Form::file('avatar', ['class' => 'custom-file-input']) }}
            {{ Form::label('avatar', 'Elija una', ['class' => 'custom-file-label']) }}
        </div>
    </div>
</div>
<!-- /.modal-body -->
<!-- .modal-footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('Close') }}</button>
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-avatar']) }}
</div>
<!-- /.modal-footer -->
