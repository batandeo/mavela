@extends('layouts.admin')
@section('content')
    <br><br>
    <section class="content" >
        <div class="callout callout-info" style="background-color: #faba00 !important; text-align: center">
            <h4>Update dollar</h4>
        </div>
        @if(session()->has('notif'))
            <div class="row">
                <div class=" alert alert-default col-lg-8">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong style="color:#009688">{{session()->get('notif')}} </strong>
                </div>
            </div>
        @endif

        {{ Form::model($dollar, array('route' => array('dollars.update', $dollar->id), 'method' => 'PUT')) }}


        <div class="form-groupc col-lg-5">
            <label class="label-color">Libelle</label>
            <input type="text" name="libelle" class="form-control col-lg-6" value="{{$dollar->libelle}}">
            @if ($errors->has('libelle'))
                <span class="help-block">
                            <strong style="color:red">{{ $errors->first('libelle') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-groupc col-lg-5">
            <label class="label-color">Price</label>
            <input type="text" name="price" class="form-control col-lg-6" value="{{$dollar->price}}">
            @if ($errors->has('price'))
                <span class="help-block">
                            <strong style="color:red">{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-groupc col-lg-12">
            {{ Form::submit('Update', array('class' => 'btn bg-primary btn-flat','style'=>'background: darkgray;font-weight: bold;')) }}
            {{ Form::close() }}
        </div>
    </section>

@endsection
