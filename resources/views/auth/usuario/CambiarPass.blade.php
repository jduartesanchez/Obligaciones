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
              <td width="700" align="center" valign="middle" class="titulo-pantalla">Cambiar Password</td>
            </tr>
            <tr>
              <td><center><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="cent.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="Js/dhtmlgoodies_calendar.js"></script>
<script language="JavaScript" src="Js/gen_validatorv4.js"
  type="text/javascript" xml:space="preserve">alert("Error al abrir gen_validator31.js");</script>
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
<br><table  border="0" cellpadding="0" cellspacing="0">
  <tr>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;documento&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;nombre&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;apellidos&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;telefono&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;email&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;usuario&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'  bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;fecha_ven&nbsp;</font></center></b></td>
<td style='padding: 3px; border-radius:5px'   bgcolor="#00007F"><b><center><font face="" color="ffffff" size="">&nbsp;Editar&nbsp;</font></center></b></td>
  </tr><tr>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">79941191</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">Julian</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">Duarte Sanchez</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1"> 7046111</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">j.duarte.sanchez@gmail.com</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">julian</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><center><font face="" size="1">2022-12-31</font></center></td>
      <td style='padding: 3px; border-radius:5px'  bgcolor="whitesmoke"><font face="" size="1"><a href="control.php?opcion=2c&idusuario_web=79941191&grabar=3" onclick="editar2()"><center><img src="Images/images/editar.png" border="0" height="27" alt="Editar"></center></a></font></td>
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