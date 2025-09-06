<div class="inner-content">
    <div class="panel theme-panel">
        <div class="panel-heading">
            <span class="panel-title">
                <h2>Dashboard</h2>
            </span>
        </div>
        <div class="panel-body">
            <div class="row clearfix">
                <div class="col-md-3 column" ui-sref="users">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-users"></i></span>
                        <h5>Users</h5>
                        <label><b>{{users}}</b> users</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="products">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-cubes"></i></span>
                        <h5>Products</h5>
                        <label><b>{{products}}</b> products</label>
                    </div>
                </div>
                <!-- <div class="col-md-3 column" ui-sref="wreviews">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-users"></i></span>
                        <h5>Website Reviews</h5>
                        <label><b>{{reviews}}</b> reviews</label>
                    </div>
                </div> -->
                <div class="col-md-3 column" ui-sref="wreviews">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-users"></i></span>
                        <h5>Product Reviews</h5>
                        <label><b>{{wreviews}}</b> wreviews</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="users">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-users"></i></span>
                        <h5>Featured Products</h5>
                        <label><b>{{users}}</b> users</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="users">
                    <div class="feature-box box-shadow">
                        <span class="feature-icon"><i class="fa fa-users"></i></span>
                        <h5>Newly Arrived Products</h5>
                        <label><b>{{users}}</b> users</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre>

                    </pre>
</div>
<style>
    .column {
        cursor: pointer;
    }
</style>