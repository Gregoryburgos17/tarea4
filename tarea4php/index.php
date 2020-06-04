 <?php 

include('utils.php');
include('header.php');

?>

<h3>Solicitudes de becas recibidas</h3>

<div style="text-align: right; margin-right: 80px;">
  <a href="edit.php" style="margin-bottom: 20px; margin-right: 40px;">
  <svg class="bi bi-bookmark-plus" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
</svg>
  </a>
</div>

<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Curso</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php LoadTable1();?>
    </table>
  </tbody>


<?php 
include('footer.php');
 ?>

