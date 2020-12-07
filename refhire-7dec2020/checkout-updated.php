<?php

// include Stripe
require 'stripe/Stripe.php';
//require 'stripe/Stripe::setMaxNetworkRetries(2)';
// ini_set('display_errors',1);
// error_reporting(E_ALL);
//error_reporting(1);
$params = array(
    "testmode"   => "on",
    // "private_live_key" => "sk_live_UUCOI2p5f6ye9oqmIPKgohSW",
    // "public_live_key"  => "pk_live_NM71jfG5jXk2ChKV4PnBW6Uw",
    "private_test_key" => "sk_test_aD1GeDVFXe3NE3GshlSHF8XU00OQbDXQ8L",
    "public_test_key"  => "pk_test_V6ftH5y3wNAtOhnjVYddFEBD00lWwfAHPl"
);

if ($params['testmode'] == "on") {
  Stripe::setApiKey($params['private_test_key']);
  $pubkey = $params['public_test_key'];
} else {
  Stripe::setApiKey($params['private_live_key']);
  $pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
  $amount = $_POST['pay_total1'];
  // $amount_cents = str_replace(".","","1.00");  // Chargeble amount
  // $invoiceid = "14526321";                      // Invoice ID
  // $description = "Invoice #" . $invoiceid . " - " . $invoiceid;
//print_r($amount);exit;
  try {

    $charge = Stripe_Charge::create(array(
            "amount" => $amount*100,
            "currency" => "usd",
            "source" => $_POST['stripeToken'],
            "description" => 'Monthly Payment',
          )
    );

    // if ($charge->card->address_zip_check == "fail") {
    //   throw new Exception("zip_check_invalid");
    // } else if ($charge->card->address_line1_check == "fail") {
    //   throw new Exception("address_check_invalid");
    // } else if ($charge->card->cvc_check == "fail") {
    //   throw new Exception("cvc_check_invalid");
    // }
    // Payment has succeeded, no exceptions were thrown or otherwise caught

    $result = "success";

  } catch(Stripe_CardError $e) {

    $error = $e->getMessage();
    $result = "declined";

  } catch (Stripe_InvalidRequestError $e) {
    $result = "declined";
  } catch (Stripe_AuthenticationError $e) {
    $result = "declined";
  } catch (Stripe_ApiConnectionError $e) {
    $result = "declined";
  } catch (Stripe_Error $e) {
    $result = "declined";
  } catch (Exception $e) {

    if ($e->getMessage() == "zip_check_invalid") {
      $result = "declined";
    } else if ($e->getMessage() == "address_check_invalid") {
      $result = "declined";
    } else if ($e->getMessage() == "cvc_check_invalid") {
      $result = "declined";
    } else {
      $result = "declined";
    }
  }

  if($result=="success") {
   $response = "<script type='text/javascript'>alert('Your Payment has been processed successfully.!');
    window.location.href= 'index-v1.php';
    </script>";
  } else{
    $response = "<div class='text-danger'>Stripe Payment Status : \".$result.</div>";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refire Checkout</title>

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="start.css">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<style type="text/css">
  .error-box {
    color: #1c1414;
    font-family: Tahoma,Geneva,Arial,sans-serif;
    font-size: 18px;
    padding: 10px 10px 10px 36px;
    margin: 10px;
    background-color: #33dddd;
    border: 1px solid #2b45a7;
    /*width: 301px;*/
    text-align: center;
}
.error-box1 {
    color:#555;
    font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
    font-size: 18px;
    padding:10px 10px 10px 36px;
    margin:10px;
    background-color: #ffecec;
    border:1px solid #f5aca6;
   /* width: 300px;*/
   text-align:center;

}

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}



</style>
<body>
  <div class="container">
<form method="POST" id="payment-form" enctype="multipart/form-data">
<div class="step_5 section_title" >
                <h2>Payment Option</h2>
    
                <fieldset>
          <div class="form-group">
            <div class="form-group">
              <!-- <label class="col-sm-3 control-label" for="accountNumber">Payment Amount</label> -->
              <div class="col-sm-6">
                <input type="text" class="form_control" name="pay_total1" id="pay_total1" value="" hidden> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
        <label class="control-label" for="accountNumber">Card Holder</label>
        <input type="text" class="form_control" name="name_on_card" size="20" data-stripe="number" value="" required>
        
      </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
        <label class="control-label" for="accountNumber">Card Number</label>
        <input type="text" class="form_control" name="card_number" size="20" data-stripe="number" value="" required>
     
      </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
        <label class="control-label" for="expirationMonth">Expiration Date</label>
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
              <select class="form_control col-sm-12" name="expiry_m" data-stripe="exp_month" required>
                <option> Select Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12" >Dec (12)</option>
              </select>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <select class="form_control" data-stripe="exp_year" name="expiry_y">
                <option> Select Year</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
    
            </div>
            <div class="col-md-6">
            <div class="form-group">
        <label class="control-label" for="cvNumber">Card CVV</label>
        <input type="text" class="form_control" name="cvv" data-stripe="cvc" value="">
       
      </div>
            </div>
            <div class="col-md-12">
            <div class="cta-btn place-order">
                          <button type="submit" name="pay" id="pay" class="cta-link submit"><span>Place Order</span></button></div>
            </div>
          </div>
           
      
      
      

                           <?php if(isset($response)){echo $response;} ?> <div class='col-sm-offset-3 col-sm-9  text-danger payment-errors'></div>
                          </form>

</div>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
  Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');

  $(function() {
    var $form = $('#payment-form');
    $form.submit(function(event) {
      // Disable the submit button to prevent repeated clicks:
      $form.find('.submit').prop('disabled', true);

      // Request a token from Stripe:
      Stripe.card.createToken($form, stripeResponseHandler);

      // Prevent the form from being submitted:
      return false;
    });
  });

  function stripeResponseHandler(status, response) {
    // Grab the form:
    var $form = $('#payment-form');

    if (response.error) { // Problem!

      // Show the errors on the form:
      $form.find('.payment-errors').text(response.error.message);
      $form.find('.submit').prop('disabled', false); // Re-enable submission

    } else { // Token was created!

      // Get the token ID:
      var token = response.id;

      // Insert the token ID into the form so it gets submitted to the server:
      $form.append($('<input type="hidden" name="stripeToken">').val(token));

      // Submit the form:
      $form.get(0).submit();
    }
  };
</script> 
<script type="text/javascript">
  
  var inputTest = localStorage.getItem('objectToPass');
   $('#pay_total1').val(inputTest);
  //alert('Inserted Data' + inputTest);

  localStorage.removeItem( 'objectToPass' ); // Clear the localStorage


</script>
</body>
</html>