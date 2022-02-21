@extends('welcome')
@section('title','Home') 
@section('content') 
<style>
    body{
        background-color: #041633 !important;
    }
    .icon{
        color: #041633 !important;
        font-size: 40px !important;
    }
    .sombra{
        box-shadow: 0 6px 10px 0 rgba(96, 106, 128, 0.61);
    }
    .btn-enviar{
        background-color: #2F3788 !important;
        color: #fff !important
    }
</style>
<div class="container">
    <div class="row justify-content-center" style="height:90vh; align-items: center;">
        <div class="col-12 col-md-6 mx-auto">
            <div class="card sombra">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="text-center">
                            <i class="fas fa-box icon"></i>
                            <h4 class="center mb-3">Formulario crear Producto</h1>
                        </div>
                        <form action="{{ url('/producto')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="Precio" id="Precio" placeholder="Precio" required>
                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" name="Detalle" id="Detalle" placeholder="Detalle" required></textarea>
                        </div>
                        <input class="btn col-12 btn-enviar" type="submit" Value=" Guardar Datos ">
                        <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection