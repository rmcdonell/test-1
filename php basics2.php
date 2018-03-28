<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<!--Create a function that will accept a date input and format it into mm/dd/yyyy format. -->
<? function dateformat($date)-->

{

echo date_format($date,"mm/dd/yyyy");



}
	<!-- Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates. ->
<? function dateformat($date)

{

echo date_format($date,"dd/mm/yyyy");



}
	<!--Create a function that will accept a string input. It will do the following things to the string:

	Display the number of characters in the string ->

<?php function StringLenth($str){

echo strlen($str); 

}
	?>
	<!--Trim any leading or trailing whitespace

<? function Trim($str)

{

$str = ltrim($str);

$str = rtrim($str);

echo $str;
	

}
?>
	<!--
	Display the string as all lowercase characters ->
<? function Lower$str)

{

echo strtolower($str);


	
}
?>
	<!--
	Will display whether or not the string contains "College" either upper or lowercase ->
 <? function CheckString($str){

if ($str contains 'College')

echo $str
	

}
?>
	<!-- Create a function that will accept a number and display it as a formatted number. Use 1234567890 for your testing. ->

<? function numberformat($str)

{

number_format($str, 2, '.', ',');

}
?>
	<!--Create a function that will accept a number and display it as US currency. Use 123456 for your testing. ->

<? function usformat($str){

setlocale(LC_MONETARY, 'en_US');

echo money_format('%i', $str);

}
?>
 	

	
</head>

<body>
</body>
</html>