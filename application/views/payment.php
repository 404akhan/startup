 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/payment.css" />



<div class="container-fluid">
  <form action="<?php echo base_url(); ?>index.php/payment/submit/" method="POST">
    <div class="form-group">
      <input type="number" class="form-control" name="amount" id="amount" placeholder="Invest Amount(HKD)">
    </div>
    <div class="row">
      <h3 class="orange_text" style="text-align:center;">Your Return By</h3>
    </div>
    <div class="row col-sm-12">
     <div class="col-xs-4">
       <select class="form-control">
         <option>2018</option>
       </select>
     </div>
     <div class="col-xs-4">
       <select class="form-control">
         <option>Jul</option>
       </select>
     </div>
     <div class="col-xs-4">
       <select class="form-control">
         <option>31</option>
       </select>
     </div>
   </div>
   <div class="row">
    <h3 class="orange_text" style="text-align:center;">3,300HK$ in Total( + 110%)</h3>
  </div> 
  <div class="row">
    <img style="width: 100%;" src="<?php echo base_url(); ?>assets/fintech/group-6@2x.png"/>
  </div>
  <div class="row">
    <img style="width: 100%;" src="<?php echo base_url(); ?>assets/fintech/image-5@2x.png"/>
  </div>
  <div class="row col-sm-12">
    <div class="col-xs-9">
      (Million HK$)
    </div>
    <div class="col-xs-3">
      <select class="form-control">
        <option>By Month</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label style="color:black;">
      <input type="checkbox" name="agree" > I’ve read and understand the Terms & Conditions
and potential loss of this investment.
    </label>
  </div>

  <div class="text-center">
  <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center">Submit</button>
  </div>
  
</form>
</div>
