let video,viewTime,file_id,like,dislike;
function viewTimeCount(){
  viewTime++;
  if(viewTime==30){
    $.ajax
      ({
        url: '/view',
        method: 'Get',
        data: { file_id: file_id },
        success: function (response) {
        },
        error: function (error) {
          alert("Error!  ");
        }
      });
    video.removeEventListener('timeupdate',viewTimeCount,false);
  }
}
function endVideoTime(){
  $.ajax
    ({
      url: '/view',
      method: 'Get',
      data: { file_id: file_id },
      success: function (response) {
      },
      error: function (error) {
        alert("Error!  ");
      }
    });
}
function likeFunction(){
  $('.likeGroup').toggleClass('likeDislike');
  if($('.likeGroup').hasClass('likeDislike')){
      like++;
      if($('.dislikeGroup').hasClass('likeDislike')){
          dislike--;
          $('.dislikeGroup').toggleClass('likeDislike');
      }
  }
  else{
      like--;
      
  }
  likeDislikeToServer();
}
function dislikeFunction(){
  $('.dislikeGroup').toggleClass('likeDislike');  
  if ($('.dislikeGroup').hasClass('likeDislike')){
      dislike++;
      if($('.likeGroup').hasClass('likeDislike')){
          like--;
          $('.likeGroup').toggleClass('likeDislike');
      }
  }
  else{
    dislike--;
  }
  likeDislikeToServer();
}
function likeDislikeToServer() {
  $.ajax
    ({
      url: '/file/likeDislike',
      method: 'GET',
      data: { file_id: file_id, like: like, dislike: dislike },

      success: function (response) {
        document.querySelector('#likeCount').textContent = (' ' + response['like']);
        document.querySelector('#dislikeCount').textContent = (' ' + response['dislike']);
      },
      error: function (error) {
        alert("Error!  ");
      }
    });
}
function intialization() {
  viewTime = 0;
  video = document.getElementById("singleVideo");
  file_id = document.getElementById('fileId').value;
  likeButton= document.getElementById('likeButton');
  dislikeButton=document.getElementById('dislikeButton');
 
  

  video.addEventListener('timeupdate',viewTimeCount,false);
  video.addEventListener('ended',endVideoTime,false);
  likeButton.addEventListener('click',likeFunction,false);
  dislikeButton.addEventListener('click',dislikeFunction,false);

}
window.onload=intialization;



 
    



