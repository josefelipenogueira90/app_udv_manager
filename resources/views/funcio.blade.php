@extends('painelUp')
@section('pageContent')
<div class="container-fluid">
    <!-- Page Heading -->
        <div class="d-sm-flex mt-5 align-items-center justify-content-between mb-4">
            
            <a href="#" class="d-none d-sm-inline-block btn btn btn-primary shadow-sm">
            <i class="fas fa-user-plus fa-sm text-white-60"></i> Cadastrar Usuário</a>
            <h1 class="h3 mb-0 text-gray-800 d-none">Usuários</h1>
        </div>

        
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Usuários</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nome</th>                                         
                                            <th>Data Nasc.</th>
                                            <th>Sexo</th>
                                            <th>E-mail</th>
                                            <th>salário</th>
                                            <th>Endereço(s)</th>
                                            <th>telefone(s)</th>
                                            <th>Cargo</th>
                                            <th>Categoria</th>
                                            <th>Situação</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nome</th>                                         
                                            <th>Data Nasc.</th>
                                            <th>Sexo</th>
                                            <th>E-mail</th>
                                            <th>salário</th>
                                            <th>Endereço(s)</th>
                                            <th>telefone(s)</th>
                                            <th>Cargo</th>
                                            <th>Categoria</th>
                                            <th>Situação</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($funcio as $funcios)
                                        @php
                                            $users=$funcios->find($funcios->id)->relationUser;
                                        @endphp
                                        <tr>
                                            <td>{{$funcios->id}}</td>
                                            <td>{{$users->nome}}</td>
                                            <td>{{$funcios->data_nascimento}}</td>
                                            <td>{{$funcios->sexo}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$funcios->salario}}</td>
                                            <td>{{$funcios->enderecos}}</td>
                                            <td>{{$funcios->telefones}}</td>
                                            <td>{{$funcios->cargo}}</td>
                                            <td>{{$funcios->categoria}}</td>
                                            <td>{{$funcios->situacao}}</td>





                                            

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