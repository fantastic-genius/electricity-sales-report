<div class="content-wrapper">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Sales</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="energy_vend" class="col-sm-2 control-label">Energy</label>

              <div class="input-group col-sm-9">
                <input type="text" class="form-control" id="energy_vend" name="energy_vend" placeholder="0000">
                <span class="input-group-addon">KWh</span>
              </div>
            </div>
            <div class="form-group">
              <label for="otd" class="col-sm-2 control-label">Date and Time</label>

              <div class="input-group col-sm-9">
                <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                </div>
                <input type="text" class="form-control" id="datetimepicker" name="otd" value="2012-05-15 21:05:00" >
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <!--button type="submit" class="btn btn-default">Cancel</button-->
            <button type="submit" class="btn btn-info pull-right">Save</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>
  </div>
</div>
