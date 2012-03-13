<html>

<head>
<title>CONVERT</title>
</head>

<body>
<form action="temp.php" method="POST">
<h1 align=center><font color=blue><ins>CONVERT TEMPERATURE</ins></font></h1>
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
            <option value=1>Celcius</option>
            <option value=2>Fahrenheit</option>
            <option value=3>Kelvin</option>
</select>
</td>
</tr>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=Convert></p>

<?php
if(isset($_POST['val']))
{
$val=$_POST['val'];
if(!preg_match('/^[0-9.-]/',$val))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('temp.php');\n";
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
$fromu="Celcius";$c=1;$f=(double)(($val*9/5)+32);$k=(double)($val+273);break;
case 2:
$fromu="Fahrenheit";$c=(($val-32)*5/9);$f=1;$k=(double)((($val-32)*5/9)+273);break;
case 3:
$fromu="Kelvin";$c=(double)($val-273);$f=(double)((($val-273)*9/5)+32);$k=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",$c,"</u> Celcius</td></tr>
 <tr align=right><td><u> ",$f,"</u> Fahrenheit</td></tr>
 <tr align=right><td><u> ",$k,"</u> Kelvin</td></tr></table>";
}
assign($from,$val);
}
}
?>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="right"><font size="3" color="#FF0000">vivek</a></font></h1>
</body>

</html>
