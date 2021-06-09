<?php
require_once 'dbConnect.php';
$id = $_GET['id'];
$itemName = $_GET['product_problem'];
$itemPrice = $_GET['price'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Authorize.net payment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <!-- <h3 class="panel-title">Charge <?php echo '$' . $itemPrice; ?> with Authorize.Net</h3> -->
                <!-- Product Info -->
                <p><b>What:-</b> <?php echo $itemName; ?></p>
                <p><b>Price:-</b> <?php echo '$' . $itemPrice . ' ' . $currency; ?></p>
            </div>
            <div class="panel-body form-group">
                <form action="payment.php" method="POST">
                    <input type="hidden" id="price" name="price" value="<?php echo $itemPrice; ?>">
                    <input type="hidden" id="payment_id" name="payment_id" value="<?php echo $id; ?>">
                    <input type="hidden" id="item_name" name="item_name" value="<?php echo $itemName; ?>">
                    <!-- <table width="345" border="1">
                        <tr>
                            <th height="34">Enter your Name</th>
                            <td><input type="text" class="form-control" name="name" placeholder="Enter name" required="" autofocus=""></td>
                        </tr>
                        <tr>
                            <th height="33">Enter your EMAIL</th>
                            <td><input type="email" class="form-control" name="email" placeholder="Enter email" required=""></td>
                        </tr>
                        <tr>
                            <th height="34">CARD NUMBER</th>
                            <td><input type="text" class="form-control" name="card_number" placeholder="1234 1234 1234 1234" autocomplete="off" required=""></td>
                        </tr>
                        <tr>
                            <th height="34">EXPIRY MONTH</th>
                            <td><input type="text" class="form-control" name="card_exp_month" placeholder="MM" required=""></td>
                        </tr>
                        <tr>
                            <th height="34">EXPIRY YEAR</th>
                            <td><input type="text" class="form-control" name="card_exp_year" placeholder="YYYY" required=""> </td>
                        </tr>
                        <tr>
                            <th height="34">CVV CODE</th>
                            <td><input type="text" name="card_cvc" class="form-control" placeholder="CVV" autocomplete="off" required=""></td>
                        </tr>
                        <tr>
                            <th height="39" colspan="3"> <button type="submit" class="btn btn-primary">Submit
                                    Payment</button>
                            </th>
                        </tr>
                    </table> -->
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table">
                                    <div class="row display-tr">
                                        <h3 class="panel-title display-td">Payment Details</h3>
                                        <div class="display-td">
                                            <img class="img-responsive pull-right" src="">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form role="form" id="payment-form">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="name">Enter your Name</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="" autofocus="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="mail">Enter your EMAIL</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="cardNumber">CARD NUMBER</label>
                                                    <div class="input-group">
                                                        <input type="tel" class="form-control" id="card_number" name="card_number" placeholder="4111 1111 1111 1111" autocomplete="off" required="">
                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7 col-md-6">
                                                <div class="form-group">
                                                    <label for="card_exp_month"><span class="hidden-xs">EXPIRY MONTH</span></label>
                                                    <input type="tel" class="form-control" id="card_exp_month" name="card_exp_month" placeholder="MM" required="">
                                                </div>
                                            </div>
                                            <div class="col-xs-7 col-md-6">
                                                <div class="form-group">
                                                    <label for="card_exp_year"><span class="hidden-xs">EXPIRY YEAR</span></label>
                                                    <input type="tel" class="form-control" id="card_exp_year" name="card_exp_year" placeholder="YYYY" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="cvv">CVV</label>
                                                    <div class="input-group">
                                                        <input type="text" id="card_cvc" name="card_cvc" class="form-control" placeholder="CVV" autocomplete="off" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button id="form_submit" class="btn btn-success btn-lg btn-block" type="submit">Submit Payment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $("#form_submit").click(function(e) {

            e.preventDefault();

            var product_problem = $("#product_problem").val();

            var price = $("#price").val();



            var name = $("#name").val();

            var email = $("#email").val();

            var card_number = $("#card_number").val();

            var card_exp_month = $("#card_exp_month").val();

            var card_exp_year = $("#card_exp_year").val();

            var card_cvc = $("#card_cvc").val();

            var price = $("#price").val();

            var payment_id = $("#payment_id").val();

            var item_name = $("#item_name").val();


            var data = {
                name: name,
                email: email,
                card_number: card_number,
                card_exp_month: card_exp_month,
                card_exp_year: card_exp_year,
                card_cvc: card_cvc,
                price: price,
                payment_id: payment_id,
                item_name: item_name
            };

            $.ajax({
                    method: "POST",
                    url: "payment.php",
                    dataType: "json",
                    data: data
                })
                .done(function(result) {

                    // alert(JSON.stringify(result));

                    if (result.status == 200) {

                        var status = result.status;

                        var message = result.message;

                        var paymentID = result.paymentID;

                        var transaction_id = result.transaction_id;

                        var payment_response = result.payment_response;

                        var itemName = result.itemName;

                        var itemPrice = result.itemPrice;

                        var currency = result.currency;

                        window.location.replace("payment_result.php?status=" + status + "&message=" + message + "&paymentID=" + paymentID + "&transaction_id=" + transaction_id + "&payment_response=" + payment_response + "&itemName=" + itemName + "&itemPrice=" + itemPrice + "&currency=" + currency);
                    } 
                    else {

                        var status = result.status;

                        var message = result.message;

                        var paymentID = '';

                        var transaction_id = '';

                        var payment_responce = '';

                        var itemName = '';

                        var itemPrice = '';

                        var currency = '';

                        window.location.replace("payment_result.php?status=" + status + "&message=" + message + "&paymentID=" + paymentID + "&transaction_id=" + transaction_id + "&payment_responce=" + payment_responce + "&itemName=" + itemName + "&itemPrice=" + itemPrice + "&currency=" + currency);
                    }

                });

        });
    </script>

</body>

</html>
