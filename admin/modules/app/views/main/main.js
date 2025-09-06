var app = angular.module("groveusCms", [
  "ui.bootstrap",
  "ui.router",
  "summernote",
  "angularUtils.directives.dirPagination",
]);
app.config(function ($stateProvider, $urlRouterProvider) {
  $urlRouterProvider.otherwise("/home");
  $stateProvider
    .state("home", {
      url: "/home",
      templateUrl: "dashboard/admin",
      controller: "ctrl_dashboard",
    })
    .state("plan", {
      url: "/plan",
      templateUrl: "plan",
      controller: "ctrl_plan",
    })
    .state("users", {
      url: "/users",
      templateUrl: "users",
      controller: "ctrl_users",
    })
    .state("admin_profile", {
      url: "/admin_profile",
      templateUrl: "admin_profile",
      controller: "ctrl_admin",
    })
    .state("change_logo", {
      url: "/change_logo",
      templateUrl: "change_logo",
      controller: "ctrl_change_logo",
    })

    .state("change_password", {
      url: "/change_password",
      templateUrl: "login/change_password",
      controller: "ctrl_login",
    })
    .state("logs", {
      url: "/logs",
      templateUrl: "logs",
      controller: "ctrl_logs",
    })

    // Newly added states 
    .state("products", {
      url: "/products",
      templateUrl: "products",
      controller: "ctrl_products",
    })
    .state("reviews", {
      url: "/reviews",
      templateUrl: "reviews",
      controller: "ctrl_reviews",
    })
    .state("wreviews", {
      url: "/wreviews",
      templateUrl: "wreviews",
      controller: "ctrl_wreviews",
    });
});
