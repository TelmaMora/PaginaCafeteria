
 <div class="container"><br>
 
<div class="card">
<div class="row">
  <div class="col-md-8">  
    <ol class="breadcrumb">
       <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE COMENTARIOS </li>
    </ol>
  </div>
    <div class="col-md-4">  
     <div class="alert alert-success" role="alert">

         <strong>Comentarios : </strong>                                 
    </div>
  </div>
    <br><br><br>
  <div class="col-md-2">
</div>
  <div class="card-block">
    <p class="card-text">
       <table class="table table-bordered">
    <thead class="thead">
       <tr>
            <td align="center">ID</td>
            <td align="center">Nombre</td>
            <td align="center">Email</td>
            <td align="center">Asunto</td>
            <td align="center">Comentario</td>
      </tr>
          </thead>
          <?php   
          $conexion=mysql_connect("localhost","root","root");
	 $db=mysql_select_db("cafeteria",$conexion);
			$ejecuta=mysql_query("SELECT *  FROM COMENTARIOS");
			$res=mysql_fetch_assoc($ejecuta);
			while ($res=mysql_fetch_assoc($ejecuta)) {
	 			echo '<tr>			
					<td align="center"> '.$res["idComentario"].'</a></td>
					<td align="center"> '.$res["nombe"].'</td>
					<td align="center">'.$res["email"].'</td> 
					<td align="center">'.$res["asunto"].'</td>
					<td align="center">'.$res["comentario"].'</td>		
				    </tr>';
 		}?>
    <tbody>
    </tbody>
  </table>
</div>
    </p>
</div>
  
  </div>
</div>
 </div>

</div>


