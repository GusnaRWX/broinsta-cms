@extends('index')

@section('content')
 <!-- middle content -->
 <div class="col-12 col-lg-4 col-md-4 offset-md-1 align-self-center center-bar  justify-content-center d-flex">
    <div class="card">

        <div class="card-body">

            <div class="imgIbinstaforex text-center">
                <img src="assets/img/gambar1.png" alt="" style="width:70%; border-radius:8px;">
            </div>

            <h3>Informasi Akun</h3>
            <p class="card-text">LengKapi Data dibawah untuk mevalidasi akun anda di BROINSTA. </p>

            <div class="">

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">Login</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;">{{$members->no_akun}}</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">Nama Akun</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;">{{$members->pemilik_rek}}r</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">Email</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;">{{$members->email}}</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">No. Telepon</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;">{{$member->phone}}</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">Rebate kirim ke</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;"> <b>{{$members->rebate}}</b> - {{$members->pemilik_rek_rebate}}</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p style="margin: 0 0 !important;">WD kirim ke</p>
                        <div class="bold">
                            <p style="margin: 0 0 !important;">{{$members->no_rek}}}</p>
                        </div>
                    </li>
                </ul>

                <a type="button" href="{{route('broinsta.home')}}" class="btn btn-secondary-border btn-lg mt-4">Back To Home</a>
            </div>

        </div>
    </div>

</div>


@endsection
