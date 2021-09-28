{include file='templates/header.tpl'}

<table class="table">
  <thead>
    <tr>
      <th scope="col">{$cabeceraCol_1}</th>
      <th scope="col">{$cabeceraCol_2}</th>
      <th scope="col">{$cabeceraCol_3}</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$books item=$book}
    <tr>
      <td>{$book ->nombre}</td>
      <td>{$book ->genero}</td>
      <td>{$book ->anio}</td>
    </tr>
  {/foreach}
   
  </tbody>
</table>


{include file='templates/footer.tpl'}