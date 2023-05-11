<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkom | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .bg {
       background-color: #8d191c;
     }

     .text-ati {
       color: #8d191c;
     }
   </style>
</head>
<body class="overflow-hidden"  style="background-color: #f9f9f9">
 @include('partials.admin')

 <div class="container-fluid position-fixed ">
  <div class="row " >
    <div class="col-md-3 col-lg-2  d-none d-md-block text-light p-4 shadow" >
      @include('partials.sidebar')
    </div>
    <div class="col-lg-10 col-sm-12 col-md-9 overflow-auto" style="height: 100vh; padding-bottom:5rem">
      <div class="container-fluid mt-4 mb-4">
        @yield('container')
      </div>
    </div>
  </div>
 </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>