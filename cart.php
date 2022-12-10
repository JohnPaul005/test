<?php 
    include('includes/header.php');

    if(isset($_POST['another'])){
        header('Location: index.php');
    }
    if(isset($_POST['todlt'])){
        $_SESSION['todlt'] = $_POST['todlt'];
        header('Location: confirmremove.php');
    }
    if(isset($_POST['checkout'])){
        session_destroy();
        header('Location: clear.php');
    }
?>
<form method="post">
    <div class="container">
        <div class="row">
            <div class="row col-12 col-sm-12 titles-cart">
                <div class="product-title">
                    <b>Products</b>
                </div>
                <div class="sizeqty-title">
                    <b>Size</b>
                    <b>Quantity</b>
                </div>
                <div class="pricetotal-title">
                    <b>Price</b>
                    <b>Total</b>
                </div>
            </div>
    <?php
        function oddoreven($key){
            $temp = '';
            if(fmod($key, 2) == 0){
                $temp = "odd";
            }
            else{
                $temp = "even";
            }
            $key = $temp;
            return $key;
        }

        $tempprice = 0;
        $temptotal = 0;
        $temptotalAmount = 0;
        $totalperprod = 0;
        $totalqty = 0;
        $totalAmount = 0;
        if(isset($_SESSION['incart'])){
            foreach($_SESSION['incart'] as $key => $product){
                
                $totalqty += $product['qty'];
                $tempprice = $product['price'];
                $temptotal = $product['price'] * $product['qty'];
                $temptotalAmount += $product['price'] * $product['qty'];

                $totalAmount = number_format($temptotalAmount);
                $product['price'] = number_format($tempprice);
                $totalperprod = number_format($temptotal);

                $tempkey = oddoreven($key);


                echo
                    '<div class="row col-12 col-sm-12 '.$tempkey.'">'.
                        '<div class="prod-details">'.
                            '<img src="img/'.$product['photo1'].'">'.
                            $product['name'] .
                        '</div>'.
                        '<div class="sizeqty-details">'.
                            $product['size'] .
                            '<input class="qty-style" type="number" min="1" max="100" required value="'. $product['qty']. '">'.
                        '</div>'.
                        '<div class="pricetotal-details">'.
                            '₱'. $product['price'].'.00' .
                            '<div class="ttl-grp">'.
                            '₱'. $totalperprod .'.00'.
                                '<button class="btn btn-danger" type="submit" name="todlt" value="'.$key.'"><i class="fas fa-trash"></i></button>'.
                            '</div>'.
                        '</div>'.
                    '</div>';
            }
                
            if(fmod(count($_SESSION['incart']),2) == 0) { 
                echo   
                '<div class="row col-12 col-sm-12 darken">'.
                    '<div class="totl">'.
                        '<b>Total</b>'.
                        $totalqty .
                    '</div>'.
                    '<div class="totalantok">'.
                        '₱'.$totalAmount .'.00'.
                    '</div>'.
                '</div>';
            }
            else{
                echo
                '<div class="row col-12 col-sm-12 darken bg-white">'.
                    '<div class="totl">'.
                        '<b>Total</b>'.
                        $totalqty .
                    '</div>'.
                    '<div class="totalantok">'.
                        '₱'.$totalAmount .'.00'.
                    '</div>'.
                '</div>';
            }
            echo 
                '<div class="btn-grppp">
                    <button type="submit" name="another" class="btn btn-danger biggg"><i class="fas fa-shopping-bag"></i>Continue Shopping</button>
                    <button type="submit" name="update" class="btn btn-success biggg"><i class="fas fa-edit"></i>Update Cart</button>
                    <button type="submit" name="checkout" class="btn btn-primary biggg"><i class="fas fa-sign-out-alt"></i>Check Out</button>
                </div>';
        }
        else{
            echo
            '<div class="col-12 col-sm-12 bg-dim">
                <h5>Cart is still empty.</h5>
            </div>
            <button type="submit" name="another" class="btn btn-danger biggg"><i class="fas fa-shopping-bag"></i>Continue Shopping</button>
            ';
        }
    ?>
        </div>
    </div>
</form>
<?php 
    include('includes/footer.php');
?>