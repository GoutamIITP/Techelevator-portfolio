<style>
	.panel-list li ul li {
		padding: 5px 20px 5px 20px;
	}
</style>
<div id="hoeapp-container" hoe-lpanel-effect="default">
	<aside id="hoe-left-panel" hoe-position-type="absolute"
		style="height: 50px; overflow: scroll">
		<div class="profile-box">
			<div class="media">
				<a class="pull-left" href="#/home" style="text-decoration: none">
					<div class="media-body">
						<h5 class="media-heading">
							Welcome! <b style="color: #06f"><?= $this->session->userdata('name'); ?></b>
						</h5>
						<small style="color: #06f">Administrator</small>
					</div>
				</a>
			</div>
		</div>
		<ul class="nav panel-list">

			<li><a accesskey="h" href="#/home"><i class="fa fa-dashboard"></i>
					<span class="menu-text">Das<u><b>h</b></u>board
					</span><span class="selected"></span></a>
			</li>
			<li class="sidepadding"><a accesskey="u" href="#/users"><i
						class="fa fa-users"></i><span class="menu-text">Users</span><span
						class="selected"></span></a></li>
			<li class="sidepadding"><a accesskey="u" href="#/products"><i
						class="fa fa-cubes"></i><span class="menu-text">Products</span><span
						class="selected"></span></a></li>
			<li class="sidepadding"><a accesskey="u" href="#/wreviews"><i
						class="fa fa-users"></i><span class="menu-text">Website Reviews</span><span
						class="selected"></span></a></li>
			<!-- <li class="sidepadding"><a accesskey="u" href="#/reviews"><i
						class="fa fa-users"></i><span class="menu-text">Product Reviews</span><span
						class="selected"></span></a></li> -->
			<li class="sidepadding"><a accesskey="u" href="#/users"><i
						class="fa fa-users"></i><span class="menu-text">Users</span><span
						class="selected"></span></a></li>
			<li class="sidepadding"><a accesskey="u" href="#/users"><i
						class="fa fa-users"></i><span class="menu-text">Users</span><span
						class="selected"></span></a></li>
		</ul>
	</aside>
	<section id="main-content">