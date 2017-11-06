<h2>Información sobre incidente número {{ $incidente->id }}: </h2>

<h3>Utilice esta url para consultar estado de incidente: <a href="{{ Request::url() }}">{{ Request::url() }}</a>.</h3>

<ul>
  <li>
    Número de cliente: {{ $incidente->nroCliente }}
  </li>
  <li>
    Descripción de incidente: {{ $incidente->descripcionIncidente }}
  </li>
  <li>
    Fecha de incidente: {{ $incidente->fechaIncidente }}
  </li>
  <li>
    Cantidad total de objetos: {{ $cantidadObjetosTotal }}
  </li>
  <li>
    Estado de incidente: {{ $incidente->estado }}
  </li>
</ul>