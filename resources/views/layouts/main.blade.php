<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkom | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      body{
        overflow-x: hidden;
      }
       .bg {
        background-color: #8d191c;
      }

      .text-ati {
        color: #8d191c;
      }
      .garis{
        padding: 2rem;
        background: #8d191c;
      }
    </style>
</head>
<body style="background-color: #f9f9f9">
  
 @include('partials.navbar')
      <div class="container-fluid" id="notifikasi">
        @yield('notifikasi')
      </div>
      <section id="pengaduan"  style="">
        <div class="garis" data-aos="fade-up"></div>
        <div class="container-fluid mb-3 pt-4" >
          @yield('formulir')
        </div>
      </section>
      <img src="{{ asset('img/Group 32.svg') }}" alt="" data-aos="fade-up" class="img-fluid" />
      <section id="pencarian" style="padding-top: 5rem" >
        <div class="container-fluid" >
          @yield('pencarian')
        </div>
      </section>
      <section id="about">
        <img src="{{ asset('img/Group 32.svg') }}" data-aos="fade-up" class="position-absolute img-fluid" alt="" />
      <div class="container-fluid" >
        @yield('about')
      </div>
      </section>
      {{-- footer --}}
    <div class="row mx-0">
      <div class="col-12 mt-2 text-center bg text-light py-2" data-aos="fade-up"
      data-aos-anchor-placement="top-bottom">Created by Fachrul Rozi. © 2023</div>
    </div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>