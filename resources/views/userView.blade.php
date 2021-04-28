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
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>
</div>

@endsection