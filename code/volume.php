<html>

<head>
<title>CONVERT</title>
</head>

<body>
<form action="volume.php" method="POST">
<h1 align=center><font color=blue><ins>CONVERT VOLUME</ins></font></h1>
<h1 align="right"><font size="3" color="#FF0000"><a href="../index.html"><ins>home</ins></a></font></h1>
<table align=center>
<tr>
<td>Enter Value </td>
<td><input type=text name=val></td>
</tr>
<tr>
<td>From</td>
<td>
<select name="from">
            <option value=0>--select--</option>
            <option value=1>cm3</option>
            <option value=2>m3</option>
            <option value=3>Feet3</option>
            <option value=4>Gallons(UK)</option>
            <option value=5>Gallons(US)</option>
            <option value=6>Inches3</option>
            <option value=7>Litres</option>
            <option value=8>Yards3</option>
</select>
</td>
</tr>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=Convert></p>

<?php
if(isset($_POST['val']))
{
$val=$_POST['val'];
if(!preg_match('/^[0-9.]/',$val))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('volume.php');\n";
 echo '</script>';
}
$from=$_POST['from'];
if($from==0)
{
echo '<script language="JavaScript">'."\n".'alert("Please select a base unit");'."\n";
echo '</script>';
}
else
{
function assign($from,$val)
{
switch ($from)
{
case 1:
$fromu="cm<sup>3</sup>";$cm=1;$me=0.000001;$ft=0.00003532;$gk=0.00022;$gs=0.000264;$in=0.061024;$li=0.001;$ya=0.000001308;break;
case 2:
$fromu="m<sup>3</sup>";$cm=1000000;$me=1;$ft=35.32;$gk=220;$gs=264;$in=61024;$li=1000;$ya=1.308;break;
case 3:
$fromu="Feet<sup>3</sup>";$cm=28317;$me=0.028317;$ft=1;$gk=6.228835;$gs=7.48052;$in=28.317;$li=28.317;$ya=0.037037;break;
case 4:
$fromu="Gallons(UK)";$cm=4546;$me=0.004546;$ft=0.160544;$gk=1;$gs=1.20095;$in=277.4194;$li=4.546;$ya=0.005946;break;
case 5:
$fromu="Gallons(US)";$cm=3785;$me=0.003785;$ft=0.133681;$gk=0.832674;$gs=1;$in=231;$li=3.785;$ya=0.004951;break;
case 6:
$fromu="Inches<sup>3</sup>";$cm=16;$me=0.000016;$ft=0.000579;$gk=0.003605;$gs=0.004329;$in=1;$li=0.016;$ya=0.000021;break;
case 7:
$fromu="Litres<sup>3</sup>";$cm=1000;$me=0.001;$ft=0.03532;$gk=0.22;$gs=0.264;$in=61.024;$li=1;$ya=0.001308;break;
case 8:
$fromu="Yards";$cm=764555;$me=0.764555;$ft=27;$gk=168.178557;$gs=201.974026;$in=46656;$li=764.555;$ya=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val*$cm),"</u> CentiMeter<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$me),"</u> Meter<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$ft),"</u> Feet<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$gk),"</u> Gallons(UK)</td></tr>
 <tr align=right><td><u> ",(double)($val*$gs),"</u> Gallons(US)</td></tr>
 <tr align=right><td><u> ",(double)($val*$in),"</u> Inches<sup>3</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$li),"</u> Litres</td></tr>
 <tr align=right><td><u> ",(double)($val*$ya),"</u> Yards<sup>3</sup></td></tr></table>";
}
assign($from,$val);
}
}
?>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="right"><font size="3" color="#FF0000">vivek</a></font></h1>
</body>

</html>
