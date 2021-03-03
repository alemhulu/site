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
function intialization() {
  viewTime = 0;
  like = 0;
  dislike = 0;
  video = document.getElementById("singleVideo");
  file_id = document.getElementById('fileId').value;
  

  video.addEventListener('timeupdate',viewTimeCount,false);
  video.addEventListener('ended',endVideoTime,false);

}
window.onload=intialization;



 
    



