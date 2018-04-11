<?php
if (isset($_POST["add"]) &&
    (!isset($_SESSION["CART"]) || !in_array($_POST["add"], $_SESSION["CART"]))
){
    $_SESSION["CART"] [] = $_POST["add"];
} elseif(isset($_POST["remove"]) &&
        ($key = array_search($_POST["remove"], $_SESSION["CART"])) !== false) {
        unset($_SESSION["CART"][$key]);
}

$pumps = array (
  'GP8002' => array (
    'img' => 'GP8002.jpg',
    'title' => '1947 Tokheim Model 39 Cut-Down',
    'desc' => 'Interesting example of a post-war Tokheim Cut Down 39 (Tall). Ad glass over the window. Texaco green and red',
    'price' => 5495
  ), 
  'GB96CSUN ' => array (
    'img' => 'GB96CSUN.jpg',
    'title' => '1938 Gilbert & Barker Model 96C Sunray',
    'desc' => 'Beautiful authentic yellow and orange paint scheme highlight this Sunray Gilbert & Barker early electric gas pump.',
    'price' => 5495
  ), 
  'W505' => array (
    'img' => 'W505.jpg',
    'title' => '1955 Wayne model 505',
    'desc' => 'This is an early muscle car pump. Beautiful correct colors. Most trim is original. New GoodYear hose and period correct nozzle.',
    'price' => 4995
  )
);

foreach ($pumps as $pid => $pump) {
    echo "<article class='pumpArticle'>";
    echo "<h3>{$pump['title']}</h3>";
    echo "<img class='pumpImg' src='resources/{$pump['img']}'>
            <div class='pumpDescription'>
                <p class='pumpDesc'>{$pump['desc']}</p>
                <p>Item # {$pid} </p>
                <p>Price {$pump['price']}</p>";
                
    echo " <form method='post' target='_self'>";
    if(isset($_SESSION["CART"]) && array_search($pid, $_SESSION["CART"]) !== false) {
        echo "<button type='submit' name='remove' value='{$pid}'>
                <p>Remove from cart</p>
            </button >";
    } else{
        echo "<button type='submit' name='add' value='{$pid}'>
                <p>Add to cart</p>
            </button >";
    }
    echo "</form>";
    echo "  </div>
        </article>";
    }