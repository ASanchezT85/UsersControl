@isset(Auth::user()->profile)
<!--Edit Avatar -->
<div class="modal fade" id="editAvatarModal" tabindex="-1" role="dialog" aria-labelledby="editAvatarModalLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-overflow" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="editAvatarModalLabel" class="modal-title"> 
                    {{ __('Edit Avatar') }} 
                </h6>
            </div>
            <!-- /.modal-header -->
            {!! Form::model(Auth::user()->profile, 
                ['route' => ['profile.update', Auth::user()->profile->id], 'method' => 'PUT']) 
            !!}
                @include('users.patrials.avatarForm')
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Edit Profile -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-xl modal-dialog-overflow" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="editProfileModalLabel" class="modal-title"> 
                    {{ __('Edit Avatar') }} 
                </h6>
            </div>
            <!-- /.modal-header -->
            {!! Form::model(Auth::user()->profile, 
                ['route' => ['profile.update', Auth::user()->profile->id], 'method' => 'PUT']) 
            !!}
                @include('users.patrials.profileForm')
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@else

<!--Add Avatar -->
<div class="modal fade" id="addAvatarModal" tabindex="-1" role="dialog" aria-labelledby="addAvatarModalLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-overflow" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="addAvatarModalLabel" class="modal-title"> 
                    {{ __('Edit Avatar') }} 
                </h6>
            </div>
            <!-- /.modal-header -->
            {!! Form::open(['route' => 'profile.store', 'files' => true]) !!}
                @include('users.patrials.avatarForm')
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Add Prifile -->
<div class="modal fade" id="createProfileModal" tabindex="-1" role="dialog" aria-labelledby="addProfileModalLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-overflow" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="addProfileModalLabel" class="modal-title"> 
                    {{ __('Edit Avatar') }} 
                </h6>
            </div>
            <!-- /.modal-header -->
            {!! Form::open(['route' => 'profile.store', 'files' => true]) !!}
                @include('users.patrials.profileForm')
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endisset