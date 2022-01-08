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

    <h3>Editar cliente </h3>
    <form action="{{url('/clientes/')}}/{{$clientes->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$clientes->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$clientes->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$clientes->apellidos}}">
        </div>
        <div class="form-group">
            <label for="direccion">direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="{{$clientes->direccion}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$clientes->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">f_nacimiento</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$clientes->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="telefono">telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$clientes->telefono}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/clientes')}}" class="btn btn-secondary">Cancelar</a>
@endsection