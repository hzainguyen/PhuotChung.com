$(document).ready(function(){
	$('#btn-grid').click(function(){
		console.log("ok" );
		$('#grid-model').hide();
		$('#list-model').show();
		console.log("ok");
	});
	$('#btn-list').click(function(){
		console.log("ok");
		$("#list-model").hide();
		$("#grid-model").show();
	});
	var bol = 0;
	$("#btn-filter").click(function(){
		if(bol == 0){
			$("#filter").css("display","none");
			bol = 1;
		}
		else{
			$("#filter").css("display","block");
			bol = 0;
		}
	});
});