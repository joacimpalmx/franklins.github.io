<?php 
define("TITLE", "Menu Item | Franklin's Fine Dining");

include('includes/header.php');

//this function will see if this matches what I'm looking for within the paramater. To eliminate any chance of cyberattacks
function strip_bad_chars( $input ) {
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
    return $output;
}

//if is set, the GET collection with the variable item, store a variable in $menuItem using the GET collection but FIRST strip the bad characters out of the GET collection
//if someone tries to make a cyberattack on our website
if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars( $_GET['item'] );
    $dish = $menuItems[$menuItem];
}

//Calculate a suggested tip

function suggestedTip($price, $tip){
    
    $totalTip = $price * $tip;
    echo $totalTip;
}

?>

<hr>

<div id="dish">

    <h1><?php echo $dish['title']; ?> <span class="price"><?php echo $dish['price']; ?> <sup>kr</sup></span></h1>
    <p><?php echo $dish['blurb']; ?></p>

    <br>

    <p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
    <p><em>Suggested Tip: <?php suggestedTip($dish['price'], 1.5); ?> <sup>kr</sup></em></p>

</div> <!-- dish -->

<hr>

<a href="menu.php" class="button prev">&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>