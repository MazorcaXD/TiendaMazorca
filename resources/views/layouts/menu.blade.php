<style>
    #botones_menu {
        display: flex;
        justify-content: space-between;
    }
</style>


<div id="botones_menu">
    <div id="menu_izquierda">
        <a href="{{ url('/') }}"><button class="btn"><i class="fa fa-home"></i> Inicio </button></a>
        <a  href="{{ url('/clientes') }}"><button class="btn"><i class="fa fa-user-circle"></i> Clientes </button></a>
        <a  href="{{ url('/pedidos') }}"><button class="btn"><i class="fa fa-truck"></i> Pedidos </button></a>
        <a href=" {{url('/clientes/create')}}"><button class="btn"><i class="fa fa-address-book"></i> Nuevo Cliente </button></a>
        <a href="{{ url('/pdf') }}"><button class="btn"><i class="fa fa-file"></i> Generar PDF</button></a>
    </div>
    <div id="menu_derecha">

            <a href="{{ url('/email') }}"><button class="btn"><i class="fa fa-envelope-open"></i> Contacto</button></a> 

    </div>
</div>