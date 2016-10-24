
<?php
include 'conexio_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Bicicletas - Robadas</title>
<meta name="description" content="Tienda de productos de ciclismo online. La mejor selección y el mejor servicio. Entrega en 24 horas." />
<meta name="keywords" content="Bicicletas, ropa, calzado, accesorios, complementos, recambios, electrónica." />
<meta name="robots" content="INDEX,FOLLOW" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<link rel="icon" href="skin/frontend/default/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="skin/frontend/default/default/favicon.ico" type="image/x-icon" />

<!-- CSS LIBRE -->
<link rel="stylesheet" type="text/css" href="css_libre.css" media="all" />



<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/styles3.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/base/default/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/searchautocomplete.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/ip_storeevents/css/dp_calendar.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/ip_storeevents/themes/base/jquery.ui.all.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/cmspro/css/smartmenu.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/cmspro/css/superfish.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/cmspro/css/superfish-vertical.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/cmspro/cmspro.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/gomage/advanced-navigation.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/base/default/css/cookienotice.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/ajaxscroll/ajaxscroll.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/default/default/css/print.css" media="print" />

<script type="text/javascript" src="js/prototype/prototype.js"></script>
<script type="text/javascript" src="js/lib/ccard.js"></script>
<script type="text/javascript" src="js/prototype/validation.js"></script>
<script type="text/javascript" src="js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="js/varien/js.js"></script>
<script type="text/javascript" src="js/varien/form.js"></script>
<script type="text/javascript" src="js/varien/menu.js"></script>
<script type="text/javascript" src="js/mage/translate.js"></script>
<script type="text/javascript" src="js/mage/cookies.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery_noconflict.js"></script>
<script type="text/javascript" src="js/aw_searchautocomplete/main.js"></script>
<script type="text/javascript" src="js/gomage/category-navigation.js"></script>
<script type="text/javascript" src="js/gomage/advanced-navigation.js"></script>
<script type="text/javascript" src="skin/frontend/default/default/cmspro/js/accordion.js"></script>
<script type="text/javascript" src="skin/frontend/default/default/cmspro/js/accordion_menu.js"></script>
<script type="text/javascript" src="skin/frontend/default/default/cmspro/js/hoverIntent.js"></script>
<script type="text/javascript" src="skin/frontend/default/default/cmspro/js/superfish.js"></script>
<script type="text/javascript" src="skin/frontend/default/default/cmspro/js/jquery-accordion-menu.js"></script>

<link href="rss/catalog/new/store_id/1/index.html" title="Nuevos productos" rel="alternate" type="application/rss+xml" />
<link href="cmspro/index/rss/store_id/1/index.html" title="Noticias y actividades" rel="alternate" type="application/rss+xml" />
<link href="rss/catalog/category/cid/3/store_id/1/index.html" title="Fuente RSS de Bicicletas" rel="alternate" type="application/rss+xml" />



<!-- jQuery LightBoxes -->
				
    	<!-- FancyBox -->
<script type="text/javascript" src="js/lightboxes/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/lightboxes/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/lightboxes/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="js/lightboxes/fancybox/jquery2.fancybox-1.3.4b.css" media="screen" />



	
	
    <!-- //jQuery LightBoxes -->

<style type="text/css">
	
	/* Background Color */
	.block-layered-nav .block-content{
				background:#545454;
			}
	
	/* Buttons Color */
	.block-layered-nav .block-content button.button span span{
				color:#1F5070;
				
	}
	
	/* Slider Color */	
	#narrow-by-list .gan-slider-span{
				background:#989898;
			}
	
	/* Popup Window Background */
	#gan-left-nav-main-container .filter-note-content,
	#gan-right-nav-main-container .filter-note-content,
	#narrow-by-list dd.filter-note-content{
				background:#FFFFFF;
			}
	
	/* Help Icon View */
	#gan-left-nav-main-container .filter-note-handle,
	#gan-right-nav-main-container .filter-note-handle,
	#narrow-by-list .filter-note-handle{
				color:#1F5070;
			}
</style>

<!-- VALIDACIÓN DE DATOS -->
<script>
        function validarFechaMenorActual(date){
                              
                              var fecha = date.split("-");

                              var d = new Date().toISOString().slice(0,10); 
 
                            //alert(d);

                                var fechaAct = d.split("-");


                              //var today = new Date();
                         
                              if (fecha > fechaAct){
                                error=false;
                                document.formulario.fecharobo.style.borderColor='red';

                              }else{

                              }
                                error= true;
                            }



            function validar(date){
                var error=true;
                var error1=true;
                var error2=true;
                var error3=true;
                
                // if(document.formulario.modelo.value==""){
                //     document.formulario.modelo.style.borderColor='red';
                //     error1=false;

                // }
                // if(document.formulario.numeroserie.value==""){
                //     document.formulario.numeroserie.style.borderColor='red';
                //     error2=false;
                // }
                
                if(document.formulario.fecharobo.value!=""){
                     
                        //validarFechaMenorActual(date);

                        error3 = validarFechaMenorActual(date);
                        
                }
                if(error1==true && error2==true && error3==true){
                    error=true;
                }else{error=false}
                

                return error;
            }

            function sentencia(valor,id,idgrup) { 
                        open('anuncio.php?&variable='+valor+'&id='+id+'&idgrup='+idgrup,'','top=200,left=300,width=700,height=600, Scrollbars=YES'); 
            };


    </script>





<script type="text/javascript">
<!--
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.oculto.Conocido[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='block';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->
</script>

</head>
<body>




<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="oculto">


<p>Seleccione si quiere insertar un anuncio de una bici robada o encontrada:<br />

<input type="radio" name="Conocido" value="Encontrada" id="Conocido_0" onclick="mostrarReferencia();" /> Encontrada
<input type="radio" name="Conocido" value="Robada" id="Conocido_1" onclick="mostrarReferencia();" /> Robada
</p>





		<form name=formulario action="conexio_bd.php" method="GET" onsubmit="return validar();">
			
			
			Titulo anuncio:<br/>
			<input type="text" name="anu_titulo" id="anu_titulo" size="20" maxlength="85" /><br/>

			Provincia:<br/>
			<select name="provincia" size="1">
            <option selected disabled>Selecciona</option>
            <option value='A Coruña' >A Coruña</option>
            <option value='álava'>Álava</option>
            <option value='Albacete' >Albacete</option>
            <option value='Alicante'>Alicante</option>
            <option value='Almería' >Almería</option>
            <option value='Asturias' >Asturias</option>
            <option value='ávila' >Ávila</option>
            <option value='Badajoz' >Badajoz</option>
            <option value='Barcelona'>Barcelona</option>
            <option value='Burgos' >Burgos</option>
            <option value='Cáceres' >Cáceres</option>
            <option value='Cádiz' >Cádiz</option>
            <option value='Cantabria' >Cantabria</option>
            <option value='Castellón' >Castellón</option>
            <option value='Ceuta' >Ceuta</option>
            <option value='Ciudad Real' >Ciudad Real</option>
            <option value='Córdoba' >Córdoba</option>
            <option value='Cuenca' >Cuenca</option>
            <option value='Gerona' >Gerona</option>
            <option value='Girona' >Girona</option>
            <option value='Las Palmas' >Las Palmas</option>
            <option value='Granada' >Granada</option>
            <option value='Guadalajara' >Guadalajara</option>
            <option value='Guipúzcoa' >Guipúzcoa</option>
            <option value='Huelva' >Huelva</option>
            <option value='Huesca' >Huesca</option>
            <option value='Jaén' >Jaén</option>
            <option value='La Rioja' >La Rioja</option>
            <option value='León' >León</option>
            <option value='Lleida' >Lleida</option>
            <option value='Lugo' >Lugo</option>
            <option value='Madrid' >Madrid</option>
            <option value='Malaga' >Málaga</option>
            <option value='Mallorca' >Mallorca</option>
            <option value='Melilla' >Melilla</option>
            <option value='Murcia' >Murcia</option>
            <option value='Navarra' >Navarra</option>
            <option value='Orense' >Orense</option>
            <option value='Palencia' >Palencia</option>
            <option value='Pontevedra'>Pontevedra</option>
            <option value='Salamanca'>Salamanca</option>
            <option value='Segovia' >Segovia</option>
            <option value='Sevilla' >Sevilla</option>
            <option value='Soria' >Soria</option>
            <option value='Tarragona' >Tarragona</option>
            <option value='Tenerife' >Tenerife</option>
            <option value='Teruel' >Teruel</option>
            <option value='Toledo' >Toledo</option>
            <option value='Valencia' >Valencia</option>
            <option value='Valladolid' >Valladolid</option>
            <option value='Vizcaya' >Vizcaya</option>
            <option value='Zamora' >Zamora</option>
            <option value='Zaragoza'>Zaragoza</option>
          </select>


          			<br/>Ubicación/Ciudad/Población:<br/>
			<input type="text" name="Ubicacion" id="Ubicacion" size="20" maxlength="85" /><br/>


			<br/>Marca:<br/>
			<select name="estado" id="rango">
					<option selected disabled>Seleciona</option>
					<option value="abus">Abus</option>
					<option value="aim_bike_parts">Aim Bike Parts</option>
					<option value="airshot">Airshot</option>
					<option value="alpina">Alpina</option>
					<option value="amat">Amat</option>
					<option value="bbb">BBB</option>
					<option value="bell">Bell</option>
					<option value="best">Best</option>
					<option value="bh">BH</option>
					<option value="bookman">Bookman</option>
					<option value="born">Born</option>
					<option value="brompton">Brompton</option>
					<option value="buff">Buff</option>
					<option value="carrera">Carrera</option>
					<option value="castelli">Castelli</option>
					<option value="cateye">Cateye</option>
					<option value="compex">compex</option>
					<option value="conor">Conor</option>
					<option value="continental">Continental</option>
					<option value="croozer">Croozer</option>
					<option value="cube">Cube</option>
					<option value="cycloc">Cycloc</option>
					<option value="dahon">Dahon</option>
					<option value="deda">Deda</option>
					<option value="edco">Educo</option>
					<option value="elite">Elite</option>
					<option value="endura">Endura</option>
					<option value="evoc">Evoc</option>
					<option value="fahrer">Fahrer</option>
					<option value="feedback">Feedback</option>
					<option value="ferrino">Ferrino</option>
					<option value="finn">Finn</option>
					<option value="fristbike">Fristbike</option>
					<option value="fizik">Fizik</option>
					<option value="fox">Fox</option>
					<option value="fuelbelt">Fuelbelt</option>
					<option value="galfer">Galfer</option>
					<option value="garmin">Garmin</option>
					<option value="geax">Geax</option>
					<option value="gmg">Gmg</option>
					<option value="gobik">Gobik</option>
					<option value="gopro">Gopro</option>
					<option value="gore">Gore</option>
					<option value="gt">Gt</option>
					<option value="gu">Gu</option>
					<option value="haibike">Haibike</option>
					<option value="handmade">Handmade</option>
					<option value="hebie">Hebie</option>
					<option value="hope">Hope</option>
					<option value="ism">Ism</option>
					<option value="isostar">Isostar</option>
					<option value="jerseybin">Jerseybin</option>
					<option value="kcnc">Kcnc</option>
					<option value="kenda">Kenda</option>
					<option value="klein">Klein</option>
					<option value="knog">Knog</option>
					<option value="konnix">Konnix</option>
					<option value="lapierre">Lapierre</option>
					<option value="lecoqsportif">Le coq sportif</option>
					<option value="leonardi">Leonardi</option>
					<option value="likeabike">Like a bike</option>
					<option value="limar">Limar</option>
					<option value="look">Look</option>
					<option value="mach1">Mach1</option>
					<option value="magura">Magura</option>
					<option value="massi">Massi</option>
					<option value="masterlock">Masterlock</option>
					<option value="maxxis">Maxxis</option>
					<option value="met">Met</option>
					<option value="michelin">Michelin</option>
					<option value="milan">Milan</option>
					<option value="mio">Mio</option>
					<option value="monty">Monty</option>
					<option value="niner">Niner</option>
					<option value="nutcase">Nutcase</option>
					<option value="nutribike">Nutribike</option>
					<option value="oakley">Oakley</option>
					<option value="ok">OK</option>
					<option value="onoff">Onoff</option>
					<option value="onza">Onza</option>
					<option value="orbea">Orbea</option>
					<option value="panasonic">Panasonic</option>
					<option value="peruzzo">Peruzzo</option>
					<option value="polar">Polar</option>
					<option value="powergym">PowerGym</option>
					<option value="progress">Progress</option>
					<option value="qm">QM</option>
					<option value="raceface">Race Face</option>
					<option value="rotor">Rotor</option>
					<option value="rubena">Rubena</option>
					<option value="rudd">Rudd</option>
					<option value="santini">Santini</option>
					<option value="scott">Scott</option>
					<option value="shimano">Shimano</option>
					<option value="sigma">Sigma</option>
					<option value="sks">Sks</option>
					<option value="slime">Slime</option>
					<option value="smart">Smart</option>
					<option value="sony">Sony</option>
					<option value="sportful">Sportful</option>
					<option value="swisstop">Swisstop</option>
					<option value="tactic">Tactic</option>
					<option value="tannus">Tannus</option>
					<option value="thule">Thule</option>
					<option value="tigra">Tigra</option>
					<option value="time">Time</option>
					<option value="tiptop">Tiptop</option>
					<option value="topeak">Topeak</option>
					<option value="trek">Trek</option>
					<option value="tubus">Tubus</option>
					<option value="use">Use</option>
					<option value="valerias">Valerias</option>
					<option value="veloflex">Veloflex</option>
					<option value="velox">Velox</option>
					<option value="vittoria">Vittoria</option>
					<option value="vp">Vp</option>
					<option value="weldtite">Weldtite</option>
					<option value="winora">Winora</option>
					<option value="xsocks">X-Socks</option>
					<option value="xls">XLS</option>
					<option value="yeti">Yeti</option>
					<option value="zefal">Zefal</option>
					<option value="zeroflats">Zeroflats</option>
					<option value="otramarca">Otra marca</option>
			</select>
			<br/>
			Modelo:<br/>
			<input type="text" name="modelo" id="modelo" size="20" maxlength="85" onfocus="document.formulario.modelo.style.borderColor='';"/><br/>
			Número de serie de la bici:<br/>
			<input type="text" name="numeroserie" id="numeroserie" size="20" maxlength="85" onfocus="document.formulario.numeroserie.style.borderColor='';"/><br/>
			
			Color bici:<br/>
			<input type="radio" name="color" value="blanca"/>Blanca<br/>
			<input type="radio" name="color" value="negra">Negra<br/>
			<input type="radio" name="color" value="gris"/>Gris<br/>
			<input type="radio" name="color" value="azul"/>Azúl<br/>
			<input type="radio" name="color" value="naranja"/>Naranja<br/>
			<input type="radio" name="color" value="amarilla"/>Amarilla<br/>
			<input type="radio" name="color" value="roja"/>Roja<br/>
			<input type="radio" name="color" value="verde"/>Verde<br/>
			<input type="radio" name="color" value="marron"/>Marrón<br/>
			<input type="radio" name="color" value="purpura"/>Púrpura<br/>
			<input type="radio" name="color" value="otro"/>Otro<br/>
			<br/>
			<!--//div oculto-->
			<div id="desdeotro" style="display:none;">
			Fecha del robo:<br/>
			<input type="date" name="fecharobo" onfocus="document.formulario.fecharobo.style.borderColor='';"  />
			<br/>
			Descripcion del robo:<br/>
			<textarea name="observaciones" cols="15" rows="5" onfocus="document.formulario.observaciones.style.borderColor='';"></textarea><br/>
			Antiguedad de la bici:<br/>
			<input type="text" name="numeroserie" id="numeroserie" size="10" maxlength="10"/><br/>
			Compensanción:<br/>
			<input type="number" name="numeroserie" id="numeroserie" size="10" maxlength="5"/><br/>
			Inserta una foto de la bici:
			<input name="imagen" type="file" />
			<br/>
			</div>

			<br/>
			
			<INPUT TYPE=IMAGE SRC="send.png"width="120" height="50">		
		</form>


</body>
</html>