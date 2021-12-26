


function onClickComment(event) {
    event.preventDefault();
    $("#comment").toggle(1000)
}
function onClickShowHideComment(event) {
    event.preventDefault();
    $("#comment").hide(1000)
    $("#listComment").toggle(1000)
}




function onClickPostComment(event) {
    console.log('1111111111');
}


/************************* prg principal ******/

$('.btnShowHide').on('click', onClickShowHideComment)
// $(document).on('click', '#postComment', onClickPostComment)

let comment = document.querySelectorAll('.btnComment');
let replay = document.querySelectorAll('.replay');
let textComment = document.querySelectorAll('.textComment');
let post = document.querySelectorAll('.postComment');
let switches = document.querySelectorAll("#flexSwitchCheckDefault");


for (let index = 0; index < comment.length; index++) {

  
     comment[index].addEventListener("click", function (event) {
                event.preventDefault();
                $(replay[index]).toggle(1000)
         })
    post[index].addEventListener("click", function (event) {
            event.preventDefault();
            let commentid=$(textComment[index]).data('id');
            let txt = $(textComment[index]).val();
            let news_id = $(textComment[index]).data('index');
            $.get(
              'Comment',
              { description: txt, news_id: news_id,comments_id:commentid },
              function (data){
                   
                    location.reload();
                    $(".listComment").show(1000)
                }
            )
         })

}

for(let i=0;i<switches.length;i++){

    switches[i].addEventListener("change",function(){
       
        let id=$(this).data('index');
        let change=$(this)
        console.log(id);
        $.get(
            "Comment/status",
            { data: id },
        )
    })

}
$(".totallike").on('click',function(event){
    event.preventDefault()
   
    $("#menu").toggle()
})

$(".listlove").on('click',function(event){
    event.preventDefault()
    $(".listlike").css({'color':'Gainsboro'})
    $(".listlove").css({'color':"red"})
    $(".personLike").hide(1000)
    $(".personLove").show(1000)
})
$(".listlike").on('click',function(event){
    event.preventDefault()
    $(".listlike").css({'color':'blue'})
    $(".listlove").css({'color':"Gainsboro"})
    $(".personLove").hide(1000)
    $(".personLike").show(1000)
})







