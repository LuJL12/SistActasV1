<!--- MENSAJES -->
<?php
if(isset($_REQUEST['b'])){ ?>
<script type='text/javascript'>
    toastr.error('Error de Login, por favor verifique sus credenciales.');
</script>
<?php } 

if(isset($_REQUEST['e'])){ ?>
<script type='text/javascript'>
    toastr.error('Entrada inválida, por favor use solo letras para el usuario y solo números para la contraseña.');
</script>
<?php } 
?>
