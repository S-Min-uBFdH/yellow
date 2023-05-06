<meta http-equiv="content-language" content="en">
<meta name="google" content="notranslate">

<html>
<head>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/top.css">
  <link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('/favicon.ico') }}">
  @extends('layouts.app')
  @section('content')
</head>
<boby>
@csrf
  <div class="srch-rslt">
<img style="width:10%; height:120px;" src="/yellow/public/images/advertisement.jpeg" alt="Bnr int 01">
    <p>{!! $job !!}</p>
  </div>
  </body>
  <footer class="footer">
    <div>© All rights reserved by yellow.</div>
  </footer>
</html>
@endsection