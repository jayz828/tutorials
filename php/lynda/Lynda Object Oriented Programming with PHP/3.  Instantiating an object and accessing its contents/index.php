<?php  

require 'includes/classAddress.php';

echo '<h2>Instantiating Address</h2>';

$address = new Address;

echo '<h2>Empty Address</h2>';
echo '<tt><pre>'. var_export($address, TRUE). '</pre></tt>';

echo '<h2>Setting properties....</h2>';
$address->street_address_1 = "555 Fake Street";
$address->city_name = "Townsville";
$address->subdivision_name = "State";
$address->postal_code = "12345";
$address->country_name = "United States of America";

echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Displaying Address...</h2>';

echo $address->display();

?>