@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of emails</div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                {{--                                    <th width="280px">Action</th>--}}
                            </tr>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $client->email }}</td>
                                    {{--                 <td>--}}
                                    {{--                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">--}}

                                    {{--                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>--}}

                                    {{--                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>--}}

                                    {{--                        @csrf--}}
                                    {{--                        @method('DELETE')--}}

                                    {{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
                                    {{--                    </form>--}}
                                    {{--                </td>--}}
                                </tr>
                            @endforeach
                        </table>
                        <span style="float: right">
                            {!! $clients->links() !!}
                            </span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection










