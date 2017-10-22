<?php
// demo.php

// include composer autoloader
require_once __DIR__ . '/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

// stem
$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$output   = $stemmer->stem($sentence);

echo $output . "\n";
$words = preg_split('/[\s]+/', $output);
foreach($words as $word){
   echo "<br/>". $word;
}
?>