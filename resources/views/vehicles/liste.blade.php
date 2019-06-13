<section class="content">
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Types</th>
                <th>Pictures</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->title}}</td>
                    <td>{{$type->price}}</td>
                    <td> <img style="width: 100px; height: 100px" src="../storage/picture/{{$type->picture}}"></td>
                    <td>{{$type->description}}</td>

                    <td>
                        <a type="submit" class="btn bg-purple margin" href="{{ route('types.edit', $type->id) }}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn bg-maroon btn-flat margin" data-toggle="modal" data-target="{{'#modal-default-'.$type->id}}"><i class="fa fa-trash-o"></i></button>
                        <div class="modal fade" id="{{'modal-default-'.$type->id}}">
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
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['types.destroy', $type->id] ]) !!}
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
                <th>Types</th>
                <th>Pictures</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </tfoot>
        </table>
    </div>
</section>