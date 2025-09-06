<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Project</a></li>
	</ol>
</div>
<div class="col-sm-12 well">
	<div class="col-sm-5">
		<form name="form1" id="form1" method="post" action="" autocomplete="off">
			<div class="col-sm-6" ng-if="x.project_id">
				<label>Project Code</label>
				<input name="project_id" class="form-control" ng-model="x.project_id" required>
			</div>

			<div class="col-sm-6">
				<label>Project Name</label>
				<input name="name" class="form-control" ng-model="x.name" required autofocus>
			</div>
			<div class="col-sm-6">
				<label>Location</label>
				<input name="location" class="form-control" ng-model="x.location">
			</div>

			<div class="col-sm-6">
				<label>Start Date</label>
				<input type="text" id="DOB" name="start_date" class="form-control" ng-model="x.start_date">
			</div>

			<div class="col-sm-6">
				<label>End Date</label>
				<input type="text" id="DOB1" name="end_date" class="form-control" ng-model="x.end_date">
			</div>

			<div class="col-sm-6">
				<label>Client Name</label>
				<input name="client_name" class="form-control" ng-model="x.client_name">
			</div>

			<div class="col-sm-6">
				<label>Project Manager</label>
				<input name="manager" class="form-control" ng-model="x.manager">
			</div>

			<div class="col-sm-6">
				<label>Phone</label>
				<input name="phone" class="form-control" ng-model="x.phone">
			</div>

			<div class="col-sm-6">
				<label>Phone2</label>
				<input name="phone2" class="form-control" ng-model="x.phone2">
			</div>
			<div class="col-sm-6">
				<label>Email</label>
				<input type="email" name="email" class="form-control" ng-model="x.email">
			</div>

			<div class="col-sm-6">
				<label>Website</label>
				<input type="url" name="website" class="form-control" ng-model="x.website">
			</div>
			<div class="col-sm-6">
				<label>Budget</label>
				<input type="number" name="budget" class="form-control" ng-model="x.budget">
			</div>

			<div class="col-sm-12">
				<label>Project Description</label>
				<textarea name="description" class="form-control" ng-model="x.description" rows="3"></textarea>
			</div>

			<div class="col-sm-5">
				<label class="checkarea">Status</label>
			</div>
			<div class="col-sm-6">
				<!-- Hidden field always submits -->
				<input type="hidden" name="status" value="{{ x.status }}">
				<input type="checkbox" class="form-check" ng-model="x.status" ng-true-value="'1'" ng-false-value="'0'">
				<span class="checkmark"></span>
			</div>
			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div id="webprogress" style="display: none">
					<img src="<?= base_url() ?>/assets/images/progress/load1.gif">
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

	<?php include 'data.php'; ?>
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
</style>