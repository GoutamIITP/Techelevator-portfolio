 <div class="col-sm-12 well">
 	<div class="col-sm-12">
 		<form name="form1" id="form1" method="post" action="" autocomplete="off">
 			<input type="text" name="pr_id" ng-model="x.pr_id" hidden>

 			<div class="col-sm-12 mb-2">
 				<label>Name</label>
 				<input name="name" class="form-control" ng-model="x.name" required autofocus>
 			</div>

 			<div class="col-sm-12 mb-2">
 				<label>Message</label>
 				<textarea name="message" class="form-control" rows="4" ng-model="x.message" required placeholder="Write your review message here..."></textarea>
 			</div>

 			<div class="col-sm-12 mb-2">
 				<label>Star Rating</label>
 				<div class="form-control" style="height: auto; padding: 10px;">
 					<div class="star-rating">
 						<input type="radio" id="star5" name="star" value="5" ng-model="x.star">
 						<label for="star5" class="fa fa-star"></label>

 						<input type="radio" id="star4" name="star" value="4" ng-model="x.star">
 						<label for="star4" class="fa fa-star"></label>

 						<input type="radio" id="star3" name="star" value="3" ng-model="x.star">
 						<label for="star3" class="fa fa-star"></label>

 						<input type="radio" id="star2" name="star" value="2" ng-model="x.star">
 						<label for="star2" class="fa fa-star"></label>

 						<input type="radio" id="star1" name="star" value="1" ng-model="x.star">
 						<label for="star1" class="fa fa-star"></label>
 					</div>
 					<small class="text-muted">Click on stars to rate (1-5 stars)</small>
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

 	.star-rating {
 		display: flex;
 		align-items: center;
 		gap: 5px;
 	}

 	.star-rating input[type="radio"] {
 		display: none;
 	}

 	.star-rating label {
 		font-size: 24px;
 		color: #ddd;
 		cursor: pointer;
 		transition: color 0.2s;
 	}

 	.star-rating input[type="radio"]:checked~label,
 	.star-rating label:hover,
 	.star-rating label:hover~label {
 		color: #ffc107;
 	}

 	.star-rating {
 		flex-direction: row-reverse;
 		justify-content: flex-end;
 	}

 	.star-rating input[type="radio"]:checked~label,
 	.star-rating input[type="radio"]:checked~label~label {
 		color: #ffc107;
 	}

 	.star-rating label:hover,
 	.star-rating label:hover~label {
 		color: #ffc107;
 	}
 </style>