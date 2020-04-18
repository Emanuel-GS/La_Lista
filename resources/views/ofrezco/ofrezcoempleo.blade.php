@extends('layouts.master')

@section('content')


<div class="row">
    <div class="col-8">
        <h3 class="font-weight-light ">Los empleos que ofrezco</h3>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($o_empleos as $empleo)
                    <tr>
                        <th scope="row">{{$empleo->id}}</th>
                        <td>{{$empleo->titulo}}</td>
                        <td>{{$empleo->tipo}}</td>
                        <td>{{$empleo->categoria}}</td>
                        <td>
                            {{--  <a href="{{route ('ofrezco.o_empleodetalle',$empleo)}}" class="btn btn-primary
                            btn-sm">Detalles</a>
                            <a href="{{route ('ofrezco.o_empleoeditar',$empleo)}}"
                                class="btn btn-warning btn-sm">Modificar</a>
                            <form action="{{route ('ofrezco.o_empleoeliminar',$empleo)}}" method="POST"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">
                                    Terminar
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$o_empleos->links()}}
        </div>
    </div>
    <div class="col-4">
        <!-- Mensaje Create correcto -->
        @if(session('empleo_agregado'))
        <div class="alert alert-success">
            {{session('empleo_agregado')}}
        </div>
        @endif
        @if(session('empleo_eliminado'))
        <div class="alert alert-success">
            {{session('empleo_eliminado')}}
        </div>
        @endif

        <!-- FORMULARIO EX  -->
        <form action="{{route('ofrezco.o_crearempleo')}}" method="POST">
            @csrf
            <!-- // Mensajes de error -->
            @error('titulo')
            <div class="alert alert-danger">El titulo es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('descripcion')
            <div class="alert alert-danger">La descripción es obligatoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('tipo')
            <div class="alert alert-danger">El tipo es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('categoria')
            <div class="alert alert-danger">La categoria es obligatoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('sub_categoria')
            <div class="alert alert-danger">La subcategoria es obligatoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('estado')
            <div class="alert alert-danger">El estado es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('municipio')
            <div class="alert alert-danger">El municipio es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror
            @error('localidad')
            <div class="alert alert-danger">La localidad es obligatoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> @enderror

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Usuario</label>
                    <input type="text" name="user_id" class="form-control" id="o_ne_user_id" value="{{ auth()->id() }}"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="o_ne_titulo" value="{{old('titulo')}}"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control" id="o_ne_descripcion"
                        value="{{old('descripcion')}}" required></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Tipo</label>
                    <select name="tipo_id" class="custom-select" id="o_ne_tipo_id" value="{{old('tipo_id')}}" required>
                        <option selected disabled value="">Esccoge una opción</option>
                        @foreach ($listado_tipos as $tipos)
                        <option value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Categoria</label>
                    <select name="categoria_id" class="custom-select" id="o_ne_categoria_id"
                        value="{{old('categoria_id')}}" required>
                        <option selected disabled value="">Esccoge una opción</option>
                        @foreach ($listado_categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Subcategoria</label>
                    <select name="subcategoria_id" class="custom-select" id="o_ne_subcategoria_id"
                        value="{{old('subcategoria_id')}}" required>
                        <option selected disabled value="">Esccoge una opción</option>
                        @foreach ($listado_subcategorias as $subcategoria)
                        <option value="{{$subcategoria->id}}">{{$subcategoria->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Estado</label>
                    <select name="estado" class="custom-select" id="o_ne_estado" value="{{old('estado')}}" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Municipio</label>
                    <select name="municipio" class="custom-select" id="o_ne_municipio" value="{{old('municipio')}}"
                        required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Localidad</label>
                    <select name="localidad" class="custom-select" id="o_ne_localidad" value="{{old('localidad')}}"
                        required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit"> Agregar</button>
        </form>
    </div>
</div>

@endsection
