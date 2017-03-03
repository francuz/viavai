<!--
Author: Francesco Amato
email: f.amato@gatech.edu
-->

<?php

include_once('simple_html_dom.php');

$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-centro-storico/";
$html = new simple_html_dom();
$html->load_file($target_url);

$doc = new DOMDocument();

// to update exisiting xml as in http://stackoverflow.com/questions/6182129/how-to-append-xml-data-to-xml-file-without-overwriting-existing-data-using-php
//$xml->formatOutput = true; 
//$doc->loadXML(file_get_contents('list.xml'));


$xml_adds = $doc->createElement("Adds");
$doc->appendChild($xml_adds);

	//$xml_title = $xml->createElement("Title");

foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-centro-storico/?p=2";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-centro-storico/?p=3";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}



	//$xml_title->appendChild($xml_price);
	//$xml_title->appendChild($xml_description);
	//$xml_title->appendChild($xml_timestamp);
	
$doc->save("./parsed_xml/centro-storico.xml");

echo "Centro Storico done";
echo "\r\n";

// **********************************
//Fine Centro storico


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-aurelio-boccea/";
$html = new simple_html_dom();
$html->load_file($target_url);

$doc = new DOMDocument();

// to update exisiting xml as in http://stackoverflow.com/questions/6182129/how-to-append-xml-data-to-xml-file-without-overwriting-existing-data-using-php
//$xml->formatOutput = true; 
//$doc->loadXML(file_get_contents('list.xml'));


$xml_adds = $doc->createElement("Adds");
$doc->appendChild($xml_adds);

	//$xml_title = $xml->createElement("Title");

foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-aurelio-boccea/?p=2";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-aurelio-boccea/?p=3";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}



	//$xml_title->appendChild($xml_price);
	//$xml_title->appendChild($xml_description);
	//$xml_title->appendChild($xml_timestamp);
	
$doc->save("./parsed_xml/aurelio-boccea.xml");

echo "Aurelio/Boccea done";
echo "\r\n";


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-balduina-montemario-trionfale/";
$html = new simple_html_dom();
$html->load_file($target_url);

$doc = new DOMDocument();

// to update exisiting xml as in http://stackoverflow.com/questions/6182129/how-to-append-xml-data-to-xml-file-without-overwriting-existing-data-using-php
//$xml->formatOutput = true; 
//$doc->loadXML(file_get_contents('list.xml'));


$xml_adds = $doc->createElement("Adds");
$doc->appendChild($xml_adds);

	//$xml_title = $xml->createElement("Title");

foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-balduina-montemario-trionfale/?p=2";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


	
$doc->save("./parsed_xml/balduina-montemario-trionfale.xml");

echo "Balduina/Montemario/Trionfale done";
echo "\r\n";




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-eur-portuense-magliana/";
$html = new simple_html_dom();
$html->load_file($target_url);

$doc = new DOMDocument();

// to update exisiting xml as in http://stackoverflow.com/questions/6182129/how-to-append-xml-data-to-xml-file-without-overwriting-existing-data-using-php
//$xml->formatOutput = true; 
//$doc->loadXML(file_get_contents('list.xml'));


$xml_adds = $doc->createElement("Adds");
$doc->appendChild($xml_adds);

	//$xml_title = $xml->createElement("Title");

foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-eur-portuense-magliana/?p=2";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


	
$doc->save("./parsed_xml/eur-portuense-magliana.xml");

echo "Eur/Portuense/Magliana done";
echo "\r\n";


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/";
$html = new simple_html_dom();
$html->load_file($target_url);

$doc = new DOMDocument();

// to update exisiting xml as in http://stackoverflow.com/questions/6182129/how-to-append-xml-data-to-xml-file-without-overwriting-existing-data-using-php
//$xml->formatOutput = true; 
//$doc->loadXML(file_get_contents('list.xml'));


$xml_adds = $doc->createElement("Adds");
$doc->appendChild($xml_adds);

	//$xml_title = $xml->createElement("Title");

foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}




$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/?p=2";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}

$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/?p=3";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/?p=4";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/?p=5";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}


$target_url = "http://www.kijiji.it/case/stanze-e-posti-letto/roma-annunci-nomentano-bologna/?p=6";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('div.item-content') as $link){
	
	$xml_add = $doc->createElement("Add");
	
	$xml_title = $doc->createElement("Title");
	$xml_title->nodeValue = strip_tags($link->children(0)->children(0)); //Title
	$xml_add->appendChild($xml_title);

	$xml_link = $doc->createElement("Link");
	$xml_link->nodeValue = $link->children(0)->href; //Link
	$xml_add->appendChild($xml_link);

	$xml_price = $doc->createElement("Price");
	$xml_price->nodeValue = strip_tags($link->children(4)); // Price
	$xml_add->appendChild($xml_price);

	$xml_description = $doc->createElement("Description");
	$xml_description->nodeValue = strip_tags($link->children(1)); // Description
	$xml_add->appendChild($xml_description);
	
	$xml_timestamp = $doc->createElement("Timestamp");
	$xml_timestamp->nodeValue = strip_tags($link->children(3)); // Timestamp
	$xml_add->appendChild($xml_timestamp);
	
	$xml_adds->appendChild($xml_add);
}

$doc->save("./parsed_xml/nomentana-bologna.xml");

echo "Nomentana/Bologna done";
echo "\r\n";



?>

