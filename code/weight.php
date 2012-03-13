<html>

<head>
<title>CONVERT</title>
</head>

<body>
<form action="weight.php" method="POST">
<h1 align=center><font color=blue><ins>CONVERT WEIGHT</ins></font></h1>
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
            <option value=1>mg</option>
            <option value=2>g</option>
            <option value=3>kg</option>
            <option value=4>Tonne</option>
            <option value=5>Grains</option>
            <option value=6>Ounces</option>
            <option value=7>Ponds</option>
            <option value=8>Stones</option>
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
 echo "window.location=('weight.php');\n";
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
$fromu="mg";$mg=1;$g=0.001;$kg=0.000001;$to=0.000000001;$gr=0.015432358;$ou=0.000035273966;$po=0.000002204623;$st=0.000000157473;break;
case 2:
$fromu="g";$mg=1000;$g=1;$kg=0.001;$to=0.000001;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 3:
$fromu="kg";$mg=1000000;$g=1000;$kg=1;$to=0.001;$gr=15432.358;$ou=35.273966;$po=2.204623;$st=0.157473;break;
case 4:
$fromu="Tonne";$mg=1000000000;$g=1000000;$kg=1000;$to=1;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 5:
$fromu="Grains";$mg=64.891;$g=0.064891;$kg=0.000064891;$to=0.000000064891;$gr=1;$ou=0.002285714;$po=0.000142857;$st=0.0000102041;break;
case 6:
$fromu="Ounces";$mg=28349.52;$g=28.34952;$kg=0.02834952;$to=0.00002834952;$gr=437.5;$ou=1;$po=0.0625;$st=0.004464286;break;
case 7:
$fromu="Pounds";$mg=453592.37;$g=453.59237;$kg=0.45359237;$to=0.00045359237;$gr=7000;$ou=16;$po=1;$st=0.071428571;break;
case 8:
$fromu="Stones";$mg=6350293.18;$g=6350.29318;$kg=6.35029318;$to=0.00635029318;$gr=98000;$ou=224;$po=14;$st=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val*$mg),"</u> milligram</td></tr>
 <tr align=right><td><u> ",(double)($val*$g),"</u> gram</td></tr>
 <tr align=right><td><u> ",(double)($val*$kg),"</u> kilogram</td></tr>
 <tr align=right><td><u> ",(double)($val*$to),"</u> Tonne</td></tr>
 <tr align=right><td><u> ",(double)($val*$gr),"</u> Grains</td></tr>
 <tr align=right><td><u> ",(double)($val*$ou),"</u> Ounces</td></tr>
 <tr align=right><td><u> ",(double)($val*$po),"</u> Pounds</td></tr>
 <tr align=right><td><u> ",(double)($val*$st),"</u> Stones</td></tr></table>";
}
assign($from,$val);
}
}
?>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="right"><font size="3" color="#FF0000">vivek</a></font></h1>
</body>

</html>
