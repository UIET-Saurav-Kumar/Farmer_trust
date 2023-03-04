

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="u6wmVDi8WK1VmzKzvlmUvnE9" 
    data-amount="1000000" 
    data-currency="INR"
    data-id="rzp_test_66BL1VdTG9ySZ5"
    data-buttontext="Pay with Razorpay"
    data-name="Farmer's Trust"
    data-description="Charity funds to Annadata"
    data-image=""
    data-prefill.name="<?php echo $_POST['name']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.contact="<?php echo $_POST['contact']; ?>"
    
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>