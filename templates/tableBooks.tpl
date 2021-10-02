{include file='templates/header.tpl'}
</head>

<table class="table">
  <thead>
    <tr>
      <th scope="col">{$cabeceraCol_1}</th>
      <th scope="col">{$cabeceraCol_2}</th>
      <th scope="col">{$cabeceraCol_3}</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$books item=$bookData}
  <tr>
      <td>{$bookData ->nombre}</td>
      <td>{$bookData ->genero}</td>
      <td>{$bookData->autor}</td>
    </tr> 
  {/foreach}
   
  </tbody>
</table>


{include file='templates/footer.tpl'}