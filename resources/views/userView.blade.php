@extends('painelUp')
@section('pageContent')
<div class="container-fluid">
    <!-- Page Heading -->
        <div class="d-sm-flex mt-5 align-items-center justify-content-between mb-4">
            
            
            <a href="{{url('/usuarios')}}" title="voltar" rel="voltar">Voltar </a>
        </div>
  <!-- Illustrations -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$user->nome}} - Perfil</h6>
    </div>
    <div class="card-body">
        
        <p>Nome:<b>{{$user->nome}} </b>, Perfil: <b>{{$user->perfilAcesso}} </b>, E-mail: <b>{{$user->email}} </b>, senha: <b>{{$user->senha}} </b>,
            
    </div>
</div>
</div>

@endsection