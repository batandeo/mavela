@extends('layouts.admin')
@section('content')
    <br><br>
    <section class="content" >
        <div class="callout callout-info" style="background: #faba00 !important; text-align: center">
            <h4>Register of cars</h4>
        </div>
        @if(session()->has('notif'))

                <div class=" alert alert-default col-lg-8">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong style="color:#009688">{{session()->get('notif')}} </strong>
                </div>

        @endif
        <br>
            <form method="POST" action="{!! url('vehicle/store') !!}" enctype="multipart/form-data" accept-charset="UTF-8">
                @csrf
            <div class="form-groupc col-lg-5">
                <label class="label-color">Title</label><span class="mycolor">*</span>
                <input name="title" type="text" class="form-control col-lg-6" placeholder="Type the title" required>
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('title') }}</strong>
                     </span>
                @endif
            </div>
            <div class="form-groupc col-lg-5">
                <label class="label-color">Fuel</label><span class="mycolor">*</span>
                <input type="text" name="fuel" class="form-control col-lg-6" placeholder="Type the fuel" required>
                @if ($errors->has('fuel'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('fuel') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Picture</label><span class="mycolor">*</span>
                {{Form::file('picture')}}
                @if ($errors->has('picture'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('picture') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Seat</label><span class="mycolor">*</span>
                <input type="text" name="seat" class="form-control col-lg-6" placeholder="Type the seat" required>
                @if ($errors->has('seat'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('seat') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Price</label><span class="mycolor">*</span>
                <input type="text" name="price" class="form-control col-lg-6" placeholder="Type the price" required>
                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('price') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Quantity</label><span class="mycolor">*</span>
                <input type="text" name="quantity" class="form-control col-lg-6" placeholder="Type the quantity" required>
                @if ($errors->has('quantity'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('quantity') }}</strong>
                     </span>
                @endif
            </div>
            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Code</label><span class="mycolor">*</span>
                <input type="text" name="code" class="form-control col-lg-6" placeholder="Type the code" required>
                @if ($errors->has('code'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('code') }}</strong>
                     </span>
                @endif
            </div>
            <div class="form-groupc col-lg-5" style="margin-top: 30px;">
                <label class="label-color">Year</label><span class="mycolor">*</span>
                <input type="text" name="year" class="form-control col-lg-6" placeholder="Type the year" required>
                @if ($errors->has('year'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('year') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-groupc col-lg-12" style="display: flex; justify-content: center">
                <button type="submit" class="btn bg-navy btn-flat margin mybutton" style="background:#faba00 !important">Save</button>
            </div>
        </form>


        <section class="content">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Seat</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Fuel</th>
                        <th>Picture</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->id}}</td>
                            <td>{{$vehicle->title}}</td>
                            <td>{{$vehicle->year}}</td>
                            <td>{{$vehicle->seat}}</td>
                            <td>{{$vehicle->price}}</td>
                            <td>{{$vehicle->quantity}}</td>
                            <td>{{$vehicle->fuel}}</td>
                            <td> <img style="width: 100px; height: 100px" src="../storage/picture/{{$vehicle->picture}}"></td>
                            <td>
                                {{--<a type="submit" class="btn bg-purple margin" href="{{ route('vehicles.edit', $vehicle->id) }}"><i class="fa fa-edit"></i></a>--}}
                                <button type="submit" class="btn bg-maroon btn-flat margin" data-toggle="modal" data-target="{{'#modal-default-'.$vehicle->id}}"><i class="fa fa-trash-o"></i></button>
                                <div class="modal fade" id="{{'modal-default-'.$vehicle->id}}">
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
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['vehicles.destroy', $vehicle->id] ]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Seat</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Fuel</th>
                        <th>Picture</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </section>
@endsection
