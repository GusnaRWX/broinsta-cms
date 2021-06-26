<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Broinsta </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icofont/icofont.min.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">


</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex align-items-center px-3">

            <h1 class="logo mr-auto">
                <a href="index.html">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="">
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li>
                        <a href="robot.html" target="_blank" class="get-started-btn-primary scrollto" style="color: white;">Robot</a>

                    </li>
                    <li>
                        <a href="https://cabinet.instaforex.com/client/two_factor_auth/login/" target="_blank" class="get-started-btn scrollto">Login Cabinet</a>

                    </li>
                    <li>
                        <a href="https://www.ifxtrend.com/" target="_blank" class="get-started-btn scrollto">Bonus 30%</a>

                    </li>
                    <li>
                        <a href="https://secure.ifxtrend.com/id/open-account" target="_blank" class="get-started-btn scrollto">Buat akun</a>

                    </li>

                </ul>
            </nav>
            <!-- .nav-menu -->



        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex d-lg-flex align-items-center fixed-top">
        <div class="container-fluid d-flex px-da">
            <div class="col-md-9">
                <div class="news">
                    <span><b>New flash</b> </span>
                    <span class="ml-4">Penting : </span>
                    <ul>

                        <li><a href="#">Jokowi mining</a></li>
                        <li><a href="#">Broinsta bagi bagi coin</a></li>
                        <li><a href="#">Text 3 - Short Description</a></li>
                        <li><a href="#">Text 4 - Short Description</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3">
                <div class="time text-white d-flex justify-content-end float-end" style=" position: relative; top: 13px; right: 0px;">
                    <span id='date-part' class="mr-3"></span>
                    <span id='time-part'></span>
                </div>
            </div>




            <!-- <div class="contact-info mr-auto">
                <i class="icofont-envelope text-white"></i> <a href="#" class="text-white">New Flash</a>
                <span class="ml-4 text-white"><b>Penting :</b></span> <span class=" text-white">Jokowi ikutin Bitcoin</span>
            </div>
             -->

        </div>

    </div>





    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <!-- left-side content -->
                    <div class="col-12 col-lg-3 col-md-3 side-left">
                        <div class="scroll-area">
                            <div class="left-sidebar" style="background: white;">
                                <div class="label">
                                    <h5> <i> Kurs hari ini</i> </h5>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>E-Currency</th>
                                            <th>Deposit</th>
                                            <th>Withdrawl</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kurses as $kurse)
                                        <tr>
                                            <td>{{ $kurse->title }}</td>
                                            <td>{{ $kurse->deposit }}</td>
                                            <td>{{ $kurse->withdraw }}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="buatAkun">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                                <i class="now-ui-icons objects_umbrella-13"></i>Buat Akun</button>
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="buatAkun">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">Check Affiliate</button>
                                        </div>
                                    </div>
                                </div>


                                <hr>

                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Trade Zone</i> </h5>
                                </div>
                                <div class="row">
                                    @if (session('errors'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-warning">
                                                {{session('errors')}}
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                    <div class="col-12 -col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                                                    <li class="nav-item" style="position: relative; left: -1px;">
                                                        <a class="nav-link active hover-style" href="#description" role="tab" aria-controls="description" aria-selected="true" style="box-shadow: none!important; font-size: 28px;"><i class="icofont-dollar"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link hover-style" href="#history" role="tab" aria-controls="history" aria-selected="false" style="box-shadow: none!important; font-size: 28px;"><i class="icofont-database"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link hover-style" href="#deals" role="tab" aria-controls="deals" aria-selected="false" style="box-shadow: none!important; font-size: 28px;"><i class="icofont-people"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link hover-style" href="#validate" role="tab" aria-controls="validate" aria-selected="false" style="box-shadow: none!important; font-size: 28px;"><i class="icofont-shield"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body" style="
                                                margin-top: -15px;
                                                background: #e62129;
                                                padding: 16px !important;
                                                border-top-right-radius:8px ;
                                                border-bottom-right-radius:8px ;
                                                border-bottom-left-radius:8px ;">

                                                <div class="tab-content mt-2" style="color: white;">
                                                    <div class="tab-pane active" id="description" role="tabpanel">
                                                        <div class="deposit-title">
                                                            <h4>Deposit</h4>
                                                        </div>
                                                        <div class="card-form">
                                                            <p class="card-text">Broinsta adalah IB (Introduction Broker) atau perwaklian resmi dari Insta Forex Indonesia yang didirikan dengan tujuan untuk membantu. </p>
                                                            <hr>
                                                            <form id="formDeposit" autocomplete="off" enctype="multipart/form-data" action="{{route('deposit.index')}}" method="POST">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Nomor akun Broninsta</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nomor akun instaforex" name="account_number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Jumlah Deposit (Min. USD1)</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Jumlah yang akan di deposit" name="deposit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress2">Jumlah Transfer (Kurs {{ $kurse->deposit }})</label>
                                                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Jumlah transfer" name="transfer">
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="inputEmail4">Email</label>
                                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="inputEmail4">Nomor Telepon</label>
                                                                        <input type="text" class="form-control" placeholder="Nomor telepon anda" name="phone">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="inputEmail4">Transfer ke</label>
                                                                        <select class="custom-select" name="bank_transfer">
                                                                            <option selected value="Bank"><span>Bank</span> | <span>Nama Bank Akun</span></option>
                                                                            <option selected value="Bank Mandiri"><span>Bank Mandiri</span> | <span>Nama Bank Akun ABC</span></option>
                                                                            <option selected value="Bank BCA"><span>Bank BCA</span> | <span>Nama Bank Akun Bsf</span></option>
                                                                            <option selected value="Bank BNI"><span>Bank BNI</span> | <span>Nama Bank Akun HGJ</span></option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Bank</label>
                                                                        <select class="custom-select"  name="bank">
                                                                            <option selected value="Bank Syariah"><span>Bank Syariah</span></option>
                                                                            <option selected value="Bank Mandiri"><span>Bank Mandiri</span></option>
                                                                            <option selected value="Bank BCA"><span>Bank BCA</span></option>
                                                                            <option selected value="Bank BNI"><span>Bank BNI</span></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-8">
                                                                        <label for="inputCity">Nomor Rekening</label>
                                                                        <input type="text" class="form-control" id="inputCity" name="no_rek">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Pemilik Rekening</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Pemilik Rekening" name="name_rek">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleFormControlFile1">Sisipkan bukti pembayaran</label>
                                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                                                                </div><br>
                                                                <button type="submit" class="btn btn-primary btn-lg">Sign in</button><!--handle menggunakan js-->
                                                            </form>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                                                        <div class="deposit-title">
                                                            <h4>Withdraw</h4>
                                                        </div>
                                                        <div class="card-form">
                                                            <p class="card-text">Broinsta adalah IB (Introduction Broker) atau perwaklian resmi dari Insta Forex Indonesia yang didirikan dengan tujuan untuk membantu. </p>
                                                            <hr>
                                                            <form >
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Nomor akun Broninsta</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nomor Akun anda">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Password</label>
                                                                    <input type="password" class="form-control" id="inputAddress" placeholder="password">
                                                                </div>

                                                                <button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formWithdraw" id="submitWitdraw">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                                                        <div class="deposit-title">
                                                            <h4>Account</h4>
                                                        </div>
                                                        <div class="card-form">
                                                            <p class="card-text">Broinsta adalah IB (Introduction Broker) atau perwaklian resmi dari Insta Forex Indonesia yang didirikan dengan tujuan untuk membantu. </p>
                                                            <hr>
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Nomor akun Broninsta</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nomor Akun anda">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Password</label>
                                                                    <input type="password" class="form-control" id="inputAddress" placeholder=" password ">
                                                                </div>

                                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="validate" role="tabpanel" aria-labelledby="deals-tab">
                                                        <div class="deposit-title">
                                                            <h4>Validasi</h4>
                                                        </div>
                                                        <div class="card-form">
                                                            <p class="card-text">Broinsta adalah IB (Introduction Broker) atau perwaklian resmi dari Insta Forex Indonesia yang didirikan dengan tujuan untuk membantu. </p>
                                                            <hr>
                                                            <form action="{{ route('deposit.validasi') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Nomor akun Broninsta</label>
                                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nomor Akun anda" name="no_akun">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputAddress">Password</label>
                                                                    <input type="password" class="form-control" id="inputAddress" placeholder=" password " name="password">
                                                                </div>

                                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- middle content -->
                    @yield("content")

                    <div class="col-12 col-lg-3 col-md-3 side">
                        <div class="scroll-area">
                            <div class="right-sidebar" style="background: white;">
                                @foreach ($supports as $support)
                                <div class="label">
                                    <h5> <i> Jam Oprasional</i> </h5>
                                </div>

                                <div class="oprasional my-3">
                                    <img src="{{ asset('assets/img/icon/clock.svg') }}" alt="" width="40px" height="40px" style="position: relative;top: -8px;">
                                    <span class="textTime" style="display: inline-block;">
                                        <b>Senin-Jumat</b> <br>{{ $support->oprational_time }}</span>
                                </div>

                                <hr>
                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Layanan Telepon</i> </h5>
                                </div>

                                <div class="oprasional my-3">
                                    <img src="{{ asset('assets/img/icon/telephone.svg') }}" alt="" width="40px" height="40px" style="position: relative;top: -8px;">
                                    <span class="textTime" style="display: inline-block;"><b>Call / SMS</b> <br> {{ $support->phone }}</span>
                                    <span class="textTime" style="display: inline-block;"><b>Call / SMS</b> <br> {{ $support->phone_2 }}</span>
                                </div>

                                <hr>
                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Layanan Chat</i> </h5>
                                </div>

                                <div class="oprasional my-3">
                                    <img src="{{ asset('assets/img/icon/wa.svg') }}" alt="" width="40px" height="40px" style="position: relative;top: -8px;">
                                    <span class="textTime" style="display: inline-block;"><b>Whatsapp</b> <br> {{ $support->chat }}</span>
                                </div>
                                @endforeach
                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Latest News</i> </h5>
                                </div>

                                <div class="oprasional my-3">
                                    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum minima rem quidem, similique vitae dolores.</p>
                                                <em>Pebbles, New York</em>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="testimonial-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quibusdam labore eum soluta quam.</p>
                                                <em>Beverly, Illinois</em>
                                            </div>
                                        </div>
                                        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Sosial Media</i> </h5>
                                </div>

                                <div class="oprasional my-4">
                                    <a href="instagram.com">
                                        <img src="{{ asset('assets/img/icon/instagram.svg') }}" alt="" width="40px" height="40px" style="position: relative;top: -8px; margin-right: 12px;">
                                    </a>
                                    <a href="facebook.com">
                                        <img src="{{ asset('assets/img/icon/facebook.svg') }}" alt="" width="40px" height="40px" style="position: relative;top: -8px;">
                                    </a>

                                </div>


                                <div class="label" style="margin: 16px 0;">
                                    <h5> <i> Testimonial</i> </h5>
                                </div>

                                <div class="oprasional my-3">
                                    <div class="bg-testimonials" id="testimonials">
                                        <div class="container-fluid">

                                            <div class="row">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ul class="carousel-indicators">
                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    </ul>
x
                                                    <!-- Wrapper for slides -->

                                                    <div class="carousel-inner" role="listbox">
                                                        @foreach ($testimonials as $testimonial)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <p>{{ $testimonial->description }}</p>
                                                                <h5>{{ $testimonial->name }}</h5>
                                                        </div>
                                                        @endforeach
                                                    </div>



                                                    <!-- Left and right controls -->
                                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div id="testimonial-carousel" class="carousel slide" data-ride="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum minima rem quidem, similique vitae dolores.</p>
                                                <em>Pebbles, New York</em>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="testimonial-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quibusdam labore eum soluta quam.</p>
                                                <em>Beverly, Illinois</em>
                                            </div>
                                        </div>
                                        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div> -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <a href="https://api.whatsapp.com/send?phone={{ $support->chat }}." class="float" target="_blank">
            <i class="icofont-brand-whatsapp my-float"></i>
        </a>
    </main>
    <!-- End #main -->



    <div id="tallModal" class="modal modal-wide fade">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <span class="img-modal">
                        <img src="{{ asset('assets/img/about.jpg') }}" alt="">
                    </span>
                </div>
            </div>

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->



      {{-- modal form Withdraw--}}
      <div class="modal fade modal-form" id="formWithdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password1">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal Form Withdraw --}}


    <!-- ======= Footer ======= -->
    <!-- <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>broinsta</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer> -->
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>



        $(document).ready(function() {
  $('#tallModal').modal('show');

});


$('#submitWitdraw').on('click', function(e) {
            e.preventDefault()
        })

$('#bologna-list a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })


        $(document).ready(function() {
            var interval = setInterval(function() {
                var momentNow = moment();
                $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' ' +
                    momentNow.format('dddd')
                    .substring(0, 3).toUpperCase());
                $('#time-part').html(momentNow.format('A hh:mm:ss'));
            }, 100);

            $('#stop-interval').on('click', function() {
                clearInterval(interval);
            });
        });
    </script>
    <script>
     //   formDeposit.onsubmit = async (e) => {
     //       e.preventDefault();
     //       let response = await fetch('/deposit', {
     //           method: 'POST',
     //           body: new FormData(formDeposit)
     //       });
     //       let result = await response.json();
     //       if(result.code == 200){
     //           toastr["success"](result.message, "Deposit");
     //       }else{
     //           toastr["danger"](result.message, "Deposit");
     //       }
     //   };

    </script>



</body>

</html>
