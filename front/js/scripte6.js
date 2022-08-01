$(document).ready(function(){

    /*- è¨€èªžåˆ‡ã‚Šæ›¿ãˆ -*/
        $("dl.lng-select>dt").addClass("close");
        $("dl.lng-select").click(function(){
            if($("dt",this).attr("class") == "close"){
                $("dd",this).slideDown("fast");
                $("dt",this).removeClass();
                $("dt",this).addClass("open");
            }else{
                $("dd",this).slideUp("fast");
                $("dt",this).removeClass();
                $("dt",this).addClass("close");
            }
        });
        $("dl.lng-select").mouseleave(function(){
            $("dd",this).slideUp("fast");
            $("dt",this).removeClass();
            $("dt",this).addClass("close");
        });
        
        $(document).scroll(function () {
            $(".lng-select>dd").slideUp("fast");
            $("dt",this).removeClass();
            $("dt",this).addClass("close");
        });
        
    /*- é–¢é€£ã‚¢ãƒ—ãƒª -*/
        $(".relate-btn").click(function(){
            $(".relate-app").slideDown("fast");
        });
        $(".relate-app span").click(function(){
            $(".relate-app").hide();
        });
        
    });
    
    
    