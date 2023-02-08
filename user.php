<?php

class User {
private $status = 'unregistered';
private $rating;

public function setRating($rating) {
   
   $checked =  intval($string);

   if($checked > 10){
    $checked = 10;
   }
   $this->rating = $checked;
 }

}

public function getRating() {
    echo $this->rating;
}

class product {
    protected $price;

    public function setPrice($val) {
     
        $this->price =$val;

    }


}

public funtion getPrice() {
    echo '$' . $this->price;
}


$widget = new product ();

echo $widget->price;

$user = new user();

//echo $user->status; ///!!!
echo '<br><br>';
echo $user->showStatus();



?>