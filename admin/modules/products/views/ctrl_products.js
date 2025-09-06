//blank line is required
app.controller("ctrl_products", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });

  $scope.loader = function () {
    $http.get("products/view_data").success(function (data) {
      $scope.datadb = data;
    });
    $http.get("products/view_featured").success(function (data) {
      $scope.datafeatured = data;
    });
    $http.get("products/view_newarrival").success(function (data) {
      $scope.datanewarrival = data;
    });
  };
  $scope.loader();

  $scope.options = {
    height: 100,
    toolbar: [
      ["style", ["style", "bold", "italic", "underline"]],
      ["fontname", ["fontname"]],
      ["fontsize", ["fontsize"]],
      ["color", ["color"]],
      ["table", ["table"]],
      ["insert", ["link"]],
      ["view", ["codeview"]],
    ],
  };

  $scope.update_call = function (y) {
    $("#productModal").modal("show");
    $scope.x = y;
    $scope.x.status = y.status == "1";
  };

  $scope.close_modal = function () {
    $("#productModal").modal("hide");
    $scope.filter_new();
  };

  $scope.filter_new = function () {
    $scope.x = {};
  };

  $scope.add_to_ft = function (p_id) {
    $http({
      method: "POST",
      url: "products/add_to_featured",
      data: $.param({ p_id: p_id }),
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
    }).then(function (response) {
      if (response.data == 1) {
        messages("success", "Success!", "Added to Featured Products", 2000);
        $scope.loader();
      } else if (response.data == 2) {
        messages("danger", "Warning!", "Product already added", 2000);
      } else {
        messages("danger", "Warning!", "Process failed", 2000);
      }
    });
  };

  $scope.add_to_na = function (p_id) {
    $http({
      method: "POST",
      url: "products/add_to_new_arrival",
      data: $.param({ p_id: p_id }),
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
    }).then(function (response) {
      if (response.data == 1) {
        messages("success", "Success!", "Added to New Arrival Products", 2000);
        $scope.loader();
      } else if (response.data == 2) {
        messages("danger", "Warning!", "Product already added", 2000);
      } else {
        messages("danger", "Warning!", "Process failed", 2000);
      }
    });
  };

  $scope.save_data = function (y) {
    $("#form1").ajaxForm({
      type: "POST",
      url: "products/save_data",
      beforeSend: function () {
        $("#submitbtn").attr("disabled", true);
        $("#webprogress").css("display", "inline");
      },
      success: function (data) {
        console.log(data);
        if (data == "1") {
          $scope.loader();
          messages(
            "success",
            "Success!",
            "Product details Saved Successfully",
            3000
          );
          $scope.filter_new();
          $("#productModal").modal("hide");
        } else if (data == "0") {
          messages("warning", "Info!", "No Data Affected", 3000);
        } else {
          messages("danger", "Warning!", data, 4000);
        }
        $("#webprogress").css("display", "none");
        $("#submitbtn").attr("disabled", false);
      },
    });
  };
  $scope.delete_data = function (p_id) {
    if (
      confirm(
        "Deleting Product details may hamper your data associated with it."
      )
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http.get("products/delete_data?p_id=" + p_id).success(function (data) {
          console.log(data);
          if (data == "1") {
            messages(
              "success",
              "Success!",
              "Product details Deleted Successfully",
              3000
            );
          } else {
            messages("danger", "Warning!", "Product details not Deleted", 4000);
          }
          $scope.loader();
        });
      }
    }
  };
  $scope.delete_f_data = function (p_id) {
    if (
      confirm(
        "Are you sure you want to remove this product from featured products?"
      )
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http
          .get("products/delete_f_data?p_id=" + p_id)
          .success(function (data) {
            console.log(data);
            if (data == "1") {
              messages(
                "success",
                "Success!",
                "Product details Deleted Successfully",
                3000
              );
            } else {
              messages(
                "danger",
                "Warning!",
                "Product details not Deleted",
                4000
              );
            }
            $scope.loader();
          });
      }
    }
  };
  $scope.delete_na_data = function (p_id) {
    if (
      confirm(
        "Are you sure you want to remove this product from new arrival products?"
      )
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http
          .get("products/delete_na_data?p_id=" + p_id)
          .success(function (data) {
            console.log(data);
            if (data == "1") {
              messages(
                "success",
                "Success!",
                "Product details Deleted Successfully",
                3000
              );
            } else {
              messages(
                "danger",
                "Warning!",
                "Product details not Deleted",
                4000
              );
            }
            $scope.loader();
          });
      }
    }
  };
});
