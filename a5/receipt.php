<?php
    session_start();
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
$name = $email = $phone = $address = "";
$name = validate_input($_POST["name"]);
$email = validate_input($_POST["email"]);
$phone = validate_input($_POST["phone"]);
$address = validate_input($_POST["address"]);
  
function validate_input($data) {
  $data = trim($data);
  return $data;
}
$error = false;
if (empty($name) || empty($email) || empty($phone) || empty($address) ) {
    $error = true;
}else{
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
}
$purchasedItems = "";
foreach($_SESSION['CART'] as $key => $value){
    $purchasedItems .= $value . "\t";    
}

function updateData($items){
    echo $purchasedItems;
    $userOrder = array($_SESSION['name'],$_SESSION['email'],$_SESSION['phone'],$_SESSION['address'],$items);
    if(file_exists("orders.tsv")){
        $dataFile = fopen("orders.tsv","a");
    }else{
        $dataFile = fopen("orders.tsv","w");
    }
    fputcsv($dataFile,$userOrder,"\t");
    fclose($dataFile);
}
if ($error) {
  header('Location: '.$_SERVER['HTTP_REFERER']);
} else {
  updateData($purchasedItems);
    }
?>
<!DOCTYPE html>
<html>
    <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky|Graduate|Lobster+Two|Oregano" rel="stylesheet">
    <style type="text/css">
        h1 {
            font-family: 'Fontdiner Swanky', cursive;
            padding: 10px;
            text-align:center;
            font-size:40px;
        }
        h2{
            text-align:center;
        }
        body {
            font-family:'Oregano', cursive;
            padding:40px;
            margin:0px;
            margin: auto;
            max-width: 800px;
            min-width: 600px;
            background-position: center;
        }
        #receiptHeader{
            float: right;
            text-align: right;
        }
        #items{
            font-size: 25px;
        }
        #total{
            font-size: 25px;
            font-weight:800px;
        }
        #back,#printPreview {
            font-size: 20px;
            background-color: lightgrey;
            border: 1px solid black;
            text-align:center;
            margin: 0 auto;
            padding: 5px;
            border-radius: 25px;
            cursor:pointer
        }
        form{
            align-items:center;
            text-align:center;
        }
        @media print {
             #back,#printPreview {
                font-size: 20px;
                background-color: lightgrey;
                border: 1px solid black;
                display: none;
            }   
        }
        
    </style>
    <body id='receiptPrintArea'>
        <div id='receiptHeader'>
            <div>Tax Invoice Number: X23</div>
            <div><?php echo "Date: " . date("Y-m-d") . "<br>" ?></div>
        </div>
        <div id='customerDetails'>
            <div>Customer Name: <?php echo $_SESSION['name']; ?></div>
            <div>Email: <?php echo $_SESSION['email']; ?></div>
            <div>Phone: <?php echo $_SESSION['phone']; ?></div>
            <div>Address: <?php echo $_SESSION['address']; ?></div>
        </div>
        <h1>Bob's Garage</h1>
        <br>
        <h2>Tax Invoice</h2>
        <div>Items Purchsed: </div>
        <?php
            foreach($_SESSION['CART'] as $key => $value){
                echo "<div id='items'>";
                echo $value;
                echo "</div>";
                echo "<div>Price: ";
                echo $pumps[$value]['price'];
                echo "</div><br>";
                $total += $pumps[$value]['price'];
            }
            echo "<br><hr>";
            echo "<div id='total'>Total Bill: $ {$total}</div>";
        ?>
        <br>
        <form method='post' action="back.php">
            <input id="back" name="back" value='Return To Home Page' type="submit"></input>
            <input id="printPreview" name="back" value='Print Receipt' onclick="window.print()"></input>
        </form>
</html>