<div class="heading">
    <ol class="breadcrumb">
        <li><a href="#/">Dashboard</a></li>
        <li><a href="javascript:void(0)">Product</a></li>
    </ol>
</div>
<div class="col-sm-12 well">
    <div class="table_horizontal">
        <h4 style="background-color: grey;color:white; padding: 20px;">All Products</h4>
        <div class="row">
            <div class="col-xs-9">
                <div class="input-group custom_addon">
                    <div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;">
                        <i class="fa fa-search"></i>
                    </div>
                    <input type="text" ng-model="search_text" placeholder="Search here...">
                </div>
            </div>
            <div class="col-xs-3 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
                    Add product
                </button>
            </div>
        </div>
    </div>
    <div class="table-data">
        <div class="table-responsive-custom table1">
            <table class="table table-hover">
                <thead>
                    <tr class="active">
                        <th>SL No.</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Add</th>
                        <th style="width:85px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
                        <td>{{$index + 1}}</td>
                        <td>{{y.name}}</td>
                        <td>{{y.description}}</td>
                        <td>{{y.price}}</td>
                        <td>{{y.discount}}%</td>
                        <td>{{y.price - (y.price * y.discount / 100) | number:2}}</td>
                        <td><img src="<?= base_url("assets/uploads/products/thumbnail/thumb/") ?>{{y.image}}" alt="loading" loading="lazy" style="height:50px;width:50px;"></td>
                        <td>
                            <div style="height:25px;width:25px;border-radius:50%;background:red" ng-if="y.status == '0'">
                            </div>
                            <div style="height:25px;width:25px;border-radius:50%;background:green" ng-if="y.status == '1'">
                            </div>
                        </td>
                        <td>
                            <span ng-if="y.status == 0">
                                Enable status to add to featured or arrivals
                            </span>
                            <span ng-if="y.status == 1">
                                <button class="btn btn-primary" ng-click="add_to_ft(y.p_id)" style="margin-bottom:5px; width:100%">Add to featured</button>
                                <button class="btn btn-primary" ng-click="add_to_na(y.p_id)" style="width: 100%;">Add to New Arrivals</button>
                            </span>
                        </td>
                        <td>
                            <a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal"
                                data-target=".bs-example-modal-sm">
                                <span class="fa fa-pencil fa-2x"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="javascript:void(0)" style="color:red" ng-click="delete_data(y.p_id)">
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

<div class="col-sm-12 well">
    <div class="table_horizontal">
        <h4 style="background-color: grey;color:white; padding: 20px;">Featured Products</h4>
        <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
                <div class="input-group custom_addon">
                    <div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i></div>
                    <input type="text" ng-model="search_text_featured" placeholder="Search featured...">
                </div>
            </div>
        </div>
        <div class="table-data">
            <div class="table-responsive-custom">
                <table class="table table-hover">
                    <thead>
                        <tr class="active">
                            <th>SL No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Net Amount</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="f in datafeatured | filter: search_text_featured | itemsPerPage: 10" pagination-id="featured">
                            <td>{{$index + 1}}</td>
                            <td>{{f.name}}</td>
                            <td>{{f.price}}</td>
                            <td>{{f.discount}}%</td>
                            <td>{{f.price - (f.price * f.discount / 100) | number:2}}</td>
                            <td><img src="<?= base_url("assets/uploads/products/thumbnail/thumb/") ?>{{f.image}}" style="height:50px;width:50px;"></td>
                            <td>
                                <div style="height:25px;width:25px;border-radius:50%;background:red" ng-if="f.f_status == '0'"></div>
                                <div style="height:25px;width:25px;border-radius:50%;background:green" ng-if="f.f_status == '1'"></div>
                            </td>
                            <td> <a href="javascript:void(0)" style="color:red" ng-click="delete_f_data(f.p_id)">
                                    <span class="fa fa-trash fa-2x"></span>
                                </a></td>
                        </tr>
                    </tbody>
                </table>
                <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)"
                    template-url="app/pagination" pagination-id="featured"></dir-pagination-controls>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 well">
    <div class="table_horizontal">
        <h4 style="background-color: grey;color:white; padding: 20px;">New Arrival Products</h4>
        <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
                <div class="input-group custom_addon">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" ng-model="search_text_newarrival" placeholder="Search new arrivals...">
                </div>
            </div>
        </div>
        <div class="table-data">
            <div class="table-responsive-custom">
                <table class="table table-hover">
                    <thead>
                        <tr class="active">
                            <th>SL No.</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="n in datanewarrival | filter: search_text_newarrival | itemsPerPage: 10" pagination-id="newarrival">
                            <td>{{$index + 1}}</td>
                            <td>{{n.name}}</td>
                            <td>{{n.price}}</td>
                            <td>{{n.discount}}%</td>
                            <td>{{n.price - (n.price * n.discount / 100) | number:2}}</td>
                            <td><img src="<?= base_url("assets/uploads/products/thumbnail/thumb/") ?>{{n.image}}" style="height:50px;width:50px;"></td>
                            <td>
                                <div style="height:25px;width:25px;border-radius:50%;background:red" ng-if="n.na_status == '0'"></div>
                                <div style="height:25px;width:25px;border-radius:50%;background:green" ng-if="n.na_status == '1'"></div>
                            </td>
                            <td><a href="javascript:void(0)" style="color:red" ng-click="delete_na_data(n.p_id)">
                                    <span class="fa fa-trash fa-2x"></span>
                                </a></td>
                        </tr>
                    </tbody>
                </table>
                <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)"
                    template-url="app/pagination" pagination-id="newarrival"></dir-pagination-controls>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" ng-click="close_modal()">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="productModalLabel">Add product</h4>
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
        min-width: 1000px;
    }

    .table1 th:nth-child(3),
    .table1 td:nth-child(3) {
        width: 350px;
        max-width: 500px;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
        word-break: break-word;
    }

    .table-responsive-custom th:nth-child(7),
    .table-responsive-custom td:nth-child(7) {
        width: 100px;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
        word-break: break-word;
    }
</style>