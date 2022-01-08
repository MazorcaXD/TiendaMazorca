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

    <h3>Insertar cliente </h3>




    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">F_nacimiento</label>
            <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
        </div>
        <div>
        <button type="submit" class="btn btn-primary" >Guardar</button>
        <a href="{{url('/clientes')}}" class="btn btn-secondary">Volver</a>
        </div>
        
    </form>


@endsection