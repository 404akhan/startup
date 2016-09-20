<div class="container">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/payment.css" />
  <form action="<?php echo base_url(); ?>index.php/transaction/submit/" method="POST">
  <input type="hidden" name="amount" value="<?php echo $amount;?>"/>
  <input type="hidden" name="startup_name" value="<?php echo $startup_name;?>"/>
  <input type="hidden" name="roi" value="<?php echo $roi;?>"/>
  <div class="container-fluid">
  <div class="row">
  <h3 class="orange_text" style="text-align:center;">Transfer <?php echo $amount;?>HK$ to</h3>
  </div>
  <div class="row text-center">
    <h3><b><?php echo $startup_name; ?></b></h3>
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

</div>

