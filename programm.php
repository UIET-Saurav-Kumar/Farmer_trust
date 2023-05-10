<?php
$apikey="rzp_test_0acCHVMkPfxI71";
?>

<script src="http://code.jquery.com/jquery-3.5.0.js"></script>

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="1000000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END'; ?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Farmer's Trust"
    data-description="Charity funds to Annadata"
    data-image=""
    data-prefill.Name="<?php echo $_POST['Name']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.Number="<?php echo $_POST['Number']; ?>"
    
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>