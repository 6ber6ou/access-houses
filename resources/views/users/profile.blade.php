@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-profil">

        <!-- ROW -->
        <div class="row">

            <h2>
                {!! trans( 'webpage-text.user-profil-h2' ) !!}
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 6 -->
            <div class="col-md-6 col-md-offset-3 text-center">

                <section class="section-avatar">

                    {!! Form::open( [ 'route' => 'upload-avatar', 'class' => 'avatar-form', 'id' => 'avatar-form', 'files' => TRUE ] ) !!}

                        <div class="image-upload">

                            <label for="avatar">
                                <img src="{{ asset( Sentinel::getUser()->avatar ) }}?{{ rand() }}" id="image-avatar" alt="{!! trans( 'webpage-text.user-avatar-alt' ) !!}">
                            </label>

                            <input id="avatar" name="avatar" type="file">

                        </div>

                    {!! Form::close() !!}

                    <div class="progress">

                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="sr-only">0%</span>
                        </div>

                    </div>

                    <p>
                        {!! trans( 'webpage-text.profile-upload-text' ) !!}
                    </p>

                </section>

            </div>
            <!-- End ... COL MD 6 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 6 -->
            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-8 col-md-offset-4">

                        <h3 class="text-center">
                            Infos
                        </h3>

                    </div>

                </div>

                {!! Form::model( Sentinel::getUser(), [ 'route' => 'post-profile', 'class' => 'profile-form', 'style' => 'margin-top : 0', 'id' => 'profile-form' ] ) !!}

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row" style="margin-bottom : 0;">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'username' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4 relative">

                                {!! Form::label( 'username', trans( 'webpage-text.profile-placeholder-1' ) ) !!}
                                <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::text( 'username', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'username' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'username' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4 relative">

                               {!! Form::label( 'email', trans( 'webpage-text.profile-placeholder-2' ) ) !!}
                                <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::email( 'email', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'email' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'email' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4">

                                {!! Form::submit( trans( 'webpage-text.profile-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                {!! Form::close() !!}

            </div>
            <!-- End ... COL MD 6 -->

            <!-- COL MD 6 -->
            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-8">

                        <h3 class="text-center">
                            Mot de passe
                        </h3>

                    </div>

                </div>

                {!! Form::open( [ 'route' => 'new-password', 'class' => 'new-password-form', 'style' => 'margin-top : 0', 'id' => 'new-password-form' ] ) !!}

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row" style="margin-bottom : 0">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'old_password' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 relative">

                               {!! Form::label( 'old_password', trans( 'webpage-text.new-password-placeholder-1' ) ) !!}
                                <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::password( 'old_password', [ 'class' => 'form-control', 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'old_password' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'old_password' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row" style="margin-bottom : 0">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'password' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 relative">

                              {!! Form::label( 'password', trans( 'webpage-text.new-password-placeholder-2' ) ) !!}
                                <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::password( 'password', [ 'class' => 'form-control', 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'password' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'password' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'password_confirmation' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 relative">

                                {!! Form::label( 'password_confirmation', trans( 'webpage-text.new-password-placeholder-3' ) ) !!}
                                <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::password( 'password_confirmation', [ 'class' => 'form-control', 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'password_confirmation' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'password_confirmation' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group">

                            <!-- COL MD 8 -->
                            <div class="col-md-8">

                                {!! Form::submit( trans( 'webpage-text.new-password-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                {!! Form::close() !!}

            </div>
            <!-- End ... COL MD 6 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 8 -->
            <div class="col-md-8 col-md-offset-2 text-center">

                <h3 class="text-center" style="margin-top : 20px; margin-bottom : 4px;">
                    Description
                </h3>

            </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

        {!! Form::model( Sentinel::getUser(), [ 'route' => 'user-description', 'class' => 'new-password-form', 'top' => 'margin-top : 0;', 'id' => 'new-password-form' ] ) !!}

            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

            <!-- ROW -->
            <div class="row">

                <!-- FORM GROUP -->
                <div class="form-group{{ $errors->has( 'description' ) ? ' has-error' : '' }}">

                    <!-- COL MD 8 -->
                    <div class="col-md-8 col-md-offset-2 relative">

                        {!! Form::label( 'description', trans( 'webpage-text.user-description-placeholder' ) ) !!}
                         <i class="ion-star mandatory" style="left : -3px;"></i>{!! Form::textarea( 'description', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

                        <!-- ERROR -->
                        @if( $errors->has( 'description' ) )

                            <span class="help-block">
                                <strong>{{ $errors->first( 'description' ) }}</strong>
                            </span>

                        @endif
                        <!-- End ... ERROR -->

                    </div>
                    <!-- COL MD 8 -->

                </div>
                <!-- End ... FORM GROUP -->

            </div>
            <!-- End ... ROW -->

            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

            <!-- ROW -->
            <div class="row">

                <!-- FORM GROUP -->
                <div class="form-group">

                    <!-- COL MD 8 -->
                    <div class="col-md-8 col-md-offset-2">

                        {!! Form::submit( trans( 'webpage-text.user-description-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                    </div>
                    <!-- COL MD 8 -->

                </div>
                <!-- End ... FORM GROUP -->

            </div>
            <!-- End ... ROW -->

            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

            {!! Form::close() !!}

@stop
