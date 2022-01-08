@extends("layouts.app2")



@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_clientes').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        $(".borrar").click(function(){
            const tr=$(this).closest("tr"); //guardamos el tr completo
            const id=tr.data("id");
            Swal.fire({
                title: '¿seguro que quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Borrar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/clientes')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });

    } );
    </script>

    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
        }
    </style>
    
</head>
<body>
    <h1>Tienda La Mazorca {Clientes}</h1>

    @if(count($clientes)>0)
        <table id="tabla_clientes" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>F_nacimiento</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                    <th data-orderable="false">Borrar</th>
                    <th data-orderable="false">Editar</th>
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
                        <td>{{$cliente->edad}}</td>
                        <td><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                        <td><a href="{{url('/clientes')}}/{{$cliente->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay clientes</h1>
    @endif


@endsection
