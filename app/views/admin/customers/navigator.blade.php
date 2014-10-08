<nav class="navbar navbar-inverse">
<div class="navbar-header">
   <a class="navbar-brand" href="{{URL::to('customers')}}">Administrador de Clientes</a>
</div>
<div>
    <ul>
       <li>
           <a href="{{URL::to('customers') }}">Listar</a>
       </li>
       <li>
           <a href="{{URL::to('admin.customers.register') }}">Registrar</a>
       </li>
    </ul>
</div>
</nav>