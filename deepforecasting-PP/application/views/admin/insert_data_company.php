
    <!-- Admin Page header,title,content -->

    <div class="main-admin-section">
        <div class="container">
            <div class="panel panel-default panel-style">
                <div class="panel-heading head">
                    <h2 class="panel-title sec-title"><i class="fa fa-user"></i> Admins only</h2>
                </div>
                <div class="panel-body input-group">

<?php echo form_open_multipart('admin/insert_company');?>
                        <!-- <label for="co-id">Company ID:</label>
                        <input type="text" id="co-id"  class="form-control"><br> -->
                        <label for="co-name">Company Name:</label>
                        <input type="text" id="co-name" name="company_name" class="form-control">
                      <?php echo form_error('company_name','<div class="text-danger">','</div>'); ?><br>
                        <label for="co-link">Company Ticker:</label>
                        <input type="text" id="co-link" name="ticker_name" class="form-control"><br>
						
						<label for="co-link">Company Link:</label>
                        <input type="text" id="co-link" name="company_link" class="form-control">
                      <?php echo form_error('company_link','<div class="text-danger">','</div>'); ?><br>
                        <label for="co-img">Company image:</label>
                        <!-- <input type="file" id="co-img" name="company_img" class="form-control"> -->
                        <div class="upload-btn">
                                <span id="btn-name">Change Image</span>
                  <input type="file" name="company_img" class="form-control-file" id="upload" style="margin-bottom:10px" />
                        </div>

                        <label for="co-des">Company Description:</label>
                        <textarea id="co-des" cols="25" name="company_desc" style="height:150px" class="form-control"></textarea><br>
                        <!-- <button id="submit-data" class="form-control btn btn-success">Add Company</button> -->
                        <div class="save-btn text-right">
                            <button id="submit-data" class="form-control btn btn-success">Add Company</button>
                            <!-- <input type="submit" class="btn btn-primary" value="Save Profile" class="btn"> -->

                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
