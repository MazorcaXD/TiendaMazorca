<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .titulo{
            text-align: center;
            font: 2em;
        }
          table, td, th {
        border:1px solid black;
      }
      table {
        border-collapse:collapse;
        width:100%;
      }
      td, th {
        padding:2px;
      }
      .direccion {
        padding:10px;
      }
    </style>
<body>
    <div><h1 class="titulo">Listado de clientes</h1></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th class="direccion">Direccion</th>
                <th>Email</th>
                <th>F_nacimiento</th>
                <th>Telefono</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($clientes as $cliente)
                    <tr data-id='{{$cliente->id}}'>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->f_nacimiento}}</td>
                        <td>{{$cliente->telefono}}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>