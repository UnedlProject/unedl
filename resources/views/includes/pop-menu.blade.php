<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <img src="imagenes/logoparaweb.png">
            <h3>¿Quieres verificar las graficas?</h3>
     </div>
         <div class="modal-body">
            <h4>Ingresa a este sitio</h4>
            <a target="_BLANK" href="http://unedlproject.x10host.com/dash/">Click aqui</a>  
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
<style>
.modal-header{
    background-color:#1A1D56;
    color:white;
}
.modal-header img{
   align-content:center;
}
.close{
color:white;
}
.modal-body h1{
    font-weight:bolder;
}
.modal-body a{
    font-size:20px;
}
</style>

<script>
$(document).ready(function(){
$('#mostrarmodal').modal("show");
});

</script>