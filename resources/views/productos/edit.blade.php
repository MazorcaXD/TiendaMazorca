@extends("layouts.app2")


@section("contenido")
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Editar producto </h3>
    <form action="{{url('/productos/')}}/{{$productos->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$productos->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$productos->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" value="{{$productos->descripcion}}">
        </div>
        <div class="form-group">
            <label for="stock">stock</label>
            <input type="text" class="form-control" id="stock" name="stock" placeholder="stock" value="{{$productos->stock}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/productos')}}" class="btn btn-secondary">Cancelar</a>
@endsection