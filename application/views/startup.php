
<div class="st-main">
    <div class="container">
        <div class="row" style="margin: 15px 0px;">


          <table style="width:100%;">
           <tr>
            <td style="width: 10%;"><img src="<?php echo base_url(); ?>assets/fintech/logo.png">

            </td>
            <td><?php echo $name; ?><br/>
              <?php echo $amount_invested; ?> - amount invested</td>
              <td style="text-align:right;">Yield:<?php echo $persentage_expecting; ?>%</td>

          </tr>
      </table>





  </div>

  <div class="row">
      <img height="300px" width="100%" src="<?php echo base_url(); ?>assets/fintech/image-1@2x.png" alt="">
</div>

<div class="row">
    <a href="<?php echo base_url(); ?>index.php/payment/index/1" class="btn btn-success btn-lg" style="float: right;">
        Invest
    </a>
</div>

<div class="st-choices">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Performance</a></li>
        <li><a data-toggle="tab" href="#menu1">Projection</a></li>
        <li><a data-toggle="tab" href="#menu2">Marketplace</a></li>
    </ul>

    
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
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
     <div id="menu1" class="tab-pane fade">
         
     </div>
     <div id="menu2" class="tab-pane fade">

     </div>
 </div>
</div>

</div>
</div>

<div class="st-main-bottom">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h3 style="text-align: center;">Executive Team</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img height="60px" width="60px" src="<?php echo base_url(); ?>assets/fintech/head1.jpg" alt="">
                        </td>
                        <td>
                            <h4>Owen Chang</h4>
                            <p>CEO, ex Banker, now full time philanthropist dedicated to raising the future generation leaders in society.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img height="60px" width="60px" src="<?php echo base_url(); ?>assets/fintech/head2.jpg" alt="">
                        </td>
                        <td>
                            <h4>Ashish Kramer</h4>
                            <p>COO, accomplished entrepreneur, manages business daily functions.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img height="60px" width="60px" src="<?php echo base_url(); ?>assets/fintech/head3.jpg" alt="">
                        </td>
                        <td>
                            <h4>Aydana Zholdasova</h4>
                            <p>Children coordinator, with a heart of gold, manages orphanage and educational program.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h3 style="text-align: center;">Contact Info</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="<?php echo base_url(); ?>assets/fintech/image-6@2x.png" alt="Start Up">
                        </td>
                        <td>
                            <p>http://fthackathon.com/</p>
                            <p>852-1234 5678</p>
                            <p>hk@finnovasia.com</p>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h3 style="text-align: center;">Downloads</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Report_2016_Q3</p>
                            <p>Report_2016_Q2</p>
                            <p>Report_2016_Q1</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h3 style="text-align: center;">Related Startups</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <table style="width:100%;">
                                   <tr>
                                    <td style="width: 10%;"><img src="<?php echo base_url(); ?>assets/fintech/logo.png">

                                    </td>
                                    <td>XXX<br/>
                                      1014K - investors</td>
                                      <td style="text-align:right;">Yield: 10%</td>

                                  </tr>
                              </table>
                          </div>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>