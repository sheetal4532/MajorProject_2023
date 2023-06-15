<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>

    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="Your email">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="address">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" placeholder="city">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="state">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="code">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment<br><br></h3>

                    <!-- <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/card_img.png" alt="">
                    </div> -->
                    <!-- <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr. john deo">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div> -->








                    <!-- *************************** -->

                    <!-- google payment -->
                    <!-- <div class="online_payment mt-3 shadow"> -->
                    <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                    <a class="d-flex justify-content-between" data-toggle="collapse" href="Payment-Gateway-Using-PHP-master\index.php" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>UPI(GPay/PhonePe/Paytm)

                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <!-- <div class="mt-3"> -->
                        <!-- <input type="text" name="" id="discount_code1" class="form-control font-weight-bold" placeholder="Enter the discount code">
                                        <small id="error_trw" class="text-dark mt-3">code is thapa</small> -->
                        <form action="#"><br>

                            <a href=""> <input type="radio" id="googlepay" name="fav_language" value="googlepay"></a>
                            <!-- <label for="googlepay">Google-pay </label><br> --><img src="images/google-pay.png" alt="#"><br>
                            <input type="radio" id="phonepe" name="fav_language" value="phonepe">
                            <!-- <label for="phonepe">PhonePe</label><br>--><img src="images/phonepay.png" alt="#" class="paykaro"><br>
                            <!-- <img src="images/google-pay.png" alt="#">
                            <input type=" radio " id="googlepay " name="fav_language " value="googlepay "> -->



                        </form>
                        <!-- </div> -->
                        <!-- <button class=" btn btn-primary btn-sm mt-3 " onclick="discount_code() ">Apply</button> -->
                    </div><br>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->

                    <div class="box">
                        <div id="accordion">
                            <!-- <div class="card">
                                <div class="card-header" id="headingOne"> -->
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>&nbsp; &nbsp; &nbsp; &nbsp;Debit/Credit-Card  
                                </button><br><br>
                            </h5>
                            <!-- </div> -->

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" id="debitcard" name="fav_language" value="debitcard"> <i class="fa fa-credit-card"></i> &nbsp; Debit-Card
                                    <br>
                                    <input type="radio" id="creditcard" name="fav_language" value="creditcard"> <i class="fa fa-credit-card"></i> &nbsp; Credit-Card
                                    <br>
                                </div>
                            </div>
                            <!-- </div> -->

                        </div>

                    </div><br>


                    <!-- ***************** -->

                    <div class="QR">
                        <b><i class="fa fa-spinner fa-spin" style="font-size:24px"></b></i>&nbsp; &nbsp; &nbsp;&nbsp;<span> QR Payment</span><br><br>
                        <img src="images/qr-code.png" alt="">
                    </div>


                    <!-- ***************** -->
                </div>
                <!-- <input type="submit " href="sms/" value="proceed to checkout " class="button "> -->
                <button class="button">Button</button>
            </div>
        </form>
    </div>


</body>

</html>