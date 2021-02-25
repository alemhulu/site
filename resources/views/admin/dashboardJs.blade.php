<script src="/assets/js/jQuery3.5.1.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!-- Grade Add Ajax -->
<script>
  var gradeSellect=document.getElementById("gradeChange");
    $(document).ready( function () {
    $('#grade').on('click',function(e) {
      e.preventDefault();

      $.ajax({
          type:"POST",
          url: "/grades",
          data: $('#addGradeForm').serialize(),

          success: function(response){
              alert("Grade Created");
             gradesHTML(response);
              },

          error: function(error){
              alert("Error!  Grade creation is Failed");
          }
      });
      function gradesHTML(grades){
               var optionGrade='<option value="0" disabled selected>Select Grade</option>';
               for(i=0;i<grades.length;i++){
                     optionGrade+="<option value="+grades[i].id+" >"+grades[i].name+"</option>";
                }
                $('#gradeChange').html(optionGrade);
                $('#unitChange').empty();
                $('#subunitChange').empty();
           } 
      });
  });
</script>  

<!-- Course Add Ajax -->
<script >
  $(document).ready( function () {
      $('#course').on('click',function(e) {
          e.preventDefault();
          
          $.ajax({
              url: "/courses",
              type:"POST",
              data: $('#addCourseForm').serialize(),

              success: function(response){
                      alert("Course successfully Created");
                      coursesHTML(response);
                  },

               error: function(error){
                      alert("Error! Failed to create Course Please try again.");
                  }
              });
          function coursesHTML(courses){
               var optionCourse='<option value="0" disabled selected>Select course</option>';
               for(i=0;i<courses.length;i++){
               optionCourse+="<option value="+courses[i].id+" >"+courses[i].name+"</option>";
             }
            $('#courseChange').html(optionCourse);
            $('#unitChange').empty();
            $('#unitChange').empty();
          }
        });
    });
</script> 

<!-- Unit Add Ajax -->
<script >
  $(document).ready( function () {
      $('#unit').on('click',function(e) {
          e.preventDefault();

          $.ajax({
              type:"POST",
              url: "/units",
              data: $('#addUnitForm').serialize(),

              success: function(response){
                    alert("Unit Created");
                    unitsHTML(response);
                },

                error: function(xhr, status, error) {
                     alert(xhr.responseText);
            }
       });

          function unitsHTML(units){
            var optionUnit='<option value="0" disabled selected>Select Unit</option>';
            for(i=0;i<units.length;i++){
              optionUnit+="<option value="+units[i].id+" >"+"Unit "+units[i].name+"-    " +units[i].title+"</option>";
            }
          $('#unitChange').html(optionUnit);
          }
        });
    });
</script> 


<!--Sub-unit Ajax-->
<script >
  $(document).ready( function () {
      $('#subunit').on('click',function(e) {
          e.preventDefault();

          $.ajax({
              type:"POST",
              url: "/subunits",
              data: $('#addSubUnitForm').serialize(),

              success: function(response){
                    alert("Unit Created");
                    subunitsHTML(response);
                  },

                  error: function(error){
                  alert("Error occured while creating Sub-unit");
                }
              });

           function subunitsHTML(subunits){
            var optionsubUnit='<option value="0" disabled selected>Select Sub-Unit</option>';
            for(i=0;i<subunits.length;i++){
                  optionsubUnit+="<option value="+subunits[i].id+" >"+"SubUnit "+subunits[i].name+" -  " +subunits[i].title+"</option>";
            }

            $('#subunitChange').html(optionsubUnit);
          }
        });
    });
</script> 


<!-- Content Type  Add Ajax-->
<script >
    $(document).ready( function () {
    $('#type').on('click',function(e) {
      e.preventDefault();

      $.ajax({
          type:"POST",
          url: "/types",
          data: $('#addTypeForm').serialize(),

        success: function(response){
              alert("Content type Created");
              typeChangeHTML(response);
          },
    
        error: function(error){
             alert("Error occured while creating Content Type");
         }
      });
       function typeChangeHTML(content){
            var optionContent='<option value="0" disabled selected>Content Type</option>';
            for(i=0;i<content.length;i++){
              optionContent+='<option value="'+content[i].id+'" >'+content[i].name+"</option>";
           }
            $('#typeChange').html(optionContent);
            
          }
    });
  });
</script>   

<!-- Media Type  Add Ajax-->
<script >
    $(document).ready( function () {
    $('#media').on('click',function(e) {
      e.preventDefault();

      $.ajax({
          type:"POST",
          url: "/medias",
          data: $('#addMediaForm').serialize(),
          success: function(response){
                alert("Media type Created");
                mediaChangeHTML(response);
        },
         error: function(error){
             alert("Error Occered while creating a Media Type");
            }
      });
       function mediaChangeHTML(media){
           
            var optionMedia='<option value="0" disabled selected>Media Type</option>';
            for(i=0;i<media.length;i++){
              optionMedia+='<option value="'+media[i].id+'" >'+media[i].name+"</option>";
              }
            $('#mediaChange').html(optionMedia);
          }
    });
  });

</script> 


<!-- Add Resources  -->
<script >
  var form= document.getElementById('addResourceForm');
    $(document).ready( function () {
    $('form').on('submit',function(e) {
      e.preventDefault();
      var formdata = new FormData(form);
      $.ajax({
          type:"POST",
          url: "resources",
          data: formdata,
           processData: false,
          contentType: false,
          cache: false,
      
          success: function(response){
            $("#loader").hide();
            document.getElementById('description').value = '';
            document.getElementById('link1').value = 0;
            document.getElementById('link2').value = 1;
            document.getElementById('thumbnailLocation').value = 'Thumbnail Location';
            document.getElementById('fileLocation').value = 'File Location';
            alert("Resource Uploaded");
          },
          error: function(error){
            $("#loader").hide();
          alert("Error! Occured while uploading Resource!");
          }
          });
      });
  });
</script>  


 <!--Filter courses by selected grade-->
<script >
  $(document).ready( function () {
      $('#gradeChange').on('change',function() {
          let id = $(this).val();
           $.ajax({
              type:"GET",
              url: 'courses',
              data: {id},
              success: function(response){
                  var optionCourse='<option value="0" disabled selected>Select Course</option>';
                  for(i=0;i<response.length;i++){
                         optionCourse+="<option value="+response[i].id+">"+response[i].name+"</option>";
                   }
                  $('#courseChange').html(optionCourse);
                  $('#unitChange').empty();
                  $('#subunitChange').empty();
               }
            });
      var grade=document.getElementById("gradeChange");
      var displaytext=grade.options[grade.selectedIndex].text;  
      var displayvalue=grade.options[grade.selectedIndex].value;
     document.getElementById("gradeValue").value=displaytext;
     document.getElementById("grade_id").value=displayvalue;

       });
  });
</script> 

 <!-- Filtered Units by selected course-->
  <script >
  $(document).ready( function () {
      $('#courseChange').on('change',function() {
          let id = $(this).val();
          $.ajax({
              type:"GET",
              url: 'units',
              data: {id},
              success: function(response){
                 
                  var optionUnit='<option value="0" disabled selected>Select Unit</option>';
                  for(i=0;i<response.length;i++){
                         optionUnit+="<option value="+response[i].id+">"+'Unit-'+response[i].name+' '+response[i].title+"</option>";
                   }
                  $('#unitChange').html(optionUnit);
                  $('#subunitChange').empty();
               }
            });
     var course=document.getElementById("courseChange");
      var displaytext=course.options[course.selectedIndex].text;  
      var displayvalue=course.options[course.selectedIndex].value;
     document.getElementById("courseValue").value=displaytext;
     document.getElementById("course_id").value=displayvalue;
       });
  });
</script> 

<!-- Filter Sub-Units by selected Units -->
<script >
  $(document).ready( function () {
      $('#unitChange').on('change',function() {
          let id = $(this).val();
          $.ajax({
              type:"GET",
              url: '/subunits',
              data: {id},
              success: function(response){
                var optionsubunit='<option value="0" disabled selected>Select Subunit</option>';
                  for(i=0;i<response.length;i++){
                         optionsubunit+="<option value="+response[i].id+">Subunit - "+response[i].name+" "+response[i].title+"</option>";
                   }
                  $('#subunitChange').html(optionsubunit);
               }
            });
      var unit=document.getElementById("unitChange");
      var displaytext=unit.options[unit.selectedIndex].text;  
      var displayvalue=unit.options[unit.selectedIndex].value;
     document.getElementById("unitValue").value=displaytext;
     document.getElementById("unit_id").value=displayvalue;
       });
  });
</script> 
