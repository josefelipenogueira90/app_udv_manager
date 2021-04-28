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
                                            <th>Departamento</th>
                                            <th>Nome do Cargo</th>                            
                                            <th>Telefone(s)</th>
                                            <th>Salário base</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>id</th>
                                            <th>Departamento</th>
                                            <th>Nome do Cargo</th>                            
                                            <th>Telefone(s)</th>
                                            <th>Salário base</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($cargo as $cargos)
                                        @php
                                            $dep=$cargos->find($cargos->id)->relationDepart;
                                        @endphp
                                        <tr>
                                            <td>{{$cargos->id}}</td>
                                            <td>{{$dep->nome}}</td>
                                            <td>{{$cargos->nome}}</td>
                                            <td>{{$cargos->salario_base}}</td>
                                            <td>
                                            <a href="{{url("cargos/$cargos->id")}}" title="vizualizar" rel="vizualizar">
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