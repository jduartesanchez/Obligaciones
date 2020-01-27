<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <script type="text/javascript" src="Lib/jquery-ui-1.7.3.custom/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="Lib/jquery-ui-1.7.3.custom/js/jquery-ui-1.7.3.custom.min.js"></script>
    <script type="text/javascript" src="Lib/jquery-ui-1.7.3.custom/js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="Lib/jquery-ui-1.7.3.custom/alerts-1.1/jquery.alerts.js"></script>
    <script type="text/javascript" src="Lib/jquery-ui-1.7.3.custom/js/jquery.simplemodal-1.4.2.js"></script>
    <script type="text/javascript" src="Js/javascripts/widgEditor.js"></script>
    <link href="Css/widgEditor.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Lib/jquery-ui-1.7.3.custom/css/start/jquery-ui-1.7.3.custom.css" />
    <link rel="stylesheet" type="text/css" href="Lib/jquery-ui-1.7.3.custom/alerts-1.1/jquery.alerts.css" />
    <link rel="stylesheet" type="text/css" href="Lib/jquery-ui-1.7.3.custom/css/jquery.tweet.css" />
    <title>.:: ACONTRIBUT ::.</title>
    <link href="Css/styles-acontribut.css" rel="stylesheet" type="text/css" />   
    <link type="text/css" rel="stylesheet" href="Js/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
    <style type="text/css">
    <!--
    body {
      background-color: #E4E7EC;
      margin-top: 20px;
    }
    .input_text{
      border-radius:10px;
      text-align:center;
    } 
    .loader_background{
     position:fixed;
     z-index: 9;
	   width: 100%; 
	   height: 100%;
   	 background-image:url(Images/fondo_alerta.png);
	   top: 0px;
     left:0px;	
    }

   .loader
    {    
     position:fixed;
     z-index: 10;
	   width:100px;
	   height:100px;
     background-image:url(Images/ajax_loader.gif);
	   background-repeat:no-repeat;
	   top:50%;
     left:50%;
     }
     
    -->
    </style>
    <div id="mainarea"></div>
    <script type="text/javascript" src="Js/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
    <script type="text/javascript"> 
    
    function cargando_archivo()
     { //alert('ok');
     document.getElementById('mainarea').innerHTML= "<div class='loader_background'><div class='loader'></div></div>";
     }
    function finaliza_cargando_archivo()
     {  //alert('no');
    	document.getElementById('mainarea').innerHTML="";
     }
     function popup(url,ancho,alto) {
	var posicion_x; 
	var posicion_y; 
	posicion_x=(screen.width/2)-(ancho/2); 
	posicion_y=(screen.height/2)-(alto/2); 
	window.open(url,"","width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+"");
	}
      // Función para inhabilitar la tecla enter
      function disableEnterKey(e){
        var key; 
        if(window.event){
          key = window.event.keyCode; //IE
        }else{
          key = e.which; //firefox 
        }
        if(key==13){
          return false;
        }else{
          return true;
        }
      }
    </script>
    <script type="text/JavaScript">
    <!--
    function MM_swapImgRestore() { //v3.0
      var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    
    function MM_preloadImages() { //v3.0
      var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
        if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
    }
    
    function MM_findObj(n, d) { //v4.01
      var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
      if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
    }
    
    function MM_swapImage() { //v3.0
      var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
       if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
    //-->
    
    function procesar_check(idob, id, idcambio)
    { cargando_archivo();	
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&idch='+idcambio+'&grabar=4',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	});      
    }
     
    function n_a_check(idob, id, idcambio)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&idch='+idcambio+'&grabar=5',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    } 
    
    function finalizado_check(idob, id, idcambio)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&idch='+idcambio+'&grabar=6',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    }

    function check_general_pendiente(obligacion, id, grabar)
    {	cargando_archivo();
    
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+obligacion+'&Id='+id+'&grabar='+grabar+'&restaurar=4',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    }

    function check_general_en_proceso(obligacion, id, grabar)
    {	cargando_archivo();
    
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+obligacion+'&Id='+id+'&grabar='+grabar+'&restaurar=5',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    }

    function check_general_no_aplica(obligacion, id, grabar)
    {	cargando_archivo();
    
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+obligacion+'&Id='+id+'&grabar='+grabar+'&restaurar=6',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    }

    function check_general_finalizado(obligacion, id, grabar)
    {	cargando_archivo();
    
      $.ajax({
    	    type :  'GET',
    	    url  :  'Vista/checklist2.php?obligacion='+obligacion+'&Id='+id+'&grabar='+grabar+'&restaurar=7',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
    	    }
    	}); 
    }
    
    function check7_checklist(idob, id)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',               
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&grabar=7',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
            popup('control.php?opcion=32',900,700);
    	    }
    	}); 
    }
    
    function check8_checklist(idob, id)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',               
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&grabar=8',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
             popup('control.php?opcion=32',900,700);
    	    }
    	}); 
    }
    
    function check9_checklist(idob, id)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',               
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&grabar=9',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
             popup('control.php?opcion=32',900,700);
    	    }
    	}); 
    }
    
    function check10_checklist(idob, id)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',               
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&grabar=10',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
             popup('control.php?opcion=32',900,700);
    	    }
    	}); 
    }
    
    function check11_checklist(idob, id)
    {	cargando_archivo();
      $.ajax({
    	    type :  'GET',               
    	    url  :  'Vista/checklist2.php?obligacion='+idob+'&Id='+id+'&grabar=11',
    	    dataType : "html",
    	    success: function(htmlResponse)
    	    {
    	      $('#result').html(htmlResponse);
            finaliza_cargando_archivo();
             popup('control.php?opcion=32',900,700);
    	    }
    	}); 
    }
    </script>
  </head>
  <body onload="MM_preloadImages('Images/fondos/bot-estatico-1.jpg','Images/fondos/bot-print-rollover.jpg')">
    <div align="center">
      <table border="0" cellpadding="0" cellspacing="0" background="Images/fondos/bk-placa.jpg">
        <tr>
          <td height="40" colspan="3" align="center" valign="top">
            <span class="titulo-pantalla"><a name="arriba" id="arriba"></a></span>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="900" height="206">
              <param name="movie" value="Images/cab.swf" />
              <param name="quality" value="high" />
              <embed src="Images/cab.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="206"></embed>
            </object>
          </td>
        </tr>
        <tr>
          <td width="900" height="36" align="center" valign="bottom">
            <table width="690" border="0" cellspacing="0" cellpadding="0">
    		      <tr>
    		        <td><center><br><font size=3 face=arial color=#0431B4 >Bienvenido </font> Julian Duarte Sanchez <font color=red>AMBIENTE DEV-QA</font><br>	


		<!-- Begin Vista-Buttons.com -->
		<link href="Menu/baseacontribut-files/styles_6u3r2.css" type="text/css" rel="stylesheet"/>
		<ul id="vbUL_2u3r2" class="vbUL6u3r2" style="visibility:hidden;">
		<li><a title="Usuarios">Usuarios</a>
		<ul id="vbUL_zu3r2" class="vbUL6u3r2">
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=1" title="Crear">Crear</a></li>
		<li><img src="Menu/baseacontribut-files/sm4u3r2.jpg"/><a href="control.php?opcion=2" title="Buscar">Buscar</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=39" title="ActTimeManager">Act Time Manager</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=36" title="TimeManager">Time Manager</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=43" title="EditarTimeManager"> Editar Time Manager</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=44" title="EditarCostos"> Editar Costos y Tarifas Time Manager</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=37" title="Costocliente">Tarifa Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=38" title="Costousuario">Costo Usuario</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=40" title="repotimemanager">Reporte Consolidado</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=41" title="repoactfecha">Reporte Act Fecha</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=42" title="repousufecha">Reporte Usuario Fecha</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=46" title="repoauditoria">Reporte de Auditoria</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=22" title="Reasignar Datos">Reasignar Datos</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=2b" title="Crear">Cambiar Password</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=55" title="RRHH">Recursos Humanos</a></li></ul></li>
		<li><a title="Libros">Libros</a>
		<ul id="vbUL_uu3r2" class="vbUL6u3r2">
		<li><img src="Menu/baseacontribut-files/smvu3r2.jpg"/><a href="control.php?opcion=3" title="Stock">Stock</a></li>
		<li><img src="Menu/baseacontribut-files/smuu3r2.jpg"/><a href="control.php?opcion=4" title="Parametros">Parametros</a></li></ul></li>
		<li><a href="control.php?opcion=35" title="Mantenimiento">Mantenimiento</a></li>
		</ul>
		<ul id="vbUL_tu3r2" class="vbUL6u3r2" style="visibility:hidden;">
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=5" title="Crear">Crear Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=13" title="Crear">Revisi&oacute;n de Documentos</a></li>
		<li><img src="Menu/baseacontribut-files/smvu3r2.jpg"/><a href="control.php?opcion=5b" title="buscar">Buscar Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=57" title="buscar">Municipio Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=50" title="Crear">Generar Correo Interno</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=54" title="Crear">Generar Correo Interno Aud</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=51" title="Crear">Formato Correo Interno</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=52" title="Crear">Formato Comun Interno</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=49" title="Crear">Generar Correo Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=47" title="Crear">Formato Correo Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=48" title="Crear">Formato Comun Cliente</a></li>
		<li><img src="Menu/baseacontribut-files/smzu3r2.jpg"/><a href="control.php?opcion=53" title="EditarObligmail"> Seleccionar Obligaciones Correos</a></li></ul>
		<ul id="vbUL_pu3r2" class="vbUL6u3r2" style="visibility:hidden;">
		<li><img src="Menu/baseacontribut-files/smfu3r2.jpg"/><a href="control.php?opcion=10" title="Generar Obligaci&oacute;n Masivas">Asignar Obligaciones de forma masiva</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=12" title="Programar Obligacion Oc-Per-admin">Programar Obligaci&oacute;n Ocasional-Periodica-Administrable</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=17" title="Asignar dinamica">Programar Obligaci&oacute;n D&iacute;namica</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=20" title="Obligaciones Periodicas Dinamicas">Programar Obligaci&oacute;n Periodicas Din&aacute;micas</a></li>		
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=24" title="pasos checklist">Crear Pasos de Checklist</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=29" title="reagendar dinamica">Reagendar Dinamicas</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=45" title="Borrar dinamicas">Borrar Dinamicas Almacenadas</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=30" title="reagendar periodica">Reagendar Periodicas</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=25" title="mis pendientes">Mis Pendientes</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=26" title="Agendar pendientes">Agendar</a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=27" title="Editar Estado Director ">Auditoria Checklist </a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=33" title="Reporte Base check ">Reporte Financiero check</a>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=34" title="Reporte Financiero Check ">Reporte Base check </a></li>
		<li><img src="Menu/baseacontribut-files/smbu3r2.jpg"/><a href="control.php?opcion=31" title="Reporte Financiero ">Reporte Financiero </a></li>
		</ul>
		<script type="text/javascript" src="Menu/baseacontribut-files/sc6u3r2.js"></script>
		<table id="vista-buttons.com:id6u3r2" width=0 cellpadding=0 cellspacing=0 border=0><tr><td style="padding-right:0px" title ="Home">
		<a href="control.php" onMouseOver='xpe("Menu/baseacontribut-files/6u3r2o");' onMouseOut='xpe("Menu/baseacontribut-files/6u3r2n");' onMouseDown='xpe("Menu/baseacontribut-files/6u3r2c");'><img id="xpi_6u3r2" src="Menu/baseacontribut-files/bt6u3r2_0.jpg" name="vb6u3r2" width="67" height="28" border="0" alt="Home"/></a></td>
		<td style="padding-right:0px" title ="Administrador"><a onMouseOver='xpe("Menu/baseacontribut-files/2u3r2o");xpshow("2u3r2",0,this);xpsmover(this);' onMouseOut='xpsmout(this);' onMouseDown='xpe("Menu/baseacontribut-files/2u3r2c");'><img id="Menu/baseacontribut-files/xpi_2u3r2" src="Menu/baseacontribut-files/bt2u3r2_0.jpg" name="vb2u3r2" width="116" height="28" border="0" alt="Administrador"/></a></td><td style="padding-right:0px" title ="Administrador">
		<a onMouseOver='xpe("Menu/baseacontribut-files/tu3r2o");xpshow("tu3r2",0,this);xpsmover(this);' onMouseOut='xpsmout(this);' onMouseDown='xpe("Menu/baseacontribut-files/tu3r2c");'><img id="xpi_tu3r2" src="Menu/baseacontribut-files/bttu3r2_0.jpg" name="vbtu3r2" width="88" height="28" border="0" alt="Clientes"/></a></td><td style="padding-right:0px" title ="Clientes">
		<a onMouseOver='xpe("Menu/baseacontribut-files/pu3r2o");xpshow("pu3r2",0,this);xpsmover(this);' onMouseOut='xpsmout(this);' onMouseDown='xpe("Menu/baseacontribut-files/pu3r2c");'><img id="xpi_pu3r2" src="Menu/baseacontribut-files/btpu3r2_0.jpg" name="vbpu3r2" width="110" height="28" border="0" alt="Obligaciones"/></a></td><td style="padding-right:0px" title ="Obligaciones">
		<a href="control.php?opcion=23" onMouseOver='xpe("Menu/baseacontribut-files/ou3r2o");' onMouseOut='xpe("Menu/baseacontribut-files/ou3r2n");' onMouseDown='xpe("Menu/baseacontribut-files/ou3r2c");'><img id="xpi_ou3r2" src="Menu/baseacontribut-files/btou3r2_0.jpg" name="vbou3r2" width="83" height="28" border="0" alt="Informes"/></a></td><td style="padding-right:0px" title ="Informes">
		<a href="control.php?opcion=14" onMouseOver='xpe("Menu/baseacontribut-files/wu3r2o");' onMouseOut='xpe("Menu/baseacontribut-files/wu3r2n");' onMouseDown='xpe("Menu/baseacontribut-files/wu3r2c");'><img id="xpi_wu3r2" src="Menu/baseacontribut-files/btwu3r2_0.jpg" name="vbwu3r2" width="138" height="28" border="0" alt="Control Obligaciones"/></a></td><td style="padding-right:0px" title ="Control Obligaciones">
		<a href="control.php?opcion=15" onMouseOver='xpe("Menu/baseacontribut-files/4u3r2o");' onMouseOut='xpe("Menu/baseacontribut-files/4u3r2n");' onMouseDown='xpe("Menu/baseacontribut-files/4u3r2c");'><img id="xpi_4u3r2" src="Menu/baseacontribut-files/bt4u3r2_0.jpg" name="vb4u3r2" width="71" height="28" border="0" alt="Cerrar"/></a></td></tr></table>

		<!-- End Vista-Buttons.com -->
	

		</center></td>
    		      </tr>
    		    </table>
          </td>
        </tr>
        <tr>
          <td height="30" align="center" valign="middle">
    		    <table width="700" height="50" border="0" cellpadding="0" cellspacing="0" background="Images/fondos/bk-body.jpg">
              <tr>
                <td height="13" colspan="3" align="center" valign="top"><img src="Images/fondos/bk-body-top.jpg" width="700" height="13" /></td>
              </tr>
              <tr>
                <td width="700" align="center" valign="middle" class="titulo-pantalla">Costo Cliente</td>
              </tr>
              <tr>
                <td><center><head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <link href="Css/styles-acontribut.css" rel="stylesheet" type="text/css" media="screen" />   

  <script language="Javascript" src="Js/autosuggest.js"></script>

  <script type="text/javascript" src="Js/dhtmlgoodies_calendar.js"></script>

  <script language="JavaScript" src="Js/gen_validatorv4.js" type="text/javascript" xml:space="preserve">alert("Error al abrir gen_validator31.js");</script>

</head>

<script language="Javascript">

function editar(pagina) {

Ideditarquedebohacer=window.open("editarquedebohacer.php", "Busqueda", "directories=no, menubar =no,status=no,toolbar=no,location=no,scrollbars=yes,fullscreen=no,width=400,top=50")
}
</script>

<script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );
} 
</script>

<script language="Javascript">
var formatNumber = {
 separador: ".", // separador para los miles
 sepDecimal: ',', // separador para los decimales
 formatear:function (num){
  num +='';
  var splitStr = num.split('.');
  var splitLeft = splitStr[0];
  var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
  var regx = /(\d+)(\d{3})/;
  while (regx.test(splitLeft)) {
  splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
  }
  return this.simbol + splitLeft  +splitRight;
 },
 new:function(num, simbol){
  this.simbol = simbol ||'';
  return this.formatear(num);
 }
}
</script>
<center>
</center>
<br>
<br>


<form action="control.php" method="post" name="form1" id="form1">

  <center>

  <table width="700" border="0" cellpadding="0" cellspacing="0"background="Images/fondos/bk-body.jpg"> 

  <tr>

    <td colspan="4" style="border-radius:10px" width="690" align="center" valign="middle" bgcolor="#000066" class="titulo-tabla">Costos Pactados</td>          

  </tr>

  <tr>

    <td colspan="4" align="center">&nbsp;</td>

  </tr>

    <tr>

     <td class="campos">&nbsp;Cliente: </td>

        <td colspan="3">

          <select class='input_text' name="cliente">

          <option value=303248>	PAPINI BORDONI MARCO</option><option value=26743562>ABELLO DE CHENG MARIA CRSITINA (MARUJA)</option><option value=51630036>ACERO JOYA ANA YOLIMA</option><option value=79328820>ACERO JOYA FELIX EDILSON</option><option value=830024466>ACONTRIBUT SA</option><option value=860503184>ADVANTIS CONSULTOR�A GERENCIAL SA</option><option value=800216686>AEROSSUPORT</option><option value=900263715>AGREGADOS NACIONALES SAS</option><option value=900477357>AHCIET</option><option value=900556828>ALIANZA SUPERIOR SAS</option><option value=900946722>ALTO ACCESO SAS</option><option value=4035848>ALVAREZ ALVAREZ GONZALO</option><option value=39681384>ALVAREZ BOTERO ANGELA MARIA</option><option value=3545580>ALVAREZ BOTERO LILLY ANA</option><option value=32419203>�LVAREZ DE N��EZ CECILIA</option><option value=41520990>AMADOR ANDRADE PATRICIA </option><option value=70565975>ANGEL OSORNO JORGE LUIS</option><option value=52420650>ANICHIARICO GONZALEZ NATALIA </option><option value=900852712>APLICACIONES Y SUMINISTROS TEXTILES SA</option><option value=830092416>AQU�1�7 LLAMAS  LTDA</option><option value=830123189>ARACNIASTUDIO</option><option value=39150323>ARANGO DE CHENG AMPARO</option><option value=35469632>ARANGO JARAMILLO ADRIANA</option><option value=51891637>ARANGO JARAMILLO CLAUDIA</option><option value=51692606>ARANGO JARAMILLO CONSTANZA</option><option value=52862072>ARBOLEDA ESCOBAR MARIA ADELAIDA</option><option value=900241956>ARCADIA CAPITAL PARTNERS SA</option><option value=900219492>ARCADIA CAPITAL PARTNERS SA SUC COLOMBIA </option><option value=19243889>ARCINIEGAS GERMAN</option><option value=13841899>ARDILA ARENAS CARLOS HERNANDO</option><option value=53000514>ARDILA PARDO ANA ISABEL</option><option value=80136961>ARDILA PARDO CARLOS ANDRES</option><option value=17116650>ARIZA NI�0�5O EDGAR JULIO</option><option value=17148768>ARTEAGA ZULUAGA PEDRO GENTIL MARIA MARGARITA MARTINEZ</option><option value=900731773>ATIPI SAS</option><option value=900978791>ATLANTICO SOLAR SAS</option><option value=890702138>AVANTI IMPORTACIONES Y REPRESENTACIONES SAS</option><option value=45406>AZCUENAGA FLOREZ HERNANDO</option><option value=41560682>AZCUENAGA SILVA GLORIA HELENA</option><option value=17152859>AZCUENAGA SILVA LUIS HERNANDO</option><option value=900999444>AZIONE SAS</option><option value=632002996>BADER RAHPANI GABRIEL ANGEL</option><option value=900849459>BALSILLAS CORP</option><option value=52413562>BARBOSA CASTA�O ADRIANA DEL PILAR</option><option value=17137277>BARBOSA GAITAN LUIS GUILLERMO</option><option value=72001817>BARRERA IBARRA ANGEL MAURICIO</option><option value=900657897>BD GUIDANCE</option><option value=19355221>BETANCOURT ESCOBAR JUAN PABLO</option><option value=51905890>BICKENBACH GIL DORIS DOROTHEA</option><option value=51646352>BICKENBACH GIL JOHANNA FRANCISCA INES</option><option value=830044614>BIENCONCRETO SAS Antes A ESCOBAR </option><option value=900592768>BIMBINGOS SAS</option><option value=900398149>BOCHICA OIL & GAS INC SUCURSAL COLOMBIA</option><option value=22501271>BORRERO MARTELO JAQKELIN</option><option value=23812045>BOTERO DE ALVAREZ MARIA LILLY</option><option value=41411817>BOTERO DE BEAULIEU CLARA INES</option><option value=20271631>BOTERO DE DUARTE MARIA CRISTINA</option><option value=79785548>BOTERO RUBIO CAMILO</option><option value=700072517>BRAVO RAMOS DANIEL ESTEBAN</option><option value=700072519>BRAVO RAMOS MARCOS ARTURO</option><option value=19413192>BUENO CASTA�EDA  JOSE LIBARDO</option><option value=52692780>CABEZAS BURITICA MARIA HELENA</option><option value=800026992>CADALE SAS</option><option value=52999238>CAICEDO PULIDO ANA CECILIA</option><option value=1000017657>CAICEDO PULIDO FRANCISCO</option><option value=52856728>CAICEDO PULIDO PAULINA</option><option value=4831056>CAICEDO TORRES FRANCISCO FERMIN</option><option value=52801799>CALLE CAMILA</option><option value=1020826231>CAMACHO DOMINGUEZ LAURA</option><option value=1000952554>CAMACHO DOMINGUEZ SAMUEL</option><option value=80412356>CAMACHO NAVARRO JUAN MANUEL</option><option value=860038933>CARDENAS CARDENAS ABOGADOS LTDA</option><option value=830083491>CARDENAS CARDENAS ABOGADOS PROPIEDAD INTELECTUAL LTDA</option><option value=20284866>CASTILLO DE SANDOVAL CLARA CECILIA</option><option value=17168048>CASTILLO ZARATE LUIS AGUSTIN</option><option value=10026531>CASTRO FRANCO ANDRES</option><option value=79059613>CASTRO RODRIGUEZ CESAR AUGUSTO</option><option value=52008577>CASTRO VELEZ NATALIA</option><option value=39693191>CASTRO VILLEGAS MARIA DEL PILAR</option><option value=800142811>CECOLOR</option><option value=860509249>CENTRO AVENIDA DE CHILE PH</option><option value=900851019>CENTURIA CAPITAL INVESTMENTS S A</option><option value=900309035>CERRITO CAPITAL SA</option><option value=800252047>CHENG & CIA</option><option value=18002802>CHENG ABELLO CHARLES ESTEBAN</option><option value=40989745>CHENG ABELLO VANESSA</option><option value=18002507>CHENG ABELLO WILLIAM ZAGGY</option><option value=79784228>CHENG ARANGO JUAN MIGUEL</option><option value=39790408>CHENG ARANGO M�NICA</option><option value=40993202>CHENG ARANGO SUSANA</option><option value=4033960>CHENG VALERO ESTEBAN</option><option value=4033953>CHENG VALERO JAIME</option><option value=39154320>CHENG VEGA MIRIAM</option><option value=800203758>CHT COLOMBIANA LTDA - Sabaneta</option><option value=900575323>CITRINO S EN C</option><option value=900875970>CLOUDFOUR TECH SAS</option><option value=900255656>COAL & ENERGY COLOMBIA SA</option><option value=900848216>COBUCA INVESTMENT SA</option><option value=900942232>COLOMBIA NORTE SOLAR SAS</option><option value=860402746>COMERCIAL SANZEREP SAS</option><option value=900159409>COMERCIALIZADORA AGROPEC HANNA SAS</option><option value=887993>COMMERCIAL FINANCIAL CORPORATION</option><option value=900660753>COMPRAS C DE C SAS</option><option value=900255808>COMUNIDAD DE INVERSIONES GILA SAS</option><option value=900218955>CONSORCIO BURKHART LTDA</option><option value=830073427>COPRODUCCION URBANA SAS</option><option value=860022191>COPROGRESO</option><option value=80449462>CORDOBA BARRAQUER ANDRES</option><option value=19443004>C�RDOBA MALLARINO GONZALO ANTONIO</option><option value=80407903>CORDOBA MALLARINO MIGUEL</option><option value=700052234>CORDOVEZ CORDOVEZ ANA CAROLINA</option><option value=79237608>CORTES FALLA LUIS FERNANDO</option><option value=51670624>CORTES PLATA MARIA HELENA</option><option value=830080634>DAMCO COLOMBIA LTDA</option><option value=80094113>DEVIA HUGO</option><option value=19435732>DIAZ LUIS EDUARDO</option><option value=52150005>DOMINGUEZ DUARTE ANGELICA MARIA</option><option value=900233509>DOMINICA SAS</option><option value=52621318>DUARTE BOTERO ANA MARIA</option><option value=80421608>DUARTE BOTERO ANDRES</option><option value=39776698>DUARTE BOTERO MARIA CRISTINA</option><option value=900094578>Efficax Group EFX SAS</option><option value=700009241>EHRLICH MARCO</option><option value=900585546>ELIAS COLOMBIA SAS</option><option value=900784286>ES VITAL SAS</option><option value=20240744>ESCALANTE DE MALDONADO GERTRUDIS</option><option value=41667246>ESCALANTE ESTHER EMILIA</option><option value=70509535>ESCOBAR URIBE ANDRES DE JESUS</option><option value=900251413>ESTUDIO EN DEPORTE Y SALUD SA - Medellin</option><option value=79942341>FAJARDO LUNA ANDRES</option><option value=52889877>FAJARDO LUNA CATALINA </option><option value=17158632>FAJARDO VILLARRAGA ROBERTO</option><option value=80082962>FERRER PEREZ ALEJANDRO</option><option value=80504385>FERRER PEREZ ANDRES - patrimonio</option><option value=79781471>FERRER PEREZ NICOLAS</option><option value=900487688>FORESIGHT CONSULTING SAS</option><option value=79941191>Frigorifico de Pruebas</option><option value=900879594>FUJI RELIABLE TURBINE SERVICES SAS</option><option value=900916272>FULL INVESTMENTS SAS</option><option value=900717779>FUNDACION BUEN PUNTO</option><option value=55166702>GAITAN CORDOBA CARMEN HELENA</option><option value=900327831>GALGALA COLOMBIA SAS</option><option value=39774505>GARCIA CASTRO PAULA</option><option value=52991372>GAVIRIA PARRA NATALIA</option><option value=71292835>GIRALDO DANIEL</option><option value=52256427>GIRALDO LARA CAROLINA</option><option value=79789759>GIRALDO LARA JUAN JOSE</option><option value=17176212>GIRALDO SAAVEDRA JAIME</option><option value=900324692>GOLLY Y CIA SCA</option><option value=31861107>GOMEZ BARON MARIA JANETH</option><option value=1020774532>GOMEZ CASTRO JUAN SEBASTIAN</option><option value=800100876>GOMEZ CONSULTORES SAS</option><option value=41705367>GOMEZ CUERVO ADALGIZA</option><option value=19443658>GOMEZ CUERVO FERNANDO ALBERTO</option><option value=19285135>GOMEZ CUERVO JOSE GUILLERMO</option><option value=14980335>GOMEZ CUERVO JOSE WALTER ALIRIO</option><option value=41607548>GOMEZ CUERVO MARIA DEL CARMEN</option><option value=80073927>GOMEZ GUTIERREZ DIEGO JAVIER  - CU�ADO DE JOAO STEIN</option><option value=52412687>GOMEZ GUTIERREZ PAOLA ALEXANDRA</option><option value=71578122>GOMEZ JARAMILLO GABRIEL JAIME</option><option value=79152216>GOMEZ JARAMILLO JUAN CARLOS</option><option value=67012047>GOMEZ OCAMPO KATERINE</option><option value=70701>GOMEZ RAMIREZ JOSE GUILLERMO</option><option value=79346725>GOMEZ SANCHEZ GERMAN EUGENIO</option><option value=19397398>GOMEZ SANCHEZ PIO IVAN</option><option value=16713078>GOMEZ TARQUINO JOSE GUILLERMO</option><option value=31894537>GOMEZ TARQUINO LUISA FERNANDA</option><option value=700081980>GOMEZ VICTORIA JULIAN ANDRES</option><option value=19314270>GONZALEZ RUIZ JOSE</option><option value=900332869>GRUPO E3 SAS</option><option value=41652108>GUTIERREZ DIAZ LUZ MARINA esposa carlos monata�a</option><option value=41376195>GUTIERREZ TOVAR PAULINA</option><option value=79363631>HERNANDEZ MENDOZA JUAN PABLO - ESPOSO PATRICIA SALGAR</option><option value=901024840>HOLOMEDICAL CENTER SAS</option><option value=20168217>HURTADO DE SALGAR INES</option><option value=79780119>IBANEZ LIZARDO PABLO ANDRES</option><option value=22411122>IBARRA DIAZ NUBIA ESTHER</option><option value=800251674>IMPORTAD Y COMERCI CHENG SAS - San Andres</option><option value=830071328>INMOBILIARIA ROBERTO ESCALLON</option><option value=900868279>INMOCAPITAL SAS</option><option value=900083133>INNOVISION LTDA</option><option value=900417671>INPRESC</option><option value=830081213>INSTITUTO DE EMPRESA SUC COLOMBIA</option><option value=900507304>INTERFLOOR COLOMBIA SAS</option><option value=900525785>INVERSANCOL SAS</option><option value=900436849>INVERSIONES DALUCA SAS</option><option value=900563174>INVERSIONES FALUN SAS</option><option value=830508572>INVERSIONES GENERACION & CIA S E C</option><option value=900045955>INVERSIONES LAS ISLAS SA</option><option value=900097819>INVERSIONES LEART SAS</option><option value=900359722>INVERSIONES MONKEY SAS</option><option value=900583356>INVERSIONES PCF SAS</option><option value=900177164>INVERSIONES SAARA SAS</option><option value=900511721>INVERSIONES SAMAPI COLOMBIA SAS</option><option value=830018092>INVERSIONES SH LTDA</option><option value=811035608>INVERSIONES TELECOMUNICACIONES LTDA</option><option value=830122643>INVERSUMA INC</option><option value=900583890>INVESTIGACION DE MERCADOS INV SAS</option><option value=52709887>ISAACS NORIEGA MARIA JOSE</option><option value=80410552>JAECKEL KOVAES JORGE BERNARDO</option><option value=900067144>JAECKEL MONTOYA ABOGADOS LTDA </option><option value=20187285>JARAMILLO DE ARANGO LIGIA</option><option value=80183659>JIMENEZ SANTOFIMIO CAMILO ANDR�S</option><option value=80195363>JIMENEZ SANTOFIMIO DANIEL FELIPE</option><option value=87030554807>JIMENEZ SANTOFIMIO LUIS ALEJANDRO</option><option value=900457313>JMBC INVESTMENTS LLC</option><option value=600035527>JOAO STEIN</option><option value=900716759>JPH SAS</option><option value=900986927>JULISA SAS</option><option value=830069786>KARIJOSE Y COMPANIA S C A EN LIQUIDACION</option><option value=900585997>KUKLI COLOMBIA SAS</option><option value=900977857>LA GUAJIRA SOLAR SAS</option><option value=41500380>LARA DE GIRALDO PIEDAD SOCORRO</option><option value=800222401>LITHOIL ENERGY SUCURSAL COLOMBIA</option><option value=900666654>LIVEVOX COLOMBIA SAS</option><option value=52619130>LLERAS ACOSTA MARIA DEL ROSARIO</option><option value=79297919>LLOREDA SALGADO MAURICIO</option><option value=70115344>LONDO�O ALVAREZ FRANCISCO FABIAN</option><option value=17059083>LONDO�O JARAMILLO JAIME</option><option value=1072649343>LONDO�O MARTINEZ ALICIA</option><option value=52697454>LONDO�O MARTINEZ SUSANA</option><option value=860507555>LONDO�O MARTINEZ Y CIA S EN C EN LIQ</option><option value=38865758>LOPEZ SOLANO PATRICIA</option><option value=41696495>LOPEZ VAN MEEK MARIA CLARA</option><option value=830085963>LOYALTY LTDA</option><option value=21066876>LOZANO OSORIO GRACIELA</option><option value=900425707>LUNGI SAS</option><option value=900114349>M&R TURNAROUND INVESTMENTS SAS</option><option value=8711305>MAESTRE CASTRO HERNAN RAUL</option><option value=900977813>MAGDALENA SOLAR SAS</option><option value=632010811>MAGO VICETELLI ARMANDA </option><option value=39688663>MALDONADO ESCALANTE CAMILA</option><option value=80411321>MALDONADO ESCALANTE DIEGO</option><option value=2903051>MALDONADO GOMEZ DARIO</option><option value=860509024>MARIA CLARA LOPEZ Y CIA</option><option value=900301326>MARON CONSULTORIA SAS</option><option value=79144050>MARTINEZ ZULETA ALONSO JOSE ISMAEL</option><option value=51712530>MARTINEZ ZULETA CLAUDIA</option><option value=41598282>MARTINEZ ZULETA MARIA MARGARITA</option><option value=900673897>MASTER PLASTER SAS</option><option value=900364090>MBA LAZARD COLOMBIA SAS</option><option value=1015408256>MEJIA BORRERO MIGUEL ANTONIO</option><option value=32728746>MEJIA GOMEZ LINA MARIA</option><option value=2033149>MEJIA OTERO MARIO</option><option value=900713359>MG SPRING BUILDING</option><option value=900432794>MINING CAPITAL RESOURCES</option><option value=800127006>MIT HARWARD CLUB</option><option value=79313645>MOLANO LOPEZ MARIO ROBERTO </option><option value=900911419>MONICA CHENG SAS</option><option value=900138109>MONKEY CORP</option><option value=79268337>MONTA�A MORENO CARLOS ALBERTO</option><option value=39690277>MONTOYA DEL CORRAL CLAUDIA</option><option value=39774915>MONTOYA DEL CORRAL GENOVEVA</option><option value=30326289>MONTOYA NARANJO CLAUDIA MARCELA</option><option value=51811542>MUGICA ESCOBAR MARTHA EMILIA</option><option value=80411845>NAVARRETE NAVARRETE FABIO CAMILO</option><option value=700025773>NAVARRO BUJAIDAR ALBERTO</option><option value=91266323>NAVAS CARDOZO CARLOS</option><option value=80421565>NAVAS GONZALEZ MANUEL</option><option value=900248490>NEOGAS COLOMBIA</option><option value=800087611>NOGAL ASESORIAS FINANCIERAS SAS</option><option value=41604859>NORBY TATIANA AVILA SANCHEZ</option><option value=900774082>NOVOPAN COLOMBIA SAS</option><option value=79485210>NU�EZ ALVAREZ CARLOS ANDRES</option><option value=39773143>NU�EZ ALVAREZ MONICA CECILIA</option><option value=17027777>NU�EZ LAPEIRA FRANCISCO DE PAULA</option><option value=900473857>ODACO GROUP SAS</option><option value=900140918>OPTIMAL SOLUTIONS CONSULTING LTDA</option><option value=52415423>ORTEGA OVALLE MARIA XIMENA(ESPOSA ANDRES FAJARDO)</option><option value=26548339>ORTIZ CALDERON IRENE</option><option value=680980681>ORZECHOWSKI STEPHAN SAMUEL</option><option value=51556212>OSPINA LARA ADRIANA</option><option value=42868365>OSPINA MARIN OMAIRA</option><option value=4566000>OSPINA VILLA FRANCISCO JAVIER</option><option value=1020726845>OTALORA LOZANO GUILLERMO</option><option value=52993472>OTALORA LOZANO MARIA JOSE</option><option value=860535126>PACHON UJUETA Y CIA S EN C S</option><option value=900069717>PAITILLA INTERNATIONAL ADVISORY SERVICES</option><option value=632008277>PAPINI MARCO</option><option value=37830575>PARDO DE ARDILA MARITZA </option><option value=1020775246>PAREJA ESCALANTE LAURA</option><option value=1075658724>PAREJA ESCALANTE NICOLAS</option><option value=900555433>PCM COLOMBIA SAS</option><option value=19145125>PEREZ ARCINIEGAS GONZALO</option><option value=49795121>PEREZ BETANCUR ANA LUCIA</option><option value=1020717205>PEREZ MORA MARIA DE JESUS</option><option value=700009556>PEREZ SANCHEZ CARLOS ARNALDO</option><option value=900412354>PIENSSA SAS</option><option value=42898242>PIZANO FRANCO LINA MARIA</option><option value=900205547>POCH COLOMBIA SA</option><option value=800026729>POLITECNICO INDOAMERICANO</option><option value=900607829>POMES SAS</option><option value=700082987>PRIMAVERA MARCO</option><option value=800163422>PROLAN INFORMATICA SAS</option><option value=901039238>PROSPERIDAD 2080 SAS</option><option value=830051455>PROTEKTO LTDA</option><option value=93118765>PULIDO CHARRY JOSE ALBERTO</option><option value=41747018>PULIDO CHARRY MARTHA EUGENIA</option><option value=20083588>PULIDO DE MONTEJO SOFIA</option><option value=51874520>PULIDO IRMA</option><option value=79848>PULIDO JOSE ALBERTO</option><option value=830030493>PUNTO CELULAR LTDA EN LIQUIDACION</option><option value=900457603>QUADRAS SAS</option><option value=900702468>QUANTITAS SAS</option><option value=900300944>QUE VACACIONES COM SAS</option><option value=900716854>QUEVEDO CORPORATION</option><option value=900061274>QUEVEDO CORPORATION Y CIA S EN C S</option><option value=80127044>RAISBECK LOPEZ DANIEL SEAN </option><option value=900400567>RAISBECK OSMAN & CASTRO SAS</option><option value=80093309>RAMIREZ GOMEZ FERNANDO</option><option value=13359928>RAMIREZ NAVARRO JAVIER</option><option value=52329653>RAMIREZ OSPINA MARIA LEONOR                         </option><option value=1018472002>RAMIREZ SABASTIAN</option><option value=52580007>RESTREPO CORREA VERONICA</option><option value=900405342>RISK SOLUTIONS SERVICES SAS</option><option value=80412576>RODRIGUEZ BENAVIDEZ GUSTAVO ADOLFO</option><option value=80408958>RODRIGUEZ BENAVIDEZ JUAN CARLOS</option><option value=20132445>RODRIGUEZ DE VARGAS MARIA CONSUELO</option><option value=51822363>RODRIGUEZ LINARES LUZ MERY</option><option value=700019044>RODRIGUEZ NOVOA JUAN CARLOS</option><option value=7508627>RODRIGUEZ OSORIO RAMIRO - HANNA</option><option value=39791619>ROJAS ECHEVERRY SANDRA MARCELA</option><option value=16676902>ROMERO JARAMILLO EDUARDO</option><option value=79483875>ROMERO LEON HECTOR JOSE</option><option value=20204066>RUBIO DE BOTERO MYRIAM DEL CARMEN</option><option value=80850953>RUEDA AZCUENAGA JORGE</option><option value=80088406>RUEDA AZCUENAGA JUAN CARLOS</option><option value=52968882>RUEDA AZCUENAGA MARIA LUCIA</option><option value=1020765843>RUEDA SAENZ ALEJANDRO</option><option value=79146640>RUEDA SAENZ RICARDO</option><option value=79233249>RUIZ VELEZ FERNANDO AUGUSTO</option><option value=19357785>SALAMANCA CORTES JORGE ERNESTO</option><option value=19076361>SALAMANCA CORTES PABLO ENRRIQUE</option><option value=19273854>SALAMANCA CORTES PEDRO RUBEN</option><option value=19235597>SALAMANCA GUILLERMO</option><option value=51941602>SALAMANCA MONROY DIANA MARIA</option><option value=51633730>SALAMANCA SANZ  DE S ROSARIO</option><option value=1020763136>SALGADO ARANGO NICOLAS (HIJO GERMAN SALGADO)</option><option value=700116908>SALGADO ARANGO VALENTINA</option><option value=19306991>SALGADO VERGARA GERMAN</option><option value=80418438>SALGAR HURTADO JOSE MAURICIO</option><option value=52622222>SALGAR HURTADO PATRICIA INES</option><option value=900187828>SAMALLO SCA</option><option value=700104429>SANCHEZ BROSSARD RAFAEL ANDRES</option><option value=80504494>SANDOVAL CASTILLO HECTOR MANUEL</option><option value=17020119>SANDOVAL GUAQUETA HECTOR MANUEL</option><option value=41663833>SANTAMARIA DE ARCINIEGAS BEATRIZ</option><option value=900369186>SANTANA CONSULTORIA EMPRESARIAL SAS</option><option value=28711421>SANTOFIMIO PENON LUZ ALBA</option><option value=41683473>SANZ DE SANTAMARIA CARMEN</option><option value=20752838>SANZ DE SANTAMARIA DE AZCUENAGA ROSARIO</option><option value=39683812>SANZ GALINDO GLORIA ANA MARIA MONICA</option><option value=39790744>SARMIENTO DIANA</option><option value=79939602>SARMIENTO LUIS MIGUEL</option><option value=63366054>SARMIENTO VILLAMIZAR LUZ HELENA</option><option value=900027049>SERAMBIENTE SAS</option><option value=79332234>SERRANO MENDEZ MARIO GUILLERMO</option><option value=51921015>SILVA AGUDELO MARIA CLEMENCIA</option><option value=900572452>SOLOPULPAS</option><option value=901036601>SS CONSULTORES SAS</option><option value=900114653>STEIN & CIA SAS</option><option value=22475495>SUAREZ SUAREZ MARILYN DE JESUS</option><option value=22475045>SUAREZ SUAREZ RAQUEL PATRICIA</option><option value=830082765>SUMATORIA SAS</option><option value=700019046>TANGASSI PEREZ ANTONIO HORACIO</option><option value=900395367>TARPAN SAS</option><option value=900135026>TECTONA SAS</option><option value=52454998>TOBAR GOMEZ CATALINA</option><option value=79440154>TORO JUNGUITO CAMILO</option><option value=830508753>TRAVEL GUARD AMERICAS LLC SUC COLOMBIA</option><option value=900834939>TWILIO COLOMBIA SAS</option><option value=51551247>URDANETA GUTIERREZ ISABEL CRISTINA</option><option value=30328977>URIBE PEREZ PATRICIA HELENA</option><option value=79281147>URRUTIA ESCOBAR PABLO ANTONIO IGNACIO LAZARO</option><option value=19427622>UTRIA ARCINIEGAS ANTONIO</option><option value=900875295>VACHARCHENG SAS</option><option value=700055556>VALENZUELA CHENG SANTIAGO</option><option value=52515309>VARGAS LAVERDE JENNYFFER</option><option value=79144860>VARGAS RODRIGUEZ EDMUNDO</option><option value=79141624>VARGAS RODRIGUEZ FERNANDO</option><option value=1020751963>VARGAS URDANETA ANDRES FERNANDO</option><option value=1020727395>VARGAS URDANETA CAROLINA</option><option value=900075031>VENTISQUERO EU - Mosquera</option><option value=700092803>VERNON GREEG</option><option value=900832111>VIABILIDAD SOSTENIBLE SAS</option><option value=29185885>VICTORIA POTES  ALBA LUCIA</option><option value=700099944>VINUALES CERDAN DAVID PEDRO</option><option value=51955165>VIZCAINO CALDERON SANDRA CARMENZA - esp gustavo rdriguez</option><option value=31210439>WANCIER KARFINKEL FANNY</option><option value=17079338>WANCIER KARFINKEL JAIME GEDALA</option><option value=17046294>WANCIER KARFINKEL ZISALO</option><option value=79521904>YANOVICH WANCIER DAVID</option><option value=19384944>ZULETA LLERAS FELIPE</option>
          </select>

        </td>

  </tr>

    <tr>

    <td colspan="4" align="center">&nbsp;</td>

  </tr>

  

  

  

    <tr>

    <td class="campos">&nbsp;VP Junior:</td>

    <td><input type="text" id="junior" name="junior" maxlength="10" class='input_text'></td>

    <td class="campos">&nbsp;VP Senior: </td>

    <td><input type="text" id="senior" name="senior" maxlength="10" class='input_text'></td>

  </tr>

  <tr>

    <td colspan="4" align="center">&nbsp;</td>

  </tr>

  <tr>

    <td class="campos">VP Director:</td>

    <td> <input type="text" id="director" name="director" maxlength="10" class='input_text'></td>

    <td class="campos">VP Socio:</td>

    <td> <input type="text" id="socio" name="socio" maxlength="10" class='input_text'></td>

  </tr>

  <tr>

    <td colspan="4" align="center">&nbsp;</td>

  </tr>

  <tr>

    <td class="campos">Horas Pactadas:</td>

    <td> <input type="text" id="horas" name="horas" maxlength="10" class='input_text'></td>

    <td class="campos">Valor Total Pactado:</td>

    <td> <input type="text" id="total" name="total" maxlength="10" class='input_text'></td>

 </tr>

    <tr>

    <td colspan="4" align="center">&nbsp;</td>

  </tr>

  <tr>

    <input type="hidden" name="grabar" value="1">

    <input type="hidden" name="opcion" value="37">

    <td colspan="5" align="center"><input type="submit" value="Guardar" name="enviar"></td>

  </tr>

  </table>

  <br><br>

</form>



<script language="JavaScript" type="text/javascript">

//You should create the validator only after the definition of the HTML form

  var frmvalidator  = new Validator("form1");

 

  frmvalidator.addValidation("junior","req","Falta valor del auditor junior");

  frmvalidator.addValidation("senior","req","Falta valor del auditor senior");

  frmvalidator.addValidation("horas","req","Falta colocar el numero de horas pactadas");

  frmvalidator.addValidation("total","req","Falta colocar el valor total de la tarifa");

 

</script>



<table border="0" cellpadding="0" cellspacing="0">
	<tr>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;ID&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;cliente&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;Nombre&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;VP_Junior&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;VP_Senior&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;VP_Director&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;VP_Socio&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;Horas&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;Total&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;Fecha&nbsp;</font></center></b></td>
<td style='padding: 3px; padding: 3px; border-radius:5px' bgcolor="#00007F"><b><center><font face="" color="ffffff" size="1">&nbsp;Borrar&nbsp;</font></center></b></td>
	</tr><tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">7</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">860503184</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">ADVANTIS CONSULTOR�A GERENCIAL SA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">19636988</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">14091936</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">3543830</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">625382</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">909</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">37898136</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 12:50:25</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=7&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">8</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">830092416</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">AQU�1�7 LLAMAS  LTDA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">22376838</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">13148783</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">3920728</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">717206</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">840</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">40163555</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 12:52:20</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=8&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">9</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900263715</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">AGREGADOS NACIONALES SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">22316246</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">13598222</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">3979967</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">710708</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">857</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">40605143</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 12:56:11</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=9&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">10</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900657897</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">BD GUIDANCE</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">13267800</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">7371000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1738800</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">302400</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">600</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">22680000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 12:58:34</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=10&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">11</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">830044614</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">BIENCONCRETO SAS Antes A ESCOBAR </font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">4647602</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2497691</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">252931</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">63233</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">236</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">7461457</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 13:07:40</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=11&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">12</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">860509249</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">CENTRO AVENIDA DE CHILE PH</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">24845687</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">16097205</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">5890644</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1166464</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">823</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">48000000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 13:37:54</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=12&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">13</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900309035</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">CERRITO CAPITAL SA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">9710400</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">5812800</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">940800</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">336000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">500</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">16800000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 13:40:03</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=13&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">14</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">800142811</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">CECOLOR</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">31145366</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">20419512</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2647805</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">987317</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1230</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">55200000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 13:43:46</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=14&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">15</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900585546</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">ELIAS COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">5081845</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2025096</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">1031653</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">267466</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">220</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">8406060</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 13:46:38</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=15&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">16</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900327831</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">GALGALA COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">4667313</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2074362</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">311154</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">138291</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">208</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">7191120</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 14:18:02</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=16&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">17</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900324692</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">GOLLY Y CIA SCA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">4413160</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">1530370</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">355900</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">106770</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">180</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">6406200</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 14:23:10</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=17&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">18</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">800251674</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">IMPORTAD Y COMERCI CHENG SAS - San Andres</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">8643343</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">3961532</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">960372</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">240093</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">345</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">13805340</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 14:28:21</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=18&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">19</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">830071328</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">INMOBILIARIA ROBERTO ESCALLON</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">9838059</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">5486610</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">1021645</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">378386</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">442</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">16724700</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 15:49:45</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=19&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">20</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900563174</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">INVERSIONES FALUN SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">5666484</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2182124</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">492738</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">105586</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">240</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">8446932</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 15:56:06</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=20&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">21</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900585997</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">KUKLI COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">5258833</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2232167</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">1210667</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">378333</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">240</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">9080000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 15:58:00</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=21&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">22</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">800222401</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">LITHOIL ENERGY SUCURSAL COLOMBIA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">3933333</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1533333</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">466667</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">66667</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">90</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">6000000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 17:02:46</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=22&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">23</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900673897</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">MASTER PLASTER SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">7309392</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2834254</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">507182</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">149172</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">362</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">10800000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 19:24:13</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=23&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">24</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900364090</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">MBA LAZARD COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">22781726</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">13401015</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2747208</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">670051</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">591</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">39600000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 19:25:46</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=24&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">25</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900248490</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">NEOGAS COLOMBIA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">14490000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">10152857</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2070000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">887143</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">560</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">27600000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 19:30:05</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=25&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">26</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">800087611</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">NOGAL ASESORIAS FINANCIERAS SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">8731924</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">5712474</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1060888</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">408034</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">390</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">15913320</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 19:32:29</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=26&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">27</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">860535126</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">PACHON UJUETA Y CIA S EN C S</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">6749955</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">3095283</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">447512</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">149170</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">280</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">10441920</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 19:37:28</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=27&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">28</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900555433</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">PCM COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">9818182</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">5454545</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1309091</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">218182</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">385</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">16800000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 19:48:40</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=28&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">29</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">800026729</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">POLITECNICO INDOAMERICANO</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">7294118</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">3058824</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">1411765</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">235293</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">153</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">12000000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 19:51:58</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=29&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">30</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900027049</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">SERAMBIENTE SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">12907759</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">4788362</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1332414</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">291465</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">464</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">19320000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 19:54:51</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=30&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">31</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900114653</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">STEIN & CIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">24060690</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">8620169</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2036633</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">473636</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">743</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">35191128</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 19:57:41</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=31&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">32</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">830508753</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">TRAVEL GUARD AMERICAS LLC SUC COLOMBIA</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">7381640</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2324926</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">464985</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">174369</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">178</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">10345920</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 19:59:29</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=32&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">33</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">900834939</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">TWILIO COLOMBIA SAS</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">18168750</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">9263672</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2450390</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">717188</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">512</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">30600000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><center><font face="" size="1">2017-01-16 20:02:07</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=37&ID=33&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">34</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">900075031</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">VENTISQUERO EU - Mosquera</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">9739645</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">4930442</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">1616538</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">525375</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">416</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">16812000</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><center><font face="" size="1">2017-01-16 20:09:29</font></center></td>
		<td style='padding: 3px; border-radius:5px' bgcolor="D6D6D6"><font face="" size="1"><a href="control.php?opcion=37&ID=34&grabar=4" onclick="borrar()"><center><img src="Images/images/borrar.png" border="0" height="27" alt="Borrar"></center></a></font></td>
	</tr>
</table>

</center></td>
              </tr>
              <tr>
                <td height="15"  align="center" valign="middle"><img src="Images/fondos/bk-body-bott.jpg" height="15" /></td>
              </tr>
            </table>       
          </td>
        </tr>
        <tr>
          <td height="43" colspan="3" align="center" valign="bottom"><img src="Images/fondos/bott-placa.jpg"  /></td>
        </tr>
      </table>
    </div>
  </body>
  </html>
