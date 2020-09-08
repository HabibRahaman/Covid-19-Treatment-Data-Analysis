<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Covid-19 Treatment & Data Analysis</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="content-language" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
  <meta name="author" content="Covid-19 Treatment & Data Analysis">
  <meta name="keywords" content="">

  <!-- Social meta tags -->
  @yield('meta_tags')

  @include('web.common.includes.styles')
  @yield('page_css')
  
</head>
<body>


<!-- Content Area -->
@yield('content')
<!-- Content Area -->



  @include('web.common.includes.scripts')
  @yield('page_js')
  
</body>
</html>