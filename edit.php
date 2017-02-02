
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>NAME:</td><td><input type="text" name="txtname" placeholder="Name"/></td>
</tr>
<tr>
<td>PHONE:</td><td><input type="text" name="txtphone" placeholder="Phoneno"/></td>
</tr>

<tr>
<td>EMAIL ID:</td><td><input type="text" name="txtemail" placeholder="emailid"/></td>
</tr>
<tr>
<td>GENTER:</td><Td>male
<input type="radio" name="genter" />fmale
<input type="radio" name="genter" /></Td>
</tr>
<tr>
<td>HOBBIES:</td><TD><INPUT TYPE="checkbox" name="txtcheck1" />listening musics</TD>
</tr>
<TR>
<td>&nbsp;</td><TD><INPUT TYPE="checkbox" name="txtcheck2" />Reading</TD>
</TR>

<TR>
<td>&nbsp;</td><TD><INPUT TYPE="checkbox" name="txtcheck3" />Browsing</TD>

</TR>
<TR>
<td>&nbsp;</td><TD><INPUT TYPE="checkbox" name="txtcheck4" />playing</TD>

</TR>
<tr>
<td>PROFILEPIC</td><TD>
<input type="text" name="proemail" placeholder="email" /></TD>
<td><input type="file" name="filephoto" />
</td>
</tr>
<tr>
<td>COUNTRY:</td><TD>
<select NAME="S1">
<OPTION>INDIA</OPTION>
<OPTION>CHINA</OPTION>
</select>
</TD>
</tr>
<TR>
<TD>&nbsp;</TD>
<TD>
<INPUT type="submit" name="subsave" value="SAVE" />
</TD>
</TR>


</table>
</form>



</body>
</html>
<?php
if(isset($_POST['subsave']))
{
	$name=$_POST['txtname'];
	$phone=$_POST['txtphone'];
	$email=$_POST['txtemail'];
	$genter=$_POST['genter'];
	
	$photo=$_FILES['filephoto'];
	$pic=$_FILES["filephoto"]["name"];
move_uploaded_file($_FILES["filephoto"]["tmp_name"],"img/".$_FILES["filephoto"]["name"]);

	$contry=$_POST['S1'];
	$ins=mysql_query("update view set name='$name',phone='$phone',email='$email',genter='$genter',profilepic='$photo',country=$country");
}
?>