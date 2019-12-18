@extends('layouts.app1')
@section('content')
    <div class="video-w3l">

        <div class="agileinfo-grids" style="align-self: center; margin-bottom: 2%;">
            <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 col-sm-offset-3 col-xs-offset-3 col-lg-offset3 col-md-offset-3">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" style="align-self: center;">
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
            </div>
            <div class="newsletter">
                <h2>Subscribe Now</h2>
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf

                    <input type="text" name="email" size="50" required="" placeholder="Email"/>
                    <button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>
            </div>
            <!--//newsletter-->
            <div class="agileinfo-social-grids">
                <ul>
                    <li><a href="https://www.facebook.com/10narnet/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Join un on Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/10narnet/" target="_blank"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="bottom" title="Join un on Instagram"></i></a></li>
{{--                    <li><a href=""><i class="fa fa-twitter"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}


                </ul>
            </div>
        </div>


    </div>
@endsection
