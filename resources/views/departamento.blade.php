@extends('painelUp')
@section('pageContent')
<div class="container-fluid">
    <!-- Page Heading -->
        <div class="d-sm-flex mt-5 align-items-center justify-content-between mb-4">
            
            <a href="#" class="d-none d-sm-inline-block btn btn btn-primary shadow-sm">
            <i class="fas fa-user-plus fa-sm text-white-60"></i> Cadastrar Cargo</a>
            <h1 class="h3 mb-0 text-gray-800 d-none">Cargos</h1>
        </div>

        
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Cargos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nome</th>                                            
                                            <th>Telefone(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nome</th>                                            
                                            <th>Telefone(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($depart as $departs)
                                        
                                        <tr>
                                            <td>{{$departs->id}}</td>
                                            <td>{{$departs->nome}}</td>
                                            <td>{{$departs->telefones}}</td>
                                            
                                            <td>
                                            <a href="{{url("departamentos/$departs->id")}}" title="vizualizar" rel="vizualizar">
                                            <i class="btn btn-dark fas fa-eye"></i>
                                           
                                            <a href="" title="editar" rel="editar">
                                            <i class="btn btn-primary far fa-edit"></i>
                                            </a>

                                            <a href="" title="deletar" rel="apagar">
                                            <i class="btn btn-danger far fa-trash-alt"></i>
                                            </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4"><a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

</div>
@endsection