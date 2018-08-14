<div class="content-wrapper">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">VENDING REPORT</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="report_table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Energy Vended</th>
        <th>OTD</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Energy Balance</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if(! empty($reports)){
          foreach ($reports as $report) {
      ?>
      <tr>
        <td><?php echo $report->energy_vended; ?></td>
        <td><?php echo $report->otd; ?></td>
        <td><?php echo $report->price; ?></td>
        <td><?php echo $report->amount; ?></td>
        <td><?php echo $report->energy_balance ; ?></td>
      </tr>

      <?php
          }
        }
      ?>

      </tbody>
      <tfoot>
      <tr>
        <th>Energy Vended</th>
        <th>OTD</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Energy Balance</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
</div>
