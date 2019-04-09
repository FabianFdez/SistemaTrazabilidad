$(document).ready(function() {
  $.get("/infoMapas",function(response){
        
        for(i=0; i<response.length; i++){
        	console.log(response.length);
        	if(response[i].estado === 0) {
                    // NO SE REALIZADO
        		$("#"+ (i+1)).css('fill', 'red');
        	}else if(response[i].estado  === 1){
                    //EN PROCESO
        		$("#"+ (i+1)).css('fill', 'yellow');
        	}else{
                    //LISTO
                 $("#"+ (i+1)).css('fill', 'green');
            }
        }
        
    });
});


$(document).ready(function () {
    $("#usuario").keyup(function () {
        var value = $(this).val();
        $("#email").val(value);
    });
});