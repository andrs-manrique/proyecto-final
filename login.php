<?php include('header.php'); ?>
<?php include('head.php'); ?>
<?php include('BarraNavegacion.php'); ?>								

<div id="formu">
<form name="form1" method="post" action="controladores/C_Usuario.php">
                <h3>INGRESAR</h3>
                  <div>USUARIO:</div>
	          <div><input type="text" name="cedula"  tilte="Numero de identificacion" value="1020"></div>
                  
                  <div>CONTRASEÑA:</div>
		  <div><input name="login" type="password" title="Escriba su conraseña aqui" value=""></div>
                 <span>
                     <input type="checkbox" name="1" value="1"> 
                     Recordar <a href="#">¿Olvido Contraseña?</a>
                 </span><div></div>
                  <br>
           <div align="center">
           <script language="JavaScript">function verificar(){document.form1.txtoperacion.value = 'verificar';}</script>
           <input type="submit" name="Submit" value="Entrar" onClick="verificar()" > 
           <input type='hidden' name='txtoperacion' value='des'>
              </div>         
 </form>
</div>
                                    <br>
                                    
                                    
                                    <?php include('footer.php'); ?>
                                    