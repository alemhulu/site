let video,viewTime=0;
function viewTimeCount(){
  viewTime++;
  if(viewTime==300){
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
function intialization() {
  video = document.getElementById("singleVideo");
  video.addEventListener('timeupdate',viewTimeCount,false);

}
window.onload=intialization;
