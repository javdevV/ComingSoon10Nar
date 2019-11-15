@extends('layouts.app')

@section('content')

    {{--    <div class="row">--}}
    {{--        <div class="col-lg-12 margin-tb">--}}
    {{--            <div class="pull-left">--}}
    {{--                <h2>Add New Product</h2>--}}
    {{--            </div>--}}
    {{--            <div class="pull-right">--}}
    {{--                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
         <div class="col-xs-2 col-sm-2 col-md-6 offset-3" style="margin-top: 7%;">

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
                    <input type="email" name="email"
                           placeholder="Enter your email address" class="form-control rounded-0" style=" border-style: solid;
  border-width: 1px;
  border-color: rgb(194, 187, 202);
  background-color: rgb(237, 235, 240);
  font-family: Oswald Regular;
  height: 30px;">
                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-lg-primary rounded-0"
                            style="
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

                {{--            <div class="row input-group">--}}
                {{--                <div class="col-xs-6 col-sm-6 col-md-6 input-group">--}}
                {{--                    <input type="email" name="email" class="form-control" placeholder="Email">--}}
                {{--                </div>--}}
                {{--                <div class="col-xs-1 col-sm-1 col-md-1 input-group">--}}
                {{--                    <button type="submit" class="btn btn-primary" style="float: left">Submit</button>--}}
                {{--                </div>--}}
                {{--            </div>--}}

            </form>
        </div>


@endsection


