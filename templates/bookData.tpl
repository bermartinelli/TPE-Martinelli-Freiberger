{include file='templates/header.tpl'}
</head>

{foreach from=$data item=$queryData}
    {if isset($queryData ->capitulos)} <!-- Verifico si es un Libro o un Autor y muestro la Tabla correspondiente-->
      <table class="table">
  <thead>
    <tr>
      <th scope="col">{$cabeceraCol_1}</th>
      <th scope="col">{$cabeceraCol_2}</th>
      <th scope="col">{$cabeceraCol_3}</th>
      <th scope="col">{$cabeceraCol_4}</th>
      <th scope="col">{$cabeceraCol_5}</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>{$queryData ->nombre}</td>
      <td>{$queryData ->genero}</td>
      <td>{$queryData ->capitulos}</td>
      <td>{$queryData ->editorial}</td>
      <td>{$queryData ->anio}</td>
    </tr> 
   
  </tbody>
</table>

  {else}
    <table class="table">
  <thead>
    <tr>
      <th scope="col">{$cabeceraAutor_1}</th>
      <th scope="col">{$cabeceraAutor_2}</th>
      <th scope="col">{$cabeceraAutor_3}</th>
      <th scope="col">{$cabeceraAutor_4}</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>{$queryData ->nombre}</td>
      <td>{$queryData ->nacimiento}</td>
      <td>{$queryData ->muerte}</td>
      <td>{$queryData ->nacionalidad}</td>
    </tr> 
   
  </tbody>
</table>
    {/if}
    
      
  {/foreach}


{include file='templates/footer.tpl'}