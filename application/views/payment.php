<div class="container">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/payment.css" />

    <div class="container-fluid">
      <form action="<?php echo base_url(); ?>index.php/payment/submit/<?php echo $id; ?>" method="POST">
        <div class="form-group">
          <input type="number" class="form-control" name="amount" id="amount" placeholder="Invest Amount(HKD)">
        </div>
        <div class="row">
          <h3 class="orange_text" style="text-align:center;"><span id="amount_persentage"><?php echo $persentage_expecting; ?></span>% Return over 12 month period</h3>
        </div>
       <div class="row">
        <h3 class="orange_text" style="text-align:center;"><span id="amount_result">0</span> ( <span id="amount_month">0</span> HKD/mo )</h3>
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

          <input type="hidden" name="startup_name" value="<?php echo $name; ?>">
          <input type="hidden" name="roi" value="<?php echo $persentage_expecting; ?>">

      <div class="text-center">
      <button type="submit" style="background-color: #ffcd22;  color: #ff6600;" class="btn orange_text btn-raised text-center">Submit</button>
      </div>

    </form>
    </div>

</div>