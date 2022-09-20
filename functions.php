<?php

//$date - Y-m-d format
function getShippingDate($orderDate, $oderTime) {
	$dayToday=date('l', strtotime($orderDate));
	global $cutOffTime;
	global $holidays;
	if (!in_array($dayToday, $holidays, true)) {
		// 1 If order after 10:59 AM in Friday order shiping day schdule nex Thurseday
		if ($dayToday=="Friday" &&  $oderTime>=$cutOffTime) {
			$orderDate1=date("Y-m-d",strtotime("$orderDate +6 day"));
			$orderDay1=date('l',strtotime($orderDate1));
			return "1. : Requested Date is $orderDate, Shiping Schdule Next Week $orderDate1 ,  $orderDay1";
			exit();
		}
		// 2 If order after 10:59 AM in Thursday order shiping day schdule nex  Day
		if ($dayToday=="Thursday" &&  $oderTime>=$cutOffTime) {
			$orderDate2=date("Y-m-d",strtotime("$orderDate +1 day"));
			$orderDay2=date('l',strtotime($orderDate2));
			return "2. : Requested Date is $orderDate, Shiping Schdule Next Day $orderDate2 , $orderDay2";
			exit();
		}
		// 3 If order Before 11:00 AM in Thursday and Friday order shiping same day 
		else {
			$orderDate3=date("Y-m-d",strtotime("$orderDate"));
			$orderDay3=date('l',strtotime($orderDate3));
			return "3. : Requested Date is $orderDate, Shipping Date is today $orderDate3 , $orderDay3";
			exit();
		}		
	}
	// 4 If order between Holidays then order shiping next availabel working day Like Thursday
	else{
		switch ($dayToday) {
			case ("Saturday"):
				$dayNo=5;
			  break;
			case ("Sunday"):
				$dayNo=4;
			  break;
			case ("Monday"):
				$dayNo=3;
			  break;
			case ("Tuesday"):
				$dayNo=2;
			  break;
			case ("Wednesday"):
				$dayNo=1;
				break;
		  }
		  $orderDate4=date("Y-m-d",strtotime("$orderDate +$dayNo day"));
		  $orderDay4=date('l',strtotime($orderDate4));
		  return "4. : Requested Date is $orderDate, Order Shiping Schdule Next $dayNo Number of days Dated On $orderDate4, $orderDay4 ";
		  exit();
	}
	return "Somthing Error talk to Support Team";
}

?>