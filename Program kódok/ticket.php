<html lang="hu">
<head>
    <meta charset="UTF-8">
<title>Foglal�s</title>
</head>
<body>
<table border="0" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center" bgcolor="#bf9b30">
<font size="5">
<a href="index.php">Men�</a> 
</font>
</td>
</tr>
<tr>
<td>
<form action="processticket.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>N�v:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Name" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>V�lasszon szolg�ltat�st:</b></td>
        <td> <select name="Service_Type">
        <option>Kezi mosas</option>
        <option>Kezi mosas + 30 perc escort</option>
        <option>Kezi mosas + 1 �ra escort</option>
        <option>Kezi mosas + 1,5 �ra escort</option>
        <option>Dulexe mosas</option>
        <option>Dulexe mosas + 30 perc escort</option>
        <option>Dulexe mosas + 1 �ra escort</option>
        <option>Dulexe mosas + 1,5 �ra escort</option>
        <option>Atfogo mosas</option>
        <option>Atfogo mosas + 30 perc escort</option>
        <option>Atfogo mosas + 1 �ra escort</option>
        <option>Atfogo mosas + 1,5 �ra escort</option>
        </select></td></tr>

<tr>
<td bgcolor="#FFFFFF"><b>Aut� rendsz�ma:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Car_Reg" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>�r:</b></td>
        <td> <select name="Price">
        <option value="20000">10 000Ft (Csak mos�s)</option>
        <option value="25000" selected="selected">20 000Ft (Mos�s + 30 perc escort)</option>
        <option value="30000">30 000Ft (Mos�s + 1 �ra escort)</option>
        <option value="3000">40 000Ft (Mos�s +  1,5 �ra escort)</option></select></td></tr>


				<div style="display: inline-block;">
				<tr>
					<td>
						<label for="uemail" class="label"><b> Foglal�s id�pontja </b></label>
					</td>
					<td style="margin: 0; padding: 0;">
						<select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
							<option selected="selected" value="01">Janu�r</option>
							<option value="02">Febru�r</option>
							<option value="03">M�rcius</option>
							<option value="04">�prilis</option>
							<option value="05">M�jus</option>
							<option value="06">J�nius</option>
							<option value="07">J�lius</option>
							<option value="08">Augusztus</option>
							<option value="09">Szeptember</option>
							<option value="10">Okt�ber</option>
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
             <td ><strong><b>Megjegyz�s + ide �rja h�nyas sz�m� modellt k�ri:</b></strong></td>
             <td bgcolor="#FFFFFF"><font size="4">
           <textarea cols="17" rows="4" name="Comments"></textarea>
	           </tr>

      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Foglal�s v�gleges�t�se" /></td>
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