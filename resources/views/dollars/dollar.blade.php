@extends('layouts.admin')
@section('content')
    <br><br>
    <section class="content" >
        <div class="callout callout-info" style="background: #faba00 !important; text-align: center">
            <h4>Type of cars</h4>
        </div>
        @if(session()->has('notif'))
            <div class="row" style="text-align: center;
    position: relative;
    left: 186px; top: 67px;">
                <div class=" alert alert-default col-lg-8">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong style="color:#009688">{{session()->get('notif')}} </strong>
                </div>
            </div>
        @endif
        <br>


        <section class="content">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type of money</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($dollars as $dollar)
                        <tr>
                            <td>{{$dollar->id}}</td>
                            <td>{{$dollar->libelle}}</td>
                            <td>1 ghs = {{$dollar->price}} dollar</td>
                            <td>
                                <a type="submit" class="btn bg-purple margin" href="{{ route('dollars.edit', $dollar->id) }}"><i class="fa fa-edit"></i></a>
                               {{-- <button type="submit" class="btn bg-maroon btn-flat margin" data-toggle="modal" data-target="{{'#modal-default-'.$dollar->id}}"><i class="fa fa-trash-o"></i></button>
                                <div class="modal fade" id="{{'modal-default-'.$dollar->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" style="text-align: center">Do you want to delete this type?</h4>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" >Cancel</button>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['dollars.destroy', $dollar->id] ]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Type of money</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </section>
@endsection
