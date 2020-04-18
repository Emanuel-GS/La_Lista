@extends('layouts.master')

@section('content')   
    <div class="jumbotron ">
        <div class="container text-center">
            <h3 class="font-weight-light " >Me interesa</h3> 
            <div class="row">
                <div class="col-4 m-auto ">
                    <div class="form-group">
                        <form class="was-validated">   
                            <div class="form-group">
                                <select class="custom-select " required>
                                <option  value="">Selecciona una opción</option>
                                <option value="1">Empleo</option>
                                <option value="2">Productos</option>
                                <option value="3">Servicios</option>
                                </select>
                                <div class="invalid-feedback">Seleccione una opción primero</div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center"> 
            <div class="row ">
                <div class="col-6" > 
                    <button type="button"  class="btn btn-primary btn-lg " >Buscar</button>
                </div>
                <div class="col-6 "> 
                    <button type="button" class="btn btn-warning btn-lg">Ofrecer</button>
                </div> 
            </div> 
        </div>
    </div> 
@endsection