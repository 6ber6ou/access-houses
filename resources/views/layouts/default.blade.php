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

                    <!-- HEADER -->
                    <header class="small-navigation">

                        <!-- NAV -->
                        <nav>

                            <!-- ROW -->
                            <div class="row">

                                <!-- LOGO -->
                                <a href="{{ route( 'welcome' ) }}">
                                    <img src="{{ asset( 'img/logo-black.png' ) }}" class="logo-black" alt="Access Home logo">
                                    <span class="logo-text">
                                        Access <span>Houses</span>
                                    </span>
                                </a>
                                <!-- End ... LOGO -->

                                <!-- MAIN NAV -->
                                <ul class="main-nav js--main-nav">

                                    @if( ! Sentinel::check() )

                                        @if( $page == 'login' )

                                            <li>
                                                <a href="{{ route( 'register' ) }}">{!! trans( 'webpage-text.register-top-link-2' ) !!}</a>
                                            </li>

                                        @elseif( $page == 'register' )

                                            <li>
                                                <a href="{{ route( 'login' ) }}">{!! trans( 'webpage-text.register-top-link-3' ) !!}</a>
                                            </li>

                                        @endif()

                                    @else

                                        <li>
                                            <a href="{{ route( 'adds' ) }}" class="{{ $page == 'adds' ? 'actif' : '' }}">{!! trans( 'webpage-text.top-link-1' ) !!}</a>
                                        </li>

                                        <li>

                                            <!-- DROPDOWN -->
                                            <div class="dropdown">

                                                <a href="" onclick="return false;" class="{{ $page == 'profil' || $page == 'my-adds' ? 'actif' : '' }}">{!! ucfirst( str_replace( '__USERNAME__', Sentinel::getUser()->username, trans( 'webpage-text.top-link-2' ) ) ) !!}</a>

                                                <!-- DROPDOWN CONTENT -->
                                                <div class="dropdown-content">

                                                    <a href="{{ route( 'profil' ) }}">{!! trans( 'webpage-text.top-link-2-1' ) !!}</a>
                                                    <a href="{{ route( 'my-adds' ) }}">{!! trans( 'webpage-text.top-link-2-2' ) !!}</a>

                                                    {!! Form::open( [ 'route' => 'logout', 'id' => 'logout-form' ] ) !!}

                                                        <a href="#" onclick="$( '#logout-form' ).submit()">{!! trans( 'webpage-text.top-link-2-3' ) !!}</a>

                                                    {!! Form::close() !!}

                                                </div>
                                                <!-- End ... DROPDOWN CONTENT -->

                                            </div>
                                            <!-- End ... DROPDOWN -->

                                        </li>

                                    @endif

                                    <li>
                                        <a href="{{ url( '/#contact' ) }}">{!! trans( 'webpage-text.register-top-link-1' ) !!}</a>
                                    </li>

                                    <li>

                                        <?php

                                        if( is_null( app()->getLocale() ) )
                                            {

                                            $locale = 'fr';

                                            }
                                        else
                                            {

                                            $locale = app()->getLocale();

                                            }

                                        ?>

                                        <a href="#" class="js--scroll-to-footer"><img src="{{ asset( 'img/flags/icon-flag-' . $locale . '.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-' . $locale ) !!}"></a>
                                    </li>

                                </ul>
                                <!-- End ... MAIN NAV -->

                                <!-- MOBILE NAV -->
                                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                                <!-- End ... MOBILE NAV -->

                            </div>
                            <!-- End ... ROW -->

                        </nav>
                        <!-- NAV -->

                    </header>
                    <!-- End ... HEADER -->

                    @yield( 'content' )

                </div>
                <!-- End ... PAGE WRAPPER -->

        @include( 'layouts.partials._footer' )

    </body>

</html>
