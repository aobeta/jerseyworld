

function grabit(val){
    
    $.ajax({
            type:"POST",
            data: { input : val },
            url: "suggest.php",
            dataType : "json",
            success: function(data){
                var text = JSON.parse(data);
               
                for(var i =0; i > text.length; i++){
                    document.getElementById("s1").innerHTML = text[i];
                }
            }
            
        });
}