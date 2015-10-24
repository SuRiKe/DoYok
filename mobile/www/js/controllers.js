angular.module('doyok.controllers', [])

.controller('AppCtrl', function($scope, $ionicModal, $timeout,datanya) {

  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  // Form data for the login modal
  $scope.loginData = {};

  //Create the login modal that we will use later
  $ionicModal.fromTemplateUrl('templates/login.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
  });
  //console.log($scope.konten);
  // Triggered in the login modal to close it
  $scope.closeLogin = function() {
    $scope.modal.hide();
  };

  // Open the login modal
  $scope.login = function() {
    $scope.modal.show();
  };

  // Perform the login action when the user submits the login form
  $scope.doLogin = function(user) {
  //$scope.respon = [];
  datanya.login(user.username, user.password).then(function(respon){
    //console.log(respon.data.tingkat);
      $scope.respon = respon.data;
    });
  };
  // $scope.respon = 'pelapor';
  // var pelapor = [{"item": "Lapor", "root": "lapor"},
  //     {"item": "Laporan", "root": "laporan"}];
  // var donatur = 
  //     [{"item": "Lihat Rumah", "root": "lihat-rumah"},
  //     {"item": "Donasi", "root": "donasi"}]
  // ;

  // if ($scope.respon == 'pelapor') {
  //   $scope.$apply(function () {
  //       $scope.konten = pelapor;
  //   });
  //   //$scope.konten = pelapor;
  // }else if($scope.respon == 'donatur'){
  //   $scope.konten = donatur;
  // }
  //console.log($scope.konten);
    // function parsing(a) {
    //   return JSON.stringify(a);
    // }
    // $scope.masuk = [];

    // datanya.login().success(function (data) {
    //   $scope.masuk = data;
    // });

    // //$scope.masuk = {"username" : "admin", "password": "admin"};
    
    // if (parsing($scope.loginData) == parsing($scope.masuk)) {
    //   console.log('berhasil login');
    // }else{
    //   console.log('gagal login');
    // }
    //console.log('Doing login', $scope.loginData);

    // Simulate a login delay. Remove this and replace with your login
    // code if using a login system
    // $timeout(function() {
    //   $scope.closeLogin();
    // }, 1000);
})
.controller('HomeCtrl', function($scope, datanya) {
  $scope.playlists = [];
  datanya.all().success(function (data) {
    $scope.statusnya = "BERHASIL";
    $scope.playlists = data;
  }).error(function () {
    $scope.statusnya = "GAGAL";
  });
})
.controller('SekolahCtrl', function($scope, datanya) {
  $scope.sekolah = [];
  datanya.all().success(function (data) {
    //console.log($scope.sekolah);
    $scope.statusnya = "BERHASIL";
    $scope.sekolah = data;
  }).error(function () {
    $scope.statusnya = "GAGAL";
  });
})

.controller('PlaylistCtrl', function($scope, $stateParams) {
});
