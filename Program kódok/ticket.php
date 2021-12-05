<html lang="hu">
<head>
    <meta charset="UTF-8">
<title>Foglalás</title>
</head>
<body>
<table border="0" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center" bgcolor="#bf9b30">
<font size="5">
<a href="index.php">Menü</a> 
</font>
</td>
</tr>
<tr>
<td>
<form action="processticket.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>Név:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Name" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Válasszon szolgáltatást:</b></td>
        <td> <select name="Service_Type">
        <option>Kezi mosas</option>
        <option>Kezi mosas + 30 perc escort</option>
        <option>Kezi mosas + 1 óra escort</option>
        <option>Kezi mosas + 1,5 óra escort</option>
        <option>Dulexe mosas</option>
        <option>Dulexe mosas + 30 perc escort</option>
        <option>Dulexe mosas + 1 óra escort</option>
        <option>Dulexe mosas + 1,5 óra escort</option>
        <option>Atfogo mosas</option>
        <option>Atfogo mosas + 30 perc escort</option>
        <option>Atfogo mosas + 1 óra escort</option>
        <option>Atfogo mosas + 1,5 óra escort</option>
        </select></td></tr>

<tr>
<td bgcolor="#FFFFFF"><b>Autó rendszáma:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Car_Reg" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Ár:</b></td>
        <td> <select name="Price">
        <option value="20000">10 000Ft (Csak mosás)</option>
        <option value="25000" selected="selected">20 000Ft (Mosás + 30 perc escort)</option>
        <option value="30000">30 000Ft (Mosás + 1 óra escort)</option>
        <option value="3000">40 000Ft (Mosás +  1,5 óra escort)</option></select></td></tr>


				<div style="display: inline-block;">
				<tr>
					<td>
						<label for="uemail" class="label"><b> Foglalás idõpontja </b></label>
					</td>
					<td style="margin: 0; padding: 0;">
						<select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
							<option selected="selected" value="01">Január</option>
							<option value="02">Február</option>
							<option value="03">Március</option>
							<option value="04">Április</option>
							<option value="05">Május</option>
							<option value="06">Június</option>
							<option value="07">Július</option>
							<option value="08">Augusztus</option>
							<option value="09">Szeptember</option>
							<option value="10">Október</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</td>
					
						<td ><b><input type="text" id="txtDay" name="txtDay" style="width: 40px; height: 36px; margin-left:-100px;" value="DD" class="reg_fields"/></b></td>
						<td><b><input type="text" id="txtYear" name="txtYear" style="width: 60px; height: 36px; margin-left:-50px" value="YYYY" class="reg_fields"/></b></td>
					
					</tr>
				</div>
			</div>
              <tr>
             <td ><strong><b>Megjegyzés + ide írja hányas számú modellt kéri:</b></strong></td>
             <td bgcolor="#FFFFFF"><font size="4">
           <textarea cols="17" rows="4" name="Comments"></textarea>
	           </tr>

      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Foglalás véglegesítése" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
<td height="21" colspan="2" align="center" bgcolor="#bf9b30">&copy; Escort Carwash</td>
</tr>
</table>
</body>
</html>