<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Energy Vendabe</span>
              <span class="info-box-number"><?php echo $tev; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Energy Balance</span>
              <span class="info-box-number"><?php echo $energy_balance; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Enegy Vended Today</span>
              <span class="info-box-number"><?php echo $total_energy_vended; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Amount</span>
              <span class="info-box-number"><?php echo $total_amount; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

  </section>
  <!-- /.content -->

  <section class="content">
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
  </section>
</div>
<!-- /.content-wrapper -->
