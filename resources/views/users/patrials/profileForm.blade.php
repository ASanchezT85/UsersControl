<!-- .modal-body -->
<div class="modal-body">
    <div id="smartwizard">
        <ul>
            <li>
                <a href="#step-1">{{ __('Account data') }} <br />
                    <small>{{ __('Do you want to change some of this?') }}</small>
                </a>
            </li>
            <li>
                <a href="#step-2">{{ __('Profile photo') }} <br />
                   <small>{{ __('Choose a profile picture') }}</small>
                </a>
            </li>
            <li>
                <a href="#step-3">{{ __('Tell us about you!') }} <br />
                    <small>{{ __('Tell us more about you') }}</small>
                </a>
            </li>
            <li>
                <a href="#step-4">{{ __('How do we contact you?') }} <br />
                    <small>{{ __('Contact information') }}</small>
                </a>
            </li>
            <li>
                <a href="#step-4">{{ __('Finished') }} <br />
                    <small>{{ __('Thanks for your time!') }}</small>
                </a>
            </li>
        </ul>
        <div>
            <div id="step-1">
                <div class="row py-4">
                    {{ Form::hidden('user_id', Auth::user()->id) }}
                    <div class="col-md-4 offset-2">
                        <div class="form-group">
                            <div class="form-label-group">
                                {{ Form::text('name', auth()->user()->name, ['class' => 'form-control']) }}
                                {{ Form::label('name', 'Nombre') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-label-group">
                                {{ Form::text('email', auth()->user()->email, ['class' => 'form-control']) }}
                                {{ Form::label('email', 'Email') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step-2">
                <div class="row py-4">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            {{ Form::label('avatar', 'Foto de Perfil') }}
                            <div class="custom-file">
                                {{ Form::file('avatar', ['class' => 'custom-file-input']) }}
                                {{ Form::label('avatar', 'Elija una', ['class' => 'custom-file-label']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step-3">
                mas sobre ti
            </div>
            <div id="step-4">
               contacto 
            </div>
            <div id="step-5">
                terminamos
            </div>
        </div>
    </div>
</div>
<!-- /.modal-body -->
<!-- .modal-footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('Close') }}</button>
</div>
<!-- /.modal-footer -->