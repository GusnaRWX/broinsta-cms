@extends('index')

@section('content')
<div class="col-12 col-lg-4 col-md-4 offset-md-1 align-self-center center-bar text-center justify-content-center d-flex">
    <div class="card">

        <div class="card-body">

            <div class="imgIbinstaforex">
                <img src="{{asset('assets/img/gambar1.png')}}" alt="" style="width:100%; border-radius:8px;">
            </div>

            <div class="card-form">
                                    <h4 class="card-text">LengKapi Data dibawah untuk mevalidasi akun anda di BROINSTA. </h4>
                                    <hr>
                                    <form id="formDeposit" autocomplete="off" enctype="multipart/form-data" action="{{route('deposit.index')}}" method="POST">
                                        @csrf @method('POST')
                                        <div class="form-group">
                                            <label for="inputAddress">Nomor akun Broninsta</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Nomor akun instaforex" name="account_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Password</label>
                                            <input type="password" class="form-control" id="inputAddress" placeholder="Nomor akun instaforex" name="password">
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
                                                <label for="inputState">WD Kirim Ke</label>
                                                <select class="custom-select" name="withdraw">
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

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Pemilik Nomor Rekening</label>
                                                <input type="text" class="form-control" placeholder="Pemilik rekening" name="pemilik_rek">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Rebate Kirim Ke</label>
                                                <select class="custom-select" name="withdraw">
                                                    <option selected value="Bank Syariah"><span>Akun insta</span></option>
                                                    <option selected value="Bank Mandiri"><span>Bank Mandiri</span></option>
                                                    <option selected value="Bank BCA"><span>Bank BCA</span></option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="inputCity">Nomor Rekening</label>
                                                <input type="text" class="form-control" id="inputCity" name="no_rek">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Pemilik Nomor Rekening Rebate</label>
                                                <input type="text" class="form-control" placeholder="Pemilik rekening" name="pemilik_rek_rebate">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="inputAddress">KTP penerima Rebate</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="KTP Penerima" name="_ktp_penerima">
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary btn-lg">Validasi sekarang</button>
                                        <!--handle menggunakan js-->
                                    </form>
                                </div>


        </div>
    </div>

</div>


@endsection
