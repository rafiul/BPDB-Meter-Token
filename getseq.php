<?php


$string = "Successful!Your BPDBprepaid Prepaid Token is 5747-3793-9461-2547-2825,6454-3175-9018-4145-4994,0593-7879-4448-3954-0030,5797-7669-4477-5601-5947,1395-1981-4218-6916-9301,4318-9479-4522-9215-1749,1797-0809-1406-1573-2657,6458-9223-7768-2987-7750,2004-8793-5437-3254-9090,SquNo:0~8 for offline Meter No:010210696493,Vending Amt:900.0,Enrg Cost: 614.79,Total Charge:285.21,Meter Rent 1P:120,Demand Charge:126,VAT:42.86,Rebate:-3.65.";

preg_match('/(?<=SquNo:)\S+/i', $string, $match);
$seq = $match[0];
//echo $seq;

 $first_seq =  substr($seq, 0, 2);
 $get_first_seq = preg_replace("/[^0-9]/", "", $first_seq );
 $sec_seq = substr($seq, 2, 3);
 
 for ($i=$get_first_seq; $i<$sec_seq; $i++){
     echo $i;
 }
?>
