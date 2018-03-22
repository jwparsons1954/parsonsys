<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ARC - DADS Install Form v4.0</title>
</head>

<body>

<form action="array.php" method="get">

<div align="center">
	<table border="1" width="76%" align="left" cellspacing="0" cellpadding="0">
		<tr>
			<td height="1" width="734" align="left" valign="top">
			<img border="0" src="http://parsonsys.net/dads/images/arcimg.jpg" width="195" height="68" align="top"><br>
			<br>
			ARC - DADS Install Form<br>
			ARC DB: <a href="http://dads.arc-texas.com">
			http://dads.arc-texas.com</a><br>
			Login: ARC-Ecom\Your username<p>Asset Transfer form is to track 
			equipment being transferred to and from customers or vendors.<br>
<?php
	$newdate = date('m/d/y');
			$newdate = "Install Date:"." ".$newdate;
print $newdate


?>
			Region : <select name="Region">
	<option value="01" selected="selected">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Address:
			
			<div align="center">
			<table border="1" width="100%" id="table3">
				<tr>
					<td><br><select name="Employee Type">
	<option value="01" selected="selected">Employee</option>
	<option value="02">Contractor</option>
	
		</select><br>
					User First and Last Name: _______________________ <br>
					<br>
					Username:______________<br>
					<br>
					Employee # ______________________ <br>
					<br>
					Location Code (Mail Code #):______<br>
					<br>
					Cube &amp; Floor:____________/______ W E C</td>
				</tr>
			</table>
			</div>
			<table border="1" width="100%" id="table1">
								<tr>
					<td width="444">__________________OLD_________________________ <br>
					<br>
					Old DADS Prop ID (Asset Tag): 539- ____________<br>
					<br>
					Old Serial (Service Tag) #: ___________<br>
					<br>
					OLD Model 6400 or GX760 or :<br>
					<br>
&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td width="444">__________________NEW_________________________ <br>
					<br>
					New DAD Property (Asset Tag): 539-___________<br>
					<br>
					New Serial (Service Tag)#:____________<br>
					<br>
					New Dell Model E6430 or 7010:<br>
&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td width="444"><br>
					Installer Name:______________________________<br>
					<br>
					Customer sign off- Signature: ___________________<br>
					(Employee responsible for asset inventory)<p>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
							</table>
			<table border="1" width="100%" id="table2" height="102">
				<tr>
					<td align="left" valign="top">Comments</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<br /><input type="submit" />
 </form> 

<p><br>
<br>
<br>
&nbsp;</p>

</body>

</html>