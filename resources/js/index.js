function index(){
    let main_reg = $(".Regform__row");
    let main_log = $(".logform__row");
    let showdown = $(".showdown")
//display:block;
    $(".material-icons").click(function(){
       if(main_reg.css('display')==='block'){
        main_reg.css({
            display:'none'
        })
       }else if(main_log.css('display')==='block'){
          main_log.css({
              display:'none'
         })
       } 
       if(showdown.css('display')==='block'){
        showdown.css({
            display:'none'
         })
       }
   });
    
    $(".singbut").click(function (){
        main_reg.css({
            display:"block"
         })
         if(main_log.css('display')==='block'){
            main_log.css({
                display:'none'
             })
        }
        if(showdown.css('display')==='none'){
           showdown.css({
            display:'block'
           })
        }  
    });
   
    $(".logbut").click(function (){
        main_log.css({
            display:"block"
         })
         if(main_reg.css('display')==='block'){
            main_reg.css({
                display:'none'
             })
        }
        if(showdown.css('display')==='none'){
            showdown.css({
                  display:'block'
            })
        } 
    });
// sing up and log in




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
    //   $("#main__page__product>div>div").click(function (){
    //        alert($(this).attr("id"));
    //   })
    
  //info
  
  var img = $(".imgshow>img");

img.eq(1).attr("src",img.eq(0).attr("src"))

      img.on("click",function(){
         img.eq(0).attr("src", $(this).attr("src")) 
      })

  


  
}
export {
     index,
     product
} 