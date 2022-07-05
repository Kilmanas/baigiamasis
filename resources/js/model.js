$(document).ready(function(){
    $("#car_make_id").change(function(){
        var makeId = $(this).val();
        console.log("veikia");
        $.ajax({
            url: '/getmodels',
            type: 'POST',
            data: {make:makeId},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#car_model_id").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    $("#car_model_id").append("<option value='"+id+"'>"+name+"</option>");
                }
            }
        });
    });
});
