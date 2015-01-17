<?php $uri = Request::path(); ?> 

<div class="large-8 columns"> 
  Codigo del Producto: <input type="search" name="codigo" id="codigo" placeholder="Introduzca el codigo" autofocus/>
</div>
<br/>
<div id="display"></div>







<div class="large-4 columns"> 
  <h1> 
    <input type="submit" value="Total: $ 45.00" />
  </h1>
</div>














<div class="large-5 columns"> 

  <table id="tabla_productos">

  <thead>
      <tr>
        <th colspan="6"> Ticket No.1</th>
      </tr>

      <tr>
        <th>Cantidad</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Importe</th>
        <th></th>
      </tr>
    </thead>

    <tbody id="tabla_body_productos">
      <!--
      <tr id="prod_1">
          <td>2</td>
          <td>Hamburquesa chica</td>      
          <td>$ 10</td>
          <td>$ 20</td>
          <td>20</td> 
          <td> <input type="submit" value="Eliminar" onclick="elimina_pod(1);" /> </td> 
      </tr-->
    </tbody>

  </table>


</div>








<div class="large-7 columns"> 
  @include('puntoventa.slider')
</div>






<section id="resultados"></section>



<script>
function myFunction(id,nombre,precio){
    var rowCount = $('#tabla_body_productos tr').length;

    if(rowCount == 0){
      $("#tabla_body_productos").append("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><a>E</a></td></tr>");   
    }

    if (rowCount >= 1){
      var siguiente=parseFloat(rowCount)+1;
      $("#tabla_body_productos tr:last").after("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><a>E</a></td></tr>");   
    }

}

  $(document).on("click",".eliminar",function(){
    var parent = $(this).parents().get(0);
    $(parent).remove();
  });


$("#codigo").keypress(function(e) {
    consulta = $("#codigo").val();
     $.ajax({
            type: "POST",
            url: "punto_venta/busqueda",
            data: "b="+consulta,
            dataType: "html",
            beforeSend: function(){
                  //imagen de carga
                  //$("#display").html("<p align='center'><img src='ajax-loader.gif' /></p>");
            },
            error: function(){
                  alert("error petición ajax");
            },
            success: function(data){                                                    
                 // $("#display").empty();
                  //$("#display").append(data);
                  //$("#codigo").append(data);
                  //$("#display").prepend(data);      
                  $("#resultados").html(data);                                                      
            }
      });

});
</script>
