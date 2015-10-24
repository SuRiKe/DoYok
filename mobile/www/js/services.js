angular.module('doyok.services', [])

.factory('datanya', function ($http) {
  var fun = {};
  fun.all = function () {
    return $http.get('http://36.86.242.167/doyok/web/services/kms');
  };
  fun.login = function (username, password) {
  	return $http.get("http://ngode.com/doyok/services/login?username='"+ username +  "'&password=" + password);//, user).then(function (status) {
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