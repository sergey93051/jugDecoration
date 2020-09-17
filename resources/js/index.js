function index(){
    let main_reg = $(".Regform__row");
    let main_log = $(".logform__row");
    let showdown = $(".showdown");


    //show__order
    let main_orders = $('.main__order');
//display:block;
    $(".material-icons").click(function(){
       if(main_reg.css('display')==='block'){
        main_reg.css({
            display:'none'
        });
       }else if(main_log.css('display')==='block'){
          main_log.css({
              display:'none'
         });
       }else if(main_orders.css('display')==='block'){
            main_orders.css({
                       display:'none'
             });
       } 
       if(showdown.css('display')==='block'){
        showdown.css({
            display:'none'
         });
       }
   });

  $('.buyprod').click(function(){
    main_orders.css({
        display:"block"
     });
     if(showdown.css('display')=='none'){
        showdown.css({
         display:'block'
        });
     }
     
  });
    
    $(".singbut").click(function (){
        main_reg.css({
            display:"block"
         });
         if(main_log.css('display')==='block'){
            main_log.css({
                display:'none'
             });
        }
        if(showdown.css('display')==='none'){
           showdown.css({
            display:'block'
           });
        }  
    });
   

    $(".logbut").click(function (){
        main_log.css({
            display:"block"
         })
         if(main_reg.css('display')==='block'){
            main_reg.css({
                display:'none'
             });
        }
        if(showdown.css('display')==='none'){
            showdown.css({
                  display:'block'
            });
        } 
    });
// sing up and log in
}

function catem(){
   let cat_maintext = $(".cat__row__maintext");
   cat_maintext.attr("type","submit");
   $(".hov__show").hover(function(){
        $(this).find('.text__show').animate({
                   height:"160px"
        },1000)
        .css({backgroundColor:"rgba(109, 109, 109, 0.9)"})
        .children("p").animate({ opacity:"1"},2100);
        },function(){
        $(this).find('.text__show').animate({
                  height:"70px"
        },5)
        .css({backgroundColor:"rgba(187, 187, 187, 0.6)"})
        .children("p").animate({ opacity:"0"},150);
    }); 
}
function product(){
    $(".prod__card").hover(function(){
       $(this).css({
            border:"0.5px solid #808080"
        });
        }, function(){
        $(this).css({
            border:"0.5px solid white"
        });
      });
var img = $(".imgshow>img");
img.eq(1).attr("src",img.eq(0).attr("src"))

img.on("click",function(){
         img.eq(0).attr("src", $(this).attr("src")) 
})

  


  
}
export {
     index,
     product,
     catem
} 