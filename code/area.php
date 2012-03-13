<html>

<head>
<title>convert</title>
</head>

<body>
<form action="area.php" method="POST">
<h1 align=center><font color=blue><ins>CONVERT AREA</ins></font></h1>
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
            <option value=1>cm2</option>
            <option value=2>m2</option>
            <option value=3>Acre</option>
            <option value=4>Feet2</option>
            <option value=5>Hectares</option>
            <option value=6>Miles2</option>
            <option value=7>Yards2</option>
            <option value=8>Ares</option>
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
 echo "window.location=('area.php');\n";
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
$fromu="cm<sup>2</sup>";$cm=1;$me=0.0001;$ac=0.000000024711;$ft=0.0010764;$he=0.00000001;$mi=0.000000000039;$ya=0.0001196;$ar=0.000001;break;
case 2:
$fromu="m<sup>2</sup>";$cm=10000;$me=1;$ac=0.00024711;$ft=10.764;$he=0.0001;$mi=0.00000039;$ya=1.196;$ar=0.01;break;
case 3:
$fromu="Acres";$cm=40468730;$me=4046.873;$ac=1;$ft=43560;$he=0.4046873;$mi=0.0015625;$ya=4840;$ar=40.46873;break;
case 4:
$fromu="Feet<sup>2</sup>";$cm=929.0304;$me=0.09290304;$ac=0.000022956806;$ft=1;$he=0.000009290304;$mi=0.00000003587;$ya=0.11111;$ar=0.00092903404;break;
case 5:
$fromu="Hectare";$cm=100000000;$me=10000;$ac=2.471054;$ft=107639.11;$he=1;$mi=0.0038610217;$ya=11959.9;$ar=100;break;
case 6:
$fromu="Miles<sup>2</sup>";$cm=2589988000;$me=2589988;$ac=640;$ft=27878400;$he=258.9988;$mi=1;$ya=3097600;$ar=25899.88;break;
case 7:
$fromu="Yards<sup>2</sup>";$cm=8361.2736;$me=0.83612736;$ac=0.000206611251;$ft=9;$he=0.000083612736;$mi=0.000000322831;$ya=1;$ar=0.0083612736;break;
case 8:
$fromu="Ares";$cm=1000000;$me=100;$ac=0.02471;$ft=1076.4;$he=0.01;$mi=0.000039;$ya=119.6;$ar=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val*$cm),"</u> CentiMeter<sup>2</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$me),"</u> Meter<sup>2</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$ac),"</u> Acre</td></tr>
 <tr align=right><td><u> ",(double)($val*$ft),"</u> Feet<sup>2</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$he),"</u> Hectare</td></tr>
 <tr align=right><td><u> ",(double)($val*$mi),"</u> Miles<sup>2</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$ya),"</u> Yards<sup>2</sup></td></tr>
 <tr align=right><td><u> ",(double)($val*$ar),"</u> Ares</td></tr></table>";
}
assign($from,$val);
}
}
?>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="right"><font size="3" color="#FF0000">vivek</a></font></h1>
</body>

</html>
