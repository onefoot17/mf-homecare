<!DOCTYPE html>

<html lang="en" class="@yield('html_class') @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif">
    <head>
        <meta charset="utf-8" />

        <title>@yield( 'title' ) | {{ env( 'APP_NAME' ) }}</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <meta name="keywords" content="{{ env( 'APP_NAME' ) }}" />

        <meta name="description" content="{{ env( 'APP_NAME' ) }}">

        <meta name="author" content="{{ env( 'APP_NAME' ) }}">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.ico' ) }}">

		<link rel="apple-touch-icon" href="{{ asset( 'assets/images/favicon.ico' ) }}">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">
        {{-- Poppins --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800%7CPlayfair+Display&display=swap" rel="stylesheet" type="text/css">
        {{-- Jomolhari --}}
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
		{{-- Roboto --}}
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        {{-- Freight Text Pro --}}
        {{-- <link rel="stylesheet" href="https://use.typekit.net/qcs6kcb.css"> --}}
        {{-- Alegreya --}}
        <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">

        {{-- App CSS --}}
		<link href="{{ asset( 'assets/css/bootstrap.min.css' ) }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

        @yield( 'css' )

        {{-- Default CSS --}}
        @yield( 'css-default' )
    </head>
