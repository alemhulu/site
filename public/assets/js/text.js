// $(document).ready(function(){
// $("#but_upload").on('click',function(e) {
//       e.preventDefault();
//         var fd = new FormData();
//         var files = $('#file')[0].files[0];
//         fd.append('file',files);

//         $.ajax({
//             url: '/grades',
//             type: 'post',
//             data: fd,
//             contentType: false,
//             processData: false,
//             success: function(response){
//                 if(response != 0){
//                     $("#img").attr("src",response); 
//                     $(".preview img").show(); // Display image element
//                 }else{
//                     alert('file not uploaded');
//                 }
//             },
//         });
//     });
// });
