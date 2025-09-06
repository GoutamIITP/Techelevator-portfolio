<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Users</a></li>
	</ol>
</div>
<div class="col-sm-12 well">
	<div class="table_horizontal">
		<div class="row">
			<div class="col-xs-12">
				<div class="input-group custom_addon">
					<div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;">
						<i class="fa fa-search"></i>
					</div>
					<input type="text" ng-model="search_text" placeholder="Search here...">
				</div>
			</div>
		</div>
	</div>
	<div class="table-data">
		<div class="table-responsive-custom">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th>Name</th>
						<th>Country</th>
						<th>Plan</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Company Name</th>
						<th>Website</th>
						<th>Office Address</th>
						<th>Pan No.</th>
						<th>Gst No.</th>
						<th>City</th>
						<th>Total Years</th>
						<th>Turnover</th>
						<th>Profile</th>
						<th>Company Logo</th>
						<th>GST Certificate</th>
						<th>Referral's Name</th>
						<th>Referral's Phone</th>
						<th>Status</th>
						<th style="width:85px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
						<td>{{y.name}}</td>
						<td>{{y.country}}</td>
						<td>{{y.price_name}}-{{y.plan_price}}</td>
						<td>{{y.email}}</td>
						<td>{{y.phone}}</td>
						<td>{{y.company_name}}</td>
						<td>{{y.website}}</td>
						<td>{{y.off_add}}</td>
						<td>{{y.pan_no}}</td>
						<td>{{y.gst_no}}</td>
						<td>{{y.city}}</td>
						<td>{{y.total_years}}</td>
						<td>{{y.turnover}}</td>
						<td>{{y.image}}</td>
						<td>{{y.company_logo}}</td>
						<td>{{y.gst_certificate}}</td>
						<td>{{y.r_name}}</td>
						<td>{{y.r_phone}}</td>
						<td>
							<div style="height:25px;width:25px;border-radius:50%;background:red" ng-if="y.status == '0'">
							</div>
							<div style="height:25px;width:25px;border-radius:50%;background:green" ng-if="y.status == '1'">
							</div>
						</td>
						<td>
							<a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal"
								data-target=".bs-example-modal-sm">
								<span class="fa fa-pencil fa-2x"></span>
							</a>
							&nbsp;&nbsp;
							<a href="javascript:void(0)" style="color:red" ng-click="delete_data(y.user_id)">
								<span class="fa fa-trash fa-2x"></span>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-sm-12">
		<dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)"
			template-url="app/pagination"></dir-pagination-controls>
	</div>
</div>

<div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" ng-click="close_modal()">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="usersModalLabel">Add Plan</h4>
			</div>

			<div class="modal-body" style="max-height:70vh; overflow-y:auto;">
				<?php $this->load->view('form'); ?>
			</div>
		</div>
	</div>
</div>

<style>
	.table-responsive-custom {
		width: 100%;
		overflow-x: auto;
		-webkit-overflow-scrolling: touch;
	}

	.table-responsive-custom table {
		min-width: 1500px;
	}
</style>