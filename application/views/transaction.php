 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/payment.css" />
<form action="<?php echo base_url(); ?>index.php/transaction/submit/" method="POST">
<input type="hidden" name="amount" value="<?php echo $amount;?>"/>
<div class="container-fluid">
<div class="row">
<h3 class="orange_text" style="text-align:center;">Transfer <?php echo $amount;?>HK$ to</h3>
</div>
<div class="row text-center">
<img src="<?php echo base_url(); ?>assets/fintech/image-13@2x.png"/>
</div>
<div class="row">
<h3 class="orange_text" style="text-align:center;">via</h3>
</div>

<div class="text-center">
  <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center"><img src="<?php echo base_url(); ?>assets/fintech/image-14@2x.png"></button>
  </div>
<div class="text-center">
  <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center"><img src="<?php echo base_url(); ?>assets/fintech/image-15@2x.png"></button>
  </div>
  <div class="text-center">
  <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center"><img src="<?php echo base_url(); ?>assets/fintech/image-16@2x.png"></button>
  </div>
  <div class="text-center">
  <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center"><img src="<?php echo base_url(); ?>assets/fintech/image-17@2x.png"></button>
  </div>

</form>
</div>


