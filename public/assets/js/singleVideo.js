
    let media=$('#content').val();
   
function selectId(id){
  return document.getElementById(id);
}

let file_id=selectId("fileId").value;;
let likeButton=selectId('likeButton');

likeButton.addEventListener("click",function(){
        likeDislikeJs();
 });

 //like dislike function
function likeDislikeJs() {
        let buttonId=window.event.target.id;
  let liked=$('#likeButton').hasClass('likeDislike');
  let disliked=$('#dislikeButton').hasClass('likeDislike');

 if (liked==false && disliked==false)
 {
    if(buttonId == 'likeButton')
    {
        $('#likeButton').addClass('likeDislike');
       like=1;
     }
     else if(buttonId == 'dislikeButton' )
     {
        $('#dislikeButton').addClass('likeDislike');
        dislike=1;
     }

 }
 else if (liked == true && disliked == false)
 {
    if(buttonId == 'likeButton')
    {
        $('#likeButton').removeClass('likeDislike');
      like=-1;
    }
    else if(buttonId == 'dislikeButton')
    {
        $('#likeButton').removeClass('likeDislike');
      like=-1;
      $('#dislikeButton').addClass('likeDislike');
        dislike=1;

    }
 }
 else if(liked == false && disliked == true)
 {
  if(buttonId == 'likeButton')
    {
        $('#likeButton').addClass('likeDislike');
       like=1;
      $('#dislikeButton').removeClass('likeDislike');
       dislike=-1;
     }
     else if(buttonId == 'dislikeButton')
    {
        $('#dislikeButton').removeClass('likeDislike');
       dislike=-1;

    }
 }
        $.ajax
    ({
        url:'/file/likeDislike',
            method:'POST',
            data:{"_token": "{{ csrf_token() }}" , file_id:file_id, like:like, dislike:dislike },

            success:function(response)
              {
        document.querySelector('#likeCount').textContent = (' ' + response['like']);
                document.querySelector('#dislikeCount').textContent =(' '+response['dislike']);
                },
             error: function(error)
      {
        alert("Error!  ");
      }
    });
}


