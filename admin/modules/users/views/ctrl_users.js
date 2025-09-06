//blank line is required
app.controller("ctrl_users", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });

  $scope.loader = function () {
    $http.get("users/view_data").success(function (data) {
      $scope.datadb = data;
    });
  };

  $scope.loader();
  $scope.update_call = function (y) {
    $("#usersModal").modal("show");
    $scope.x = y;
    $scope.x.status = y.status == "1";
  };

  $scope.close_modal = function () {
    $("#usersModal").modal("hide");
    $scope.filter_new();
  };

  $scope.filter_new = function () {
    $scope.x = {};
  };

  $scope.save_data = function (y) {
    $("#form1").ajaxForm({
      type: "POST",
      url: "users/save_data",
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
            "Users details Saved Successfully",
            3000
          );
          $scope.filter_new();
          $("#usersModal").modal("hide");
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
  $scope.delete_data = function (user_id) {
    if (
      confirm("Deleting users details may hamper your data associated with it.")
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http.get("users/delete_data?user_id=" + user_id).success(function (data) {
          console.log(data);
          if (data == "1") {
            messages(
              "success",
              "Success!",
              "Users details Deleted Successfully",
              3000
            );
          } else {
            messages("danger", "Warning!", "Users details not Deleted", 4000);
          }
          $scope.loader();
        });
      }
    }
  };
});
