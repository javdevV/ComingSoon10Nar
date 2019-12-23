@extends('layouts.app1')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 2%">
                <div class="card">
                    <div class="card-header">List of emails</div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @if (count($clients) == 0)
                                <tr>
                                    <td colspan="3"> Nothing to show</td>
                                </tr>

                            @endif
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

                                            {{--                                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>--}}

                                            {{--                                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>--}}


                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" tool>&times;</button>
                                        </form>
                                    </td>
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










