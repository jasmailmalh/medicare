$(document).ready(function(){
	$("#loaddata").click(function(){
		$.ajax({
			url:"dhandle.php",
			method:"post",
			success:function(data){
				$(".result").html(data);

			}
		});
		
	});
	$("#submit1").submit(function(e){
		e.preventDefault();
		alert("data submit")
     		
	});