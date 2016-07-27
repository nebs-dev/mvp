@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Audio</th>
                                <th>Video</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="odd gradeX">
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->audio }}</td>
                                        <td>{{ $product->video }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>{{ $product->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" type="button" class="btn btn-primary btn-xs">Info</a>
                                            <a href="{{ route('products.edit', $product->id) }}" type="button" class="btn btn-success btn-xs">Edit</a>
                                            <a href="#" type="button" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@stop