<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Gesion | Login:.</title>
<script LANGUAGE="JavaScript" SRC="Js/prototype.js"></script>

<script LANGUAGE="JavaScript" SRC="Js/formularios.js"></script>
<style type="text/css">
<!--
-->
</style>
<link href="Css/styles-acontribut.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #E4E7EC;
	margin-top: 20px;
}
a:link {
	text-decoration: none;
	color: #0099FF;
}
a:visited {
	text-decoration: none;
	color: #00CCFF;
}
a:hover {
	text-decoration: none;
	color: #0066CC;
}
a:active {
	text-decoration: none;
	color: #0099FF;
}
.input_text{
 border-radius:10px;
 text-align:center;
}
-->
</style>
<script type="text/JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<Script language="javascript">
document.onkeydown = function(e)
{
if(e)
document.onkeypress = function(){return true;}

var evt = e?e:event;
if(evt.keyCode==116)
{
if(e)
document.onkeypress = function(){return false;}
else
{
evt.keyCode = 0;
evt.returnValue = false;
}
}
}
</script>

<script src="Js/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('Images/fondos/bot-estatico-1.jpg','Images/fondos/bot-print-rollover.jpg')">
<div align="center">
<form name="form1" action="ingreso.php" method="Post" enctype="multipart/form-data">
  <table width="900" height="500" border="0" cellpadding="0" cellspacing="0" background="Images/fondos/bk-placa.jpg">
    <tr>
      <td height="40" colspan="3" align="center" valign="top"><span class="titulo-pantalla"><a name="arriba" id="arriba"></a></span>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="900" height="206">
          <param name="movie" value="images/cab.swf" />
          <param name="quality" value="high" />
          <embed src="Images/cab.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="206"></embed>
        </object>
      </td>
    </tr>
    <tr>
    	<td align="center">
    		<table width="662" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td width="637" height="50" align="center" valign="middle" ><B> <br />
                          Biblioteca</B></td>
                      </tr>
                      <tr>
                        <td height="98" align="center" valign="middle"><table width="500" border="0">
                      
                      
                          <tr>
                            <td width="234" align="right" valign="middle" class="campos">Usuario :</td>
                            <td width="256" align="left" valign="middle"><label>
                              <input type="text" name="usuario" id="usuario" size="25" class='input_text' tabindex="1"/>
                            </label></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" class="campos">Contrase&ntilde;a : </td>
                            <td align="left" valign="middle"><input type="password" name="password" id="password" size="25" class='input_text' tabindex="2"/></td>
                          </tr>
                          <tr>
                            <td height="49" colspan="2" align="center" valign="bottom" class="campos"><label>
                              <input name="Submit" type="submit" class="campos" value="Ingresar" tabindex="3"/>
                            </label></td>
                            </tr>

                        </table></td>
                      </tr>
                    </table>
		</td>
	</tr>
    <tr>
      <td height="43" colspan="3" align="center" valign="bottom"><img src="Images/fondos/bott-placa.jpg" width="900" height="74" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>