<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Authorize.net payment</title>
</head>

<body>
    <div class="container">
        <h3>Authorize.net Payment Gateway </h3>
        <div class="panel">
            <div class="panel-body form-group">
                <form action="submit_product.php" method="POST">
                    <table width="345" border="1">
                        <tr>
                            <th height="34">What</th>
                            <td><input type="text" id="product_problem" class="form-control" name="product_problem" placeholder="Define Problem" required="" autofocus=""></td>
                        </tr>
                        <tr>
                            <th height="33">Price</th>
                            <td><input type="text" id="price" class="form-control" name="price" placeholder="Price" required=""></td>
                        </tr>
                        <tr>
                            <th height="39" colspan="3"> <button id="form_submit" type="submit" class="btn btn-primary">Submit
                                    Payment</button>
                            </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>


</body>

<script type="text/javascript">
    $("#form_submit").click(function(e) {

        e.preventDefault();

        var product_problem = $("#product_problem").val();

        var price = $("#price").val();

        var data = {
            product_problem: product_problem,
            price: price
        };

        $.ajax({
                method: "POST",
                url: "submit_product.php",
                dataType: "json",
                data: data
            })
            .done(function(result) {


                // alert(JSON.stringify(result));

                if (result.status == 200) {
                    var product_problem = result.product_problem;
                    var id = result.id;
                    var price = result.price;
                    window.location.replace("make_payment.php?id=" + id + "&product_problem=" + product_problem + "&price=" + price);
                } else {
                    alert(result.message);
                }

            });

    });
</script>

</html>