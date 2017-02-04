<?php
  require 'vendor/autoload.php';
  use GuzzleHttp\Client;

  function placeholder($someParam)
  {
    $client = new Client([
      'base_uri' => 'http://archive-grbj-2.s3-website-us-west-1.amazonaws.com/',
      'timeout'  => 5.0,
    ]);

    # Request / or root
    $response = $client->request('GET', '/');
    $body = $response->getBody();
    
    echo $someParam;
    
    
                                                 
$articleUrl = null;
$articleDate = null;
$articleTitle = null;
$AuthorTwitterHandle = null;
$AuthorBio = null;
$AuthorURL = null;

    if (!empty($data)){
          foreach($data as $key1 => $value1){
                        foreach ($value1 as $key2 => $value2) {
                            if($key2 == 'authorName') {$author = $value2;}
                            foreach($value2['articles'] as $key3 => $value3) {
                                    foreach($value3 as $key4 => $value4) {
                                            foreach($value4 as $key5 => $value5) {
                                                
                                            if($key5 == 'articleUrl') {$articleUrl = $value5;}
                                            if($key5 == 'articleDate') {$articleDate = $value5;}
                                            if($key5 == 'articleTitle') {$articleTitle = $value5;}
                                            if($key5 == 'AuthorTwitterHandle') {$AuthorTwitterHandle = $value5;}
                                            if($key5 == 'AuthorBio') {$AuthorBio = $value5;}
                                            if($key5 == 'AuthorURL') {$AuthorURL = $value5;}
                                            

                                            }
                                    }
                                    
                                            
                      
                  }
                  
              }
              
    }
  }
    
  }

?>
