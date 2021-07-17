@extends('index')

@section('content')
<div class="col-12 col-lg-6 col-md-6 align-self-center center-bar  justify-content-center d-flex pt-3">

    <div class="card">
        <!-- ======= Breadcrumbs ======= -->
        <div id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                         <h2>{{$posts->title}}</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>News</li>
                        <li>{{$posts->title}} </li>
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
                        <img src="{{Storage::url($posts->image)}}" alt="" style="width:100%; height:420px; border-radius:8px;">
                    </div>

                    <div class="text-left">
                        <p style="line-height: 32px;">
                            {{$posts->body}}
                            </p>
                        <br>

                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection
