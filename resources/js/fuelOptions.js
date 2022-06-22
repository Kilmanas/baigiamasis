$(document).ready(function(){
    $("#fuel_type").change(function(){
        var type = $(this).val();
        $.ajax({
            url: '/getoptions',
            type: 'POST',
            data: {fuel:type},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#fuel_option").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    $("#fuel_option").append("<option value='"+id+"'>"+name+"</option>");
                }
            }
        });
    });
});
