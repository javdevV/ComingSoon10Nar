@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="row" style="box-sizing: border-box;
            background: url({{asset('images/backgroundImg.jpg')}}) no-repeat;
            background-size: cover;
            height: 91.78vh">


            <div class="col-xs-6 col-sm-6 col-md-6 offset-3" style="margin-top: 7%;">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf

                    <div class="input-group">
                        <input type="email" name="email" placeholder="Enter your email address"
                               class="form-control rounded-0" style=" border-style: solid;
  border-width: 1px;
  border-color: rgb(194, 187, 202);
  background-color: rgb(237, 235, 240);
  font-family: Oswald Regular;
  height: 30px;
">
                        <span class="input-group-btn">

                        <button type="submit" class="btn btn-lg-primary rounded-0" style="
                            font-family: Oswald Regular;
                            background-color: #005bb4;
                             height: 30px;
                             color: white!important;
                             text-align: center;
                             line-height:8%">
                            SUBSCRIBE
                        </button>


                    </span>
                    </div>

                    <div class="row input-group" style="margin-top: 41%; margin-left: 32%">
                        <div class="media-body">
                            <div class="col-md-5 align-center ">
                                <div>
                                    <div class="mbr-social-likes social-likes social-likes_visible"
                                         data-counters="false">
                        <span class="btn btn-social facebook mx-1">
                            <a href="https://tinyurl.com/rmh4lsv" target="_blank"><img
                                    src="{{asset('images/facebook.png')}}" alt="" width="30px" height="30px"></a>
                        </span>
                                        <span class="btn btn-social twitter mx-1">
                                <a href=""><img src="{{asset('images/twitter.png ')}}" alt="" width="30px"
                                                height="30px"></a>
                            </span>
                                        <span class="btn btn-social plusone mx-1">

                                <a href=""><img src="{{asset('images/linkedin.png')}}" alt="" width="30px"
                                                height="30px"></a>

                        </span>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </form>
        </div>

    </div>

    </div>
@endsection
