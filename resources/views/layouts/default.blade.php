<!DOCTYPE html>
<html lang="{!! trans( 'webpage-text.language' ) !!}">

    @include( 'layouts.partials._head' )

    <body>

        <!-- APP -->
        <div id="app">

            <!-- CONTAINER FLUID -->
            <div class="container-fluid">

                <!-- PAGE WRAPPER -->
                <div class="page-wrapper">

                    @include( 'layouts.partials._header' )

                    <div class="row">

                        <div class="col-md-2" id="sidebar">

                            @include( 'layouts.partials._sidebar' )

                        </div>

                        <div class="col-md-10" id="content">

                            @yield( 'content' )

                        </div>

                    </div>

                </div>
                <!-- End ... PAGE WRAPPER -->

        @include( 'layouts.partials._footer' )

    </body>

</html>
