
// $('.search-icon').on('click',function(){
//     $('.filter').show()
//     $('.nav2').hide()
// })
// $('.close').on('click',function(){
//     $('.filter').hide()
//     $('.nav2').show()
//     $('#results').empty()
//     ('#results').hide()
// })
// url=$('.filter').data('route')
// // $('#id_filter').on('change',function(){

// //   var tables= $('#id_filter').val();
 
//     $('.search-input').on('input',function(){

//         var tables= $('#id_filter').val();
//         $("#results").empty();  
        
//         var tables= $('#id_filter').val();
//         var search= $('.search-input').val()
//         $.getJSON(
//                  url,
//                  {search:search,table:tables},
//                  function(data){
                    
//                     console.log(tables);
//                     var name;
//                     var image;

//                              if(data.length>0)

//                                     {
//                                         $("#results").empty();  
                                       
//                                         $.each(data,function(key, data) 
//                                             {
                                             
//                                             switch (tables) {
//                                                 case "category":
//                                                     name=data.name
//                                                     image="{{ asset('public/photo/category_logo/')}}/"+data.photo
                                                    
//                                                 break;
//                                                 case "subcategory":
//                                                     name=data.name
//                                                     image="{{ asset('public/photo/category_logo/')}}/image-not-found-99.png";
//                                                 break;
//                                                 case "product":
//                                                     name=data.product_name
//                                                     image="{{asset('public/photo/products_logo/')}}/"+data.photo
//                                                 break;
//                                                 case "user" : 
//                                                     name=data.firstname+' '+data.lastname
//                                                     image="{{asset('public/profile_pic/admin/')}}/"+data.image
//                                                 break;
//                                             }  
//                                             console.log();  
//                                             let url="{{url('admin/')}}";                                                      
//                                             $('<form class="list-group-item" method="POST"> @csrf')
//                                              .append('<a href="'+url+'/'+tables+'/'+data.id+'"; table='+tables+'"><img src="'+image+'" class="rounded-circle" style="width:40px;height:40px;border-radius:50%;"><span style="padding-left:25px">'+name+'</span></a>')
//                                              .appendTo('#results');
//                                             });
//                                         }
                                    

//                                 }
//                 )
                                             
//     })



