@extends('index')

@section('content')
<div class="col-12 col-lg-4 col-md-4 offset-md-1 align-self-center center-bar text-center justify-content-center d-flex">
    <div class="card">
        <!-- ======= Breadcrumbs ======= -->
        <div id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Check Status Afiliasi</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Check Status Afiliasi</li>
                    </ol>
                </div>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <div class="card-body">

            <!-- Tab panes -->
            <div class="tab-content text-center">
                <div class="tab-pane active" id="home" role="tabpanel">

                    <div class="imgIbinstaforex">
                        <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; height:420px; border-radius:8px;">
                    </div>

                    <div class="text-left">
                        <p>Berikut merupakan menu untuk mengecek status afiliasi serta status account Anda.</p>
                    </div>
                    @if (session('errors'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning">
                                {{session('errors')}}
                            </div>
                         </div>
                     </div>
                    @endif

                    <form action="{{route('affiliate.check')}}" class="text-left" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method("POST")
                        <div class="form-group">
                            <label for="inputAddress">Nomor akun Broninsta</label>
                            <input type="text" class="form-control col-6" id="inputAddress" placeholder="1234 Main St" name="login">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control col-6" id="inputAddress" placeholder="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Check akun</button>

                    </form>

                    <hr>

                    <div class="titleIbinstaforex">
                        <h3>Instrumen Trading</h3>
                    </div>
                    <p>Instrumen terbaik untuk kesuksesan trading online di Forex</p>
                    </p>
                    <div class="row">
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://cabinet.ifxtrend.com/client/id/login" target="_blank" class="btn btn-primary btn-block  my-2" style="border-radius:8px; padding:12px 12px  ;">Bonus 30%</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Download MT4</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com/forex_calculator.php" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Calculator</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Free FA</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Free FA</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Free FA</a>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="#">
                                    <h5>Forex</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="#">
                                    <h5>Option</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="#">
                                    <h5>CryptoCurrency</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <h5>Commodity</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <h5>Index</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <h5>Oil</h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="titleIbinstaforex">
                        <h3>Instrumen Trading</h3>
                    </div>
                    <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities,
                        to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="#">
                                    <h5>Forex</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="">
                                    <h5>Option</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing
                        the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                </div>

            </div>


        </div>
    </div>

</div>


@endsection
