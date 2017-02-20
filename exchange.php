<?php
	$amount = $_POST["amount"];
	$currency = $_POST["currency"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

</head>
<body>
	<div class="contenner">
	
	<div class="box-content">
	<?php
		echo "จำนวนเงิน: ".$amount ." บาท";
		echo "<br>";
		if($currency == 1){
			$sum = 33;
			echo "สกุลเงินที่ต้องการเปลี่ยน วอน(KRW)";
			echo "<br>";
			echo "จำนวนเงินที่ได้: ".$amount*$sum." วอน";
		}elseif ($currency == 2) {
			$sum =0.2;
			echo "สกุลเงินที่ต้องการเปลี่ยน ปอนด์(GBP)";
			echo "<br>";
			echo "จำนวนเงินที่ได้: ".$amount*$sum." ปอนด์";
		}else{
			$sum = 0.3;
			echo "สกุลเงินที่ต้องการเปลี่ยน ดอลลาร์(USD)";
			echo "<br>";
			echo "จำนวนเงินที่ได้: ".$amount*$sum." ดอลลาร";
			
		}
		
	?>
	<br>
	<hr>
	<a href="exchangemoney.php"><button class="btn">แปลงสกุลเงินอื่น</button></a>
	</div>
	</div>
	
</body>
</html>