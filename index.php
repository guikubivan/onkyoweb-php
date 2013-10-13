<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Web Controller</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<meta http-equiv="Content-Style-Type" content="text/css"/>
	<meta name="viewport" content="width=320"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="base.css"/>
	<script type="text/javascript" src="addanevent.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    <script type="text/javascript" src="slider-setup.js.php"></script>
</head>

<body>


<div>
  <img src="images/onkyo_logo2.gif" width="180" height="25" />
</div>
<form method="post" action="204.php">

<table width="320" class="main_table" style="float:left">
  <tr>
    <td colspan="4" class="header_cell">SOURCE</td>
  </tr>
  <tr>
    <td><button type="submit" name="cmd" value="!1SLI23" class="source_buttons" id="sonos_button" ></button></td>
    <td colspan="2" align="center"><button type="submit" name="cmd" value="!1SLI01" class="source_buttons2" id="sky_button" ></button></td>
    <td><button type="submit" name="cmd" value="!1SLI02" class="source_buttons" id="ps3_button" ></button></td>
  </tr>
  <tr>
    <td><button type="submit" name="cmd" value="!1SLI00" class="source_buttons" id="pc_button" ></button></td>
    <td colspan="2" align="center"><button type="submit" name="cmd" value="!1SLI10" class="source_buttons2" id="oppo_button" ></button></td>
    <td><button type="submit" name="cmd" value="!1SLI27" class="source_buttons" id="network_button" ></button></td>
  </tr>
  <tr>
    <td><button type="submit" name="cmd" value="!1PWR00" class="source_buttons" id="power_button" ></button></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="header_cell">SOUND MODE</td>
  </tr>
  <tr>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD01" class="mode_buttons" >Direct</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD00" class="mode_buttons" >Stereo</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD0C" class="mode_buttons" >All Ch Stereo</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD40" class="mode_buttons" >Native</button></td>
  </tr>
  <tr>
    <td class="mode_cell"><img src="images/dolby.png" /></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD80" class="mode_buttons" >PLII Movie</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD81" class="mode_buttons" >PLII Music</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD86" class="mode_buttons" >PLII Game</button></td>
  </tr>
  <tr>
    <td class="mode_cell"><img src="images/dts.png" /></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD82" class="mode_buttons" >Neo:6 Cinema</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD83" class="mode_buttons" >Neo:6 Music</button></td>
    <td class="mode_cell"></td>
  </tr>
  <tr>
    <td class="mode_cell"><img src="images/thx.png" /></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD42" class="mode_buttons" >THX Cinema</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1LMD44" class="mode_buttons" >THX Music</button></td>
    <td class="mode_cell">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="header_cell">AUDIO INPUT</td>
  </tr>
  <tr>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1SLA00" class="mode_buttons" >Auto</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1SLA02" class="mode_buttons" >Analog</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1SLA05" class="mode_buttons" >Digital</button></td>
    <td class="mode_cell">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="header_cell">HDMI OUTPUT</td>
  </tr>
  <tr>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1HDO01" class="mode_buttons" >Main</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1HDO02" class="mode_buttons" >Sub</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1HDO04" class="mode_buttons" >Both (Main)</button></td>
    <td class="mode_cell"><button type="submit" name="cmd" value="!1HDO05" class="mode_buttons" >Both (Sub)</button></td>
  </tr>
  <tr>
    <td class="mode_cell">&nbsp;</td>
    <td class="mode_cell"><!--<button type="submit" name="cmd" value="status" class="mode_buttons" >Status</button>--></td>
    <td class="mode_cell">&nbsp;</td>
    <td class="mode_cell">&nbsp;</td>
  </tr>
</table>

<table>
  <tr>
    <td colspan="4" class="header_cell">VOLUME</td>
  </tr>
  <tr>
    <td height="40" colspan="4">
        <div class="slider" id="slider01">
            <div class="left"></div>
            <div class="right"></div>
            <img src="images/knob.png" />
        </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="volume_cell"><input name="volume" id="output1" readonly="readonly" /></td>
    <td class="volume_cell"><button type="submit" name="cmd" value="volume" class="mode_buttons" >Set</button></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>

</body>
</html>
