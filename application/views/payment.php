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
        <h3 class="orange_text" style="text-align:center;"><span id="amount_result">0</span> ( <span id="amount_month">0</span> HKD/month )</h3>
      </div>
      <div class="row col-sm-12" id="sandbox-container">
      <input type="text" class="form-control" value="09/20/2016" />
      <script>
      $('#sandbox-container input').datepicker({
        orientation: "bottom auto"
      });
      </script>
     </div>




     <div class="row">
      <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                   var data = google.visualization.arrayToDataTable([
                     ['Month', 'HKD'],
                     ['May',  120],
                     ['Jun',  260],
                     ['Jul',  320],
                     ['Aug',  540]
                     ]);

                   var options = {
                     title: '',
                     hAxis: {title: '2016',  titleTextStyle: {color: '#333'}},
                     vAxis: {minValue: 0}
                 };

                 var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                 chart.draw(data, options);
             }
         </script>
         <div id="chart_div" style="width: 100%; height: 100%;"></div>
    </div>
    <div class="row col-sm-12">
      <div class="col-xs-9">
        (Million HK$)
      </div>
      <div class="col-xs-3">
        <select class="form-control">
          <option>By Month</option>
          <option>
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