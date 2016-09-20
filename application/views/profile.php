<div class="st-main-bottom">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3">
                            <h3 style="text-align: center;">Transaction History</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Amount</p>
                        </th>
                        <th>
                            <p>Company</p>
                        </th>
                        <th>
                            <p>ROI</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($transactions as $one) { ?>
                    <tr>
                        <td>
                            <?php echo $one['amount']; ?> HKD
                        </td>
                        <td>
                            <?php echo $one['startup_name']; ?>
                        </td>
                        <td>
                            <?php echo $one['roi']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>