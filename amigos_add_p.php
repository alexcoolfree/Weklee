<?php
//include ('./libreria/conect.php');
if($estadoUsuario == 1)
{
        // SISTEMA DE NOTIFICACIONES //
	$notif_friends=mysql_query("select count(*) as TOTAL from seguir_usuarios WHERE id_us_para=$_SESSION[idusuario] and estado='add'");
        $tot_not_friends=mysql_fetch_array($notif_friends);
        if($tot_not_friends['TOTAL'] >= 1){
	    echo '<li>
	    <a href="./add_amigos/">
	    <img src="./imagenes/ic_add_amigo.png" width="30" height="30" border="0" />
	    <div class="notif_circle">'.$tot_not_friends['TOTAL'].'</div>
	    </a>
	    </li>';
        }else{
	    echo '<li>
	    <a href="#">
	    <img src="./imagenes/ic_add_amigo_off.png" width="30" height="30" border="0" />
	    </a>
	    </li>';
        }
	// FIN DEL SISTEMA DE NOTIFICACIONES //
}else{

}
?>