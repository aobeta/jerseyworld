

function grabit(val){
    
    //$("#theList").text(val);
    if(val == ""){
            document.getElementById("theList").style.display = "none";
        }else{
             document.getElementById("theList").style.display = "block";
             $.ajax({
                type:"POST",
                data: { input : val },
                url: "suggest.php",

                success: function(data){
                    if(data == "")
                    {
                        $("#theList").css("display", "none");
                    }else{
                        $("#theList").css("display", "block");
                        $("#theList").html(data);
                    }
            }
            
        });
        }
    
       
        
}

function displaythis(p){
    document.getElementById("searchtext").value = p.innerHTML;
    document.getElementById("theList").style.display = "none";
}
