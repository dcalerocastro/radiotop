@extends('layout.backend.app')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rankings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active">Rankings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="/admin/ranking/create"
                                        class="btn btn-block btn-outline-primary btn-flat  mt-2">Crear ranking</a>
                                </div>
                            </div>
                           
                           
  
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-5">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                      
                                        <th>Artista</th>
                                        <th>Región</th>
                                        <th>Géneros</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                      @foreach ($registros as $k=> $reg)
                                          
                                     
                                            <tr>
                                                
                                                <th>{{$k+1}}</th>
                                                <td>{{@$reg->artist->nombre}}</td>
                                                <td>{{@$reg->region->nombre}}</td>
                                                <td>{{@$reg->gender->nombre}}</td>
                                                <td>{{$reg->created_at}}</td>
                                                <td width="7%">
                                                    <a href="/admin/ranking/{{ @$reg->id }}/edit"
                                                        class="btn-xs btn btn-outline-info "><i class="far fa-edit"></i></a>
                                                    <a href="#" data-id="{{ @$reg->id }}" data-toggle="modal"
                                                        data-target="#delobjeto"
                                                        class="btn btn-xs btn-dangers btn-object-delete"><i
                                                            class="far fa-trash-alt"></i></a>

                                                </td>
                                            </tr>
                                        

                                @endforeach
                                          
                                </tbody>

                            </table>
                            </div>
                        </div>

                           

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


    <div class="modal fade" id="delobjeto">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">

                <form class="delete-objeto" action="/admin/ranking/delete" method="POST">
                    @csrf

                    <div class="modal-header">
                        <h4 class="modal-title">Confirmar Eliminación</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">

                        <input type="hidden" name="_method" value="delete">

                        <input type="hidden" name="id" id="id">
                        <p>¿Esta seguro de eliminar este item?</p>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-light">Eliminar</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>



@endsection
