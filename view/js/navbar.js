// console.log("selam")
$(document).on("click", ".dropdown", function(){
   // console.log("Kontrol")
    var $drpdwncontent = $(".dropdown-content")
    if($drpdwncontent.css('display') == 'none'){ 
        $drpdwncontent.show('slow'); 
     } else { 
        $drpdwncontent.hide('slow'); 
     }
})
