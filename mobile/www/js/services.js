angular.module('doyok.services', [])

.factory('datanya', function ($http) {
  var fun = {};
  fun.all = function () {
    return $http.get('http://192.168.173.190/doyok/web/services/kms');
  };
  fun.login = function (username, password) {
  	return $http.get("http://192.168.173.190/doyok/services/login?username='"+ username +  "'&password=" + password);//, user).then(function (status) {
      //console.log(status.data);
      // if (status.data.status == "Success"){
      //   console.log('berhasil');
      // }else{
      //   console.log('gagal');
      // }
    //});
  };
  return fun;
});