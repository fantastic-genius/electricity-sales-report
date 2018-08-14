<div class="content-wrapper">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">SETTINGS</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="tev" class="col-sm-2 control-label">Total Energy Vendable(TEV)</label>

              <div class="input-group col-sm-9">
                <input type="text" class="form-control" id="tev" name="tev" placeholder="000" value="<?php echo (isset($tev) ? $tev : '')?>">
                <span class="input-group-addon">KWh</span>
              </div>
            </div>
            <div class="form-group">
              <label for="price" class="col-sm-2 control-label">Price</label>

              <div class="input-group col-sm-9">
                <span class="input-group-addon">NGN</span>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="0.00" value="<?php echo (isset($price) ? $price : '')?>">
                <span class="input-group-addon">per KWh</span>
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
