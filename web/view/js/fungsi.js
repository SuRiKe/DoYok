function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			document.getElementById('image').src=e.target.result;
	}
		reader.readAsDataURL(input.files[0]);
	}
}
$( document ).ready(function() {
    $(".harga").formatCurrency();
	
	$(".jumlah").keyup(function(){
		var total = $(".hargax").val() * $(this).val();
		$(".total").val(total).formatCurrency();
	});
});