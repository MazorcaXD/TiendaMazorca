@extends("layouts.app2")



@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_pedidos').DataTable( {
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
                        url   : "{{url('/pedidos')}}/"+id,
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
    <h1>Tienda La Mazorca {pedidos}</h1>

    @if(count($pedidos)>0)
        <table id="tabla_pedidos" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Nombre</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th data-orderable="false">Borrar</th>
                    <th data-orderable="false">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    <tr data-id='{{$pedido->id}}'>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->nombre}}</td>
                        <td>{{$pedido->cliente}}</td>
                        <td>{{$pedido->producto}}</td>
                        <td>{{$pedido->precio}}</td>
                        <td><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                        <td><a href="{{url('/pedidos')}}/{{$pedido->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay pedidos</h1>
    @endif


@endsection
