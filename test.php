// PHP - Random Quote Generator
<?php
// This is my multidimensional array of quote elements
$quotes [] = [
  "quote" => "Great men are not born great, they grow great",
  "source" => "Mario Puzo",
  "citation"=>"-<i>The Godfather</i>",
  "year" =>"1997",  
];

$quotes [] = [
  "quote" => "Quiet people have the loudest minds",
  "source" => "Stephen Hawking",
  "citation"=>0,
  "year" =>0,    
];
$quotes [] = [
  "quote" => "Life is like riding a bicycle. To keep your balance, you must keep moving",
  "source" => "Albert Einstein",
  "citation"=>0,
  "year" =>0,  
  
];
$quotes [] = [
  "quote" => "May the Force be with you",
  "source" => "Star Wars",
  "citation"=>"Star Wars",
  "year" =>"1977",  
  
];
$quotes [] = [
  "quote" => "Don\"t let yesterday take up too much of today",
  "source" => "Will Rogers",
  "citation"=>0,
  "year" =>0 ,   
  
];

//Here is my getRandomQuote function 
function getRandomQuote($quotes){
  // this function is from php documentation of PHP rand. 
 $generation = rand(0 , 4);
  return $quotes[$generation]["quote"];
}


  // Create the printQuote funtion and name it printQuote

function printQuote($quotes){
 $random = getRandomQuote($quotes); 
  echo $random; 