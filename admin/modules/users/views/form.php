<div class="col-sm-12 well" style="margin: 0px; padding:0px ; margin-top:5px;">
	<div class="col-sm-12" style="margin: 0px; padding:0px ; margin-top:5px;">
		<form name="form1" id="form1" method="post" action="" autocomplete="off">
			<input type="text" name="user_id" ng-model="x.user_id" hidden>
			<div class="col-sm-6 mb-2">
				<label>Name</label>
				<input name="name" class="form-control" ng-model="x.name" >
			</div>
			<div class="col-sm-6 mb-2">
				<label>Email</label>
				<input name="email" class="form-control" ng-model="x.email">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Phone</label>
				<input name="phone" class="form-control" ng-model="x.phone">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Company Name</label>
				<input name="company_name" class="form-control" ng-model="x.company_name">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Website</label>
				<input name="website" class="form-control" ng-model="x.website">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Office Address</label>
				<textarea name="off_add" class="form-control" ng-model="x.office_add"></textarea>
			</div>

			<div class="col-sm-6 mb-2">
				<label>PAN Number</label>
				<input name="pan_no" class="form-control" ng-model="x.pan_no">
			</div>

			<div class="col-sm-6 mb-2">
				<label>GST Number</label>
				<input name="gst_no" class="form-control" ng-model="x.gst_no">
			</div>

			<div class="col-sm-6 mb-2">
				<label>City</label>
				<input name="city" class="form-control" ng-model="x.city">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Total Years</label>
				<input name="total_years" class="form-control" ng-model="x.total_years">
			</div>

			<div class="col-sm-6 mb-2">
				<label>Turnover</label>
				<input name="turnover" class="form-control" ng-model="x.turnover">
			</div>
			<div class="col-sm-6 mb-2">
				<label>Referral's Name</label>
				<input name="r_name" class="form-control" ng-model="x.r_name">
			</div>
			<div class="col-sm-6 mb-2">
				<label>Referral's Phone</label>
				<input name="r_phone" class="form-control" ng-model="x.r_phone">
			</div>

			<div class="col-sm-6 mb-2">
				<label for="">Status</label>
				<div class="form-control">
					<input type="checkbox" class="form-check-input" id="status" name="status" ng-model="x.status">
					<label class="form-check-label" for="status">Active</label>
				</div>
			</div>


			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div id="webprogress" style="display: none">
					<img src="<?= base_url() ?>/assets/images/progress/load.gif">
				</div>
				<button type="submit" id="submitbtn" accesskey="s" ng-click="save_data(x)" class="btn btn-info"
					ng-disabled="form1.$invalid">
					<u><b>S</b></u>ave
				</button>
				<a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>lear</a>
				<br><br>
			</div>
		</form>
	</div>
</div>

<style>
	.form-check {
		display: block;
		width: 100%;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px double #fff;
		border-radius: 4px;
	}

	.mb-2 {
		margin-bottom: 10px;
	}
</style>