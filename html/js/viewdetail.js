$(function(){

	var baseurl = $("#base_url").val();

	$(".viewbtn").on("click",function(){

		var viewid = $(this).data("viewid");
		$.post(baseurl+"ViewDetail/viewdataa/"+viewid,function(data){

			var check = parseJSON(data);
		});
	});

	$(".viewbtn").on("click",function(){

		 var data = {
		 	"class" : $("#class").val(),
		 	"division" : $("#division").val()
		 };

		 $.post(baseurl+"ViewDetail/viewdataa/"+data,function(data){
		 		var check = parseJSON(data);
		 });
	});
});