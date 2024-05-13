<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ url('assets/css/style.min.css')}}">
    </head>
    <body class="antialiased" id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
        <header id="header-section">
            <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
              <div class="navbar-brand-wrapper d-flex w-100">
                <img src="{{ url('assets/images/QuizMaster.png')}}" alt="" style="scale: 0.5; margin-top: -40px; margin-left: -90px;>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mdi mdi-menu navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                  <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                    <div class="navbar-collapse-logo">
                      <img src="{{ url('assets/images/Group2.svg')}}" alt="">
                    </div>
                    <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                    </button>
                  </li>
                  <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                    <a href="{{ url('/admin/login') }}"  class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Admin Login</a>
                  </li>
                </ul>
              </div>
            </div>
            </nav>
          </header>
          <div class="banner" >
            <div class="container">
              <h1 class="font-weight-semibold">Welcome to the online quiz application</h1>
              <h6 class="font-weight-normal text-muted pb-3">Create and participate in student assessment tests in a highly reliable and efficient manner</h6>
              <div>
                      <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1"><b>Student Login</b></a>
                      <a href="{{ route('register') }}"class="btn btn-opacity-success ml-1"><b>Student Register</b></a>

              </div>
              <img src="{{ url('assets/images/welcome4.svg')}}" alt="" class="img-fluid" style="scale:0.7; margin-top: -35px;">
            </div>
          </div>
    </body>
</html>
