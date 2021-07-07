@extends('index')

@section('content')
 <!-- middle content -->
 <div class="col-12 col-lg-4 col-md-4 offset-md-1 align-self-center center-bar  justify-content-center d-flex">
    <div class="card">

        <div class="card-body">

            <div class="imgIbinstaforex text-center">
                <img src="assets/img/gambar1.png" alt="" style="width:50%; border-radius:8px;">
            </div>

            <div class="card-form">
                <h3 class="card-title mb-3">Withdraw</h3>
                <h6 class="card-text">Lengkapi Data dibawah untuk penarikan uang akun anda di BROINSTA. </h6>
                <hr>
                <form id="formDeposit" autocomplete="off" enctype="multipart/form-data" action="{{route('withdraw.update', [$draws->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputAddress">Nomor akun Broninsta</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nomor akun instaforex" name="no_akun" value="{{$draws->no_akun}}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Password</label>
                        <input type="password" class="form-control" id="inputAddress" placeholder="Nomor akun instaforex" name="password" value="{{$draws->password}}" disabled>
                    </div>

                    <div class="form-group ">
                        <label for="inputEmail4">Jumlah Withdrawal (Min. USD1)</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="withdraw">
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
                        <div class="form-group col-md-4">
                            <label for="inputState"> Kirim Ke</label>
                            <select class="custom-select" name="bank">
                                <option selected value="Bank Syariah"><span>Bank Syariah</span></option>
                                <option selected value="Bank Mandiri"><span>Bank Mandiri</span></option>
                                <option selected value="Bank BCA"><span>Bank BCA</span></option>
                                <option selected value="Bank BNI"><span>Akun insta</span></option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputCity">Nomor Rekening</label>
                            <input type="text" class="form-control" id="inputCity" name="no_rek">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Pemilik Nomor Rekening</label>
                            <input type="text" class="form-control" placeholder="Pemilik rekening" name="pemilik_rek">
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-lg">Withdraw sekarang</button>
                    <!--handle menggunakan js-->
                </form>
            </div>

        </div>
    </div>


</div>


@endsection
