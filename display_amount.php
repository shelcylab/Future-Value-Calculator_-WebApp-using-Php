<?php

//get the data from form and store in another variable
$invest_amount=  $_POST['invest_amount'];
$interest_rate=  $_POST['interest_rate'];
$years=  $_POST['years'];

//calculation
  $future_value = $invest_amount;
	
	for ($i = 1; $i  <= $years;$i ++) {
		$future_value = $future_value + ($future_value * $interest_rate / 100);
		
	}
  
$invest_amount_formatted=  "$".number_format($invest_amount, 2);
$interest_rate_formatted=  $interest_rate."%";
$future_value_formatted=  "$".number_format($future_value, 2);

?>

<!DOCTYPE html>

<html>

 <head>
  <title>Future Value Calculator</title>
  <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<div id = "content">

  <h1>Future Value Calculator</h1>
     
      <label>Investment Amount:</label>
      <span><?php echo $invest_amount_formatted; ?></span><br>

      <label>Yearly Interest Rate</label>
      <span><?php echo $interest_rate_formatted; ?></span><br>
	
	  <label>Number of Years:</label>
      <span><?php echo $years; ?></span><br>
	  
	  <label>Future Value:</label>
      <span><?php echo $future_value_formatted; ?></span><br>
	
    </div>

</body>
</html>