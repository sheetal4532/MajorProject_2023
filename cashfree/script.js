
  var paymentSessionId = "TEST394665d0c99df0d0b5d6e7ca3a566493";
  const getSessionAndPay = function(){
  $.ajax({
    url: "http://localhost/cashfree/jssdk/fetchtoken.php",
    success: function(result) {
      console.log(result);
      paymentSessionId = result["payment_session_id"]
      // comment this out for now, we will use this later!
      //cfCheckout.pay(orderToken, payType);
    }
  });
  return false
}
