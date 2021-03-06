@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-create-ads">

        <!-- ROW -->
        <div class="row">

            <h2>
                {!! trans( 'webpage-text.create-ads-h2' ) !!}
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <!-- RELATIVE -->
                <div class="relative" id="container_upload_primary_photo">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-primary-photo', 'id' => 'ad-primary-photo-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-primary-photo" class="upload-primary-photo">

                                    <img src="{{ session()->has( 'primary_photo' ) ? asset( session()->get( 'primary_photo' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-primary-photo" name="ad-primary-photo" type="file">

                                <div class="progress progress-primary-photo col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'primary_photo' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-primary-photo' ], 'class' => 'delete-ad-primary-photo-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_primary_photo', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-1', 'id' => 'ad-photo-1-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-1" class="upload-photo-1">

                                    <img src="{{ session()->has( 'photo_1' ) ? asset( session()->get( 'photo_1' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-1">

                                </label>

                                <input id="ad-photo-1" name="ad-photo-1" type="file">

                                <div class="progress progress-photo-1 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_1' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-1' ], 'class' => 'delete-ad-photo-1-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_1', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-2', 'id' => 'ad-photo-2-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-2" class="upload-photo-2">

                                    <img src="{{ session()->has( 'photo_2' ) ? asset( session()->get( 'photo_2' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-2">

                                </label>

                                <input id="ad-photo-2" name="ad-photo-2" type="file">

                                <div class="progress progress-photo-2 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_2' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-2' ], 'class' => 'delete-ad-photo-2-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_2', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-3', 'id' => 'ad-photo-3-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-3" class="upload-photo-3">

                                    <img src="{{ session()->has( 'photo_3' ) ? asset( session()->get( 'photo_3' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-3">

                                </label>

                                <input id="ad-photo-3" name="ad-photo-3" type="file">

                                <div class="progress progress-photo-3 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_3' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-3' ], 'class' => 'delete-ad-photo-3-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_3', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-4', 'id' => 'ad-photo-4-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-4" class="upload-photo-4">

                                    <img src="{{ session()->has( 'photo_4' ) ? asset( session()->get( 'photo_4' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-4">

                                </label>

                                <input id="ad-photo-4" name="ad-photo-4" type="file">

                                <div class="progress progress-photo-4 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_4' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-4' ], 'class' => 'delete-ad-photo-4-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_4', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-5', 'id' => 'ad-photo-5-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-5" class="upload-photo-5">

                                    <img src="{{ session()->has( 'photo_5' ) ? asset( session()->get( 'photo_5' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-5">

                                </label>

                                <input id="ad-photo-5" name="ad-photo-5" type="file">

                                <div class="progress progress-photo-5 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_5' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-5' ], 'class' => 'delete-ad-photo-5-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_5', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-6', 'id' => 'ad-photo-6-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/create', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-6" class="upload-photo-6">

                                    <img src="{{ session()->has( 'photo_6' ) ? asset( session()->get( 'photo_6' ) ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="photo-6">

                                </label>

                                <input id="ad-photo-6" name="ad-photo-6" type="file">

                                <div class="progress progress-photo-6 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( session()->has( 'photo_6' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-6' ], 'class' => 'delete-ad-photo-6-form' ] ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_6', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 12 -->
            <div class="col-md-12 text-center" style="font-size : 70%;">

                <p style="margin-bottom : 0;">
                    {!! trans( 'webpage-text.upload-explication' ) !!}
                </p>

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ...ROW -->

        <!-- ============================================================ -->

        <!-- FORM CREATE AD -->
        {!! Form::open( [ 'route' => 'ads.store', 'id' => 'create-ad' ] ) !!}

            <!-- ============================================================ -->

            @include( 'layouts.partials._create-update-ad' )

            <!-- ============================================================ -->

            <!-- ROW -->
            <div class="row" style="margin-top : 30px;">

                <!-- COL MD 6 -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {!! Form::submit( trans( 'webpage-text.create-ad-create' ), [ 'class' => 'btn btn-full', 'id' => 'create-ad-phase-1-button' ] ) !!}
                </div>
                <!-- End ... COL MD 6 -->

            </div>
            <!-- End ...ROW -->

            <!-- ============================================================ -->

        {!! Form::close() !!}
        <!-- End ... FORM CREATE AD -->

@stop
