
<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>การคำนวณอัตราแลกเปลี่ยนเงินตรา</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>
<body>
	<div class="contenner">
	<div class="box-content">
		<form action="exchange.php" method="post">
		<h3>แลกเปลี่ยนเงินตรา</h3>
		<label>จำนวนเงิน: </label> 
		<input type="text" name="amount">
		<label>  บาท</label> 
		<br>
		<label>เลือกสกุลเงิน: </label>
		<select name="currency">
				<option value="0">สกุลเงิน</option>
				<option value="1">วอน(KRW)</option>
				<option value="2">ปอนด์(GBP)</option>
				<option value="3">ดอลลาร์(USD)</option>
		</select>
		<br>
		<button class="btn" type ="submit">แปลงค่า</button>
		</form>	
		</div>	
	</div>
</body>
</html>