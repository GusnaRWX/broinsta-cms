@extends('index')

@section('content')
<div class="col-12 col-lg-4 col-md-4 offset-md-1 align-self-center center-bar text-center justify-content-center d-flex">
    <div class="card">

        <div class="card-body">

            <div class="imgIbinstaforex">
                <img src="{{asset('assets/img/gambar1.png')}}" alt="" style="width:100%; border-radius:8px;">
            </div>
            <h3 style="color: green;">Data success updated</h3>
            <br>

            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col text-center">
                        <a href="{{route('broinsta.home')}}" class="btn btn-primary btn-lg">Back To Homepage</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
@endsection
