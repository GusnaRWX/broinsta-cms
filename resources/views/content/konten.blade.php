@extends('index')

@section('content')
<div class="col-12 col-lg-6 col-md-6 center-bar">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs justify-content-start" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                        <i class="now-ui-icons objects_umbrella-13"></i> IB Insta Forex
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                        <i class="now-ui-icons shopping_cart-simple"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                        <i class="now-ui-icons shopping_shop"></i> Features
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#news" role="tab">
                        <i class="now-ui-icons icofont-newspaper"></i> News
                    </a>
                </li>

            </ul>
        </div>
        <hr>
        <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content text-center">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="titleIbinstaforex">
                        <h3>BroInsta</h3>
                    </div>
                    <div class="imgIbinstaforex">
                        <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                    </div>

                    <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing
                        the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>

                    <hr>
                    {{-- konten broinsta --}}
                    <div class="row">
                        <div class="col-md-4">

                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('broinsta.instaforex')}}">
                                    <h5>Insta forex</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('broinsta.pembukaan-akun')}}">
                                    <h5>Pembukaan Akun</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('broinsta.validasi-akun')}}">
                                    <h5>Validasi Akun</h5>
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
                                <a href="{{route('broinsta.verifikasi-akun')}}">
                                    <h5>Verifikasi akun</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('broinsta.withdrawal')}}">
                                    <h5>Withdrawal</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="imgIbinstaforex">
                                <img src="assets/img/slide/slide-1.jpg" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('broinsta.disclaimer')}}">
                                    <h5>Disclaimer</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- end konten broinsta --}}
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
                            <a type="button" href="https://www.ifxtrend.com/trading_platform" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Download MT4</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com/forex_calculator.php" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Calculator</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Free FA</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://play.google.com/store/apps/details?id=com.proinsta   " target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Aplikasi Gadget</a>
                        </div>
                        <div class="col-4 col-md-4 col-sm-4">
                            <a type="button" href="https://www.ifxtrend.com" target="_blank" class="btn btn-primary btn-block  my-1" style="border-radius:8px; padding:12px 12px  ;">Deposit Reward</a>
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
                </div>

                {{-- features content --}}
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
                {{--news content  --}}
                <div class="tab-pane" id="news" role="tabpanel">
                    <div class="row">
                        @foreach ($posts as $post)

                        <div class="col-md-6">
                            <div class="imgIbinstaforex">
                                <img src="{{Storage::url($post->image)}}" alt="" style="width:100%; border-radius:8px;">
                            </div>
                            <div class="titleIbinstaforex">
                                <a href="{{route('news.detail', $post->slug)}}">
                                    <h5>{{$post->title}}</h5>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
<div id="tallModal" class="modal modal-wide fade">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">
            <div class="row">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <span class="img-modal">
                    @foreach ($intros as $intro)
                    <img src="{{Storage::url($intro->image)}}" alt="">
                    @endforeach
                </span>
            </div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script>
          $(document).ready(function() {
  $('#tallModal').modal('show');
});
</script>

  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script>

      $(document).ready(function() {
  $('#tallModal').modal('show');

});
  </script>



@endsection

