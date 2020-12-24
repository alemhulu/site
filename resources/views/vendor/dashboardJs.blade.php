<script>
$(document).ready(function(){

    $(".resource_check").click(function(){
        var action = 'data';
        var grade_id = get_filter_text('gradeId');
        var course_id = get_filter_text('courseId');
        var unit_id = get_filter_text('unitId');
        var subunit_id = get_filter_text('subunitId');
        var type_id = get_filter_text('typeId');
        var media_id = get_filter_text('mediaId');
        
        $.ajax({
            url:'moeuser',
            method:'POST',
            
            data:{"_token": "{{ csrf_token() }}",action:action, grade_id:grade_id, course_id:course_id, unit_id:unit_id, subunit_id:subunit_id, type_id:type_id, media_id:media_id},
            success:function(response){
                $('#result').empty();
               $('#result').html(response);
            }
        });
    });
       function get_filter_text(text_id){
       var filterData = [];
       $('#'+text_id+':checked').each(function(){
           filterData.push($(this).val());
        });
        return filterData;
       }
    });
    </script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

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
            alert("Resource Uploaded");
          },
          error: function(error){
            $("#loader").hide();
          alert("resource exist!");
          }
          });
      });
  });
</script>  


<!-- Grade js--------------------------------------------------------------------------------------------------- -->

<!-- Ajax Add Grade -->
<script>
  var gradeSellect=document.getElementById("gradeSellect");
    $(document).ready( function () {
    $('#grade').on('click',function(e) {
      e.preventDefault();
      $.ajax({
          type:"POST",
          url: "/grades",
          data: $('#addGradeForm').serialize(),
          success: function(response){
          
          alert("Grade Created");
          $('#gradeSellect').empty();
          $('#gradeSellect').append('<option value="0" disabled selected>Select Grade</option>');
           gradesHTML(response);

          },

          error: function(error){
          // console.log(error)
          alert("Grade exist!");
          }
      });
      function gradesHTML(grades){
           // <option value="" selected disabled>Select Grade</option>

              var optionGrade="";
              
              
            for(i=0;i<grades.length;i++){
              optionGrade+="<option value="+grades[i].id+" >"+grades[i].name+"</option>";
              
            }
            
            gradeSellect.insertAdjacentHTML('beforeend',optionGrade);
              
            }

        
    });
  });
</script>  

<!-- Grade id and Value Select to Add Course -->
<script type="text/javascript">
  function gradeSelect(){
    var grade=document.getElementById("gradeSellect");
    var displaytext=grade.options[grade.selectedIndex].text;
    var displayvalue=grade.options[grade.selectedIndex].value;
    document.getElementById("gradeValue").value=displaytext;
    document.getElementById("grade_id").value=displayvalue;
    }
</script>



<!-- Ajax Add Course -->
<script >
  $(document).ready( function () {
      $('#course').on('click',function(e) {
          e.preventDefault();
          $.ajax({
              url: "/courses",
              type:"POST",
              data: $('#addCourseForm').serialize(),
              success: function(response){
                   // console.log(response);
                  // $('#addCourseModal').modal('hide')
                  alert("Course Created");
                  
                
                  $('#courseId').html
                  ('<option value="0" disabled selected>Select course</option>');
                  coursesHTML(response);
                  },

                  error: function(error){
                  // console.log(error)
                  alert("Course exist!");
                }
              });
          function coursesHTML(courses){
            // console.log(courses);
            var optionCourse="";
            
            
            for(i=0;i<courses.length;i++){
              optionCourse+="<option value="+courses[i].id+" >"+courses[i].name+"</option>";
              
            }
            courseId.insertAdjacentHTML('beforeend',optionCourse);
          }
        });
    });
</script> 
<!-- Course Dropdown-->

<script type="text/javascript">
  function courseSelect(){
    var course=document.getElementById("courseId");
    var displaytext=course.options[course.selectedIndex].text;
    var displayvalue=course.options[course.selectedIndex].value;
    document.getElementById("courseValue").value=displaytext;
    document.getElementById("course_id").value=displayvalue;
    }
</script>

<!-- Course Dropdown -->
<script >
  var courseId=document.getElementById("courseId");
 
  $(document).ready( function () {
      $('#gradeSellect').on('change',function() {
          
          let id = $(this).val();
          $('#courseId').empty();
          $('#courseId').append('<option value="0" disabled selected>Select Course</option>');
          $.ajax({
              type:"GET",
              url: '/admin/courses/'+ id,

              success: function(response){

                // var response=JSON.parse(response);
                
                coursesHTML(response);
                  var unitId=document.getElementById("unitId");
                  var subUnitId=document.getElementById("subUnitId");
                  $('#unitId').empty();
                  $('#subUnitId').empty();
               }
            });

          function coursesHTML(courses){
            var optionCourse="";
            for(i=0;i<courses.length;i++){
              optionCourse+="<option value="+courses[i].id+" >"+courses[i].name+"</option>";
              
            }
            courseId.insertAdjacentHTML('beforeend',optionCourse);
            
           
          }
        });
    });
</script> 

<!-- End------------------------------------------------------------------------------------------------------------------------------->


 <!-- Unit Related Js -------------------------------------------------------------------------------------------------------------->

<!-- Unit Store Ajax -->
<script >
  $(document).ready( function () {
      $('#unit').on('click',function(e) {
          e.preventDefault();
          $.ajax({
              type:"POST",
              url: "/units",
              data: $('#addUnitForm').serialize(),
              success: function(response){
                  // console.log(response);
                  
                  alert("Unit Created");
                  // $('#addUnitModal').modal('hide')
                  // location.reload();
           $('#unitId').empty();
           $('#unitId').append('<option value="0" disabled selected>Select Unit</option>');
           unitsHTML(response);
                  },
                  error: function(error){
                  // console.log(error)
                  alert("Unit exist!");
                }
              });
          function unitsHTML(units){
            // console.log(units);
            var optionUnit="";
            for(i=0;i<units.length;i++){
              optionUnit+="<option value="+units[i].id+" >"+"Unit "+units[i].name+"-    " +units[i].title+"</option>";
              
            }
            unitId.insertAdjacentHTML('beforeend',optionUnit);
          }
        });
    });
</script> 

<!-- Course change on Unit value -->
<script >
  var unitId=document.getElementById("unitId");
  var subUnitId=document.getElementById("subUnitId");
  $(document).ready( function () {
      $('#courseId').on('change',function() {
          
          let id = $(this).val();
           $('#unitId').empty();
           $('#unitId').append('<option value="0" disabled selected>Select Unit</option>');  

          $.ajax({
              type:"GET",
              url: '/admin/units/'+ id,

              success: function(response){
                // var response=JSON.parse(response);
                unitsHTML(response);
           $('#subUnitId').empty();
               }
            });
          function unitsHTML(units){
            // console.log(units);
            var optionUnit="";
            for(i=0;i<units.length;i++){
              optionUnit+="<option value="+units[i].id+" >"+"Unit "+units[i].name+"-    " +units[i].title+"</option>";
              
            }
            unitId.insertAdjacentHTML('beforeend',optionUnit);

          }
        });
    });
</script>

 <!-- End------------------------------------------------------- -->
<!-- Sub-Unit js-->

<!-- Sub-unit Store -->
<script type="text/javascript">
  function fnUnit(){
    var unit=document.getElementById("unitId");
    var displaytext=unit.options[unit.selectedIndex].text;
    var displayvalue=unit.options[unit.selectedIndex].value;
    document.getElementById("unitValue").value=displaytext;
    document.getElementById("unit_id").value=displayvalue;
    }
</script>

<!-- Sub-unit Store -->

<script >
  $(document).ready( function () {
      $('#subunit').on('click',function(e) {
          e.preventDefault();
          $.ajax({
              type:"POST",
              url: "/subunit",
              data: $('#addSubUnitForm').serialize(),
              success: function(response){
                  // console.log(response);
                  
                  alert("Unit Created");
                    $('#subUnitId').empty();
                    $('#subUnitId').append('<option value="0" disabled selected>Select Sub-Unit</option>');
                   subunitsHTML(response);
                  // $('#addSubUnitModal').modal('hide')
                  // location.reload();
                  },
                  error: function(error){
                  // console.log(error)
                  alert("Unit exist!");
                }
              });
           function subunitsHTML(subunits){
            // console.log(subunits);
            
            var optionsubUnit="";
            for(i=0;i<subunits.length;i++){
              optionsubUnit+="<option value="+subunits[i].id+" >"+"SubUnit "+subunits[i].name+" -  " +subunits[i].title+"</option>";
              
            }
            subUnitId.insertAdjacentHTML('beforeend',optionsubUnit);
          }
        });
    });
</script> 

<!-- on Unit select change subUnit change -->
<script >
  var subUnitId=document.getElementById("subUnitId");
  $(document).ready( function () {
      $('#unitId').on('change',function() {
          
          let id = $(this).val();
          $('#subUnitId').empty();
            $('#subUnitId').append('<option value="0" disabled selected>Select Sub-Unit</option>');

          $.ajax({
              type:"GET",
              url: '/admin/subunits/'+ id,

              success: function(response){
            
                subunitsHTML(response);
                
                // console.log(response);
               }
            });
          function subunitsHTML(subunits){
            var optionsubUnit="";
            for(i=0;i<subunits.length;i++){
              optionsubUnit+="<option value="+subunits[i].id+" >"+"SubUnit "+subunits[i].name+" -  " +subunits[i].title+"</option>";
              
            }
            subUnitId.insertAdjacentHTML('beforeend',optionsubUnit);
          }
        });
    });
</script>     
 <!-- Content Type onchange -->
<script content="text/javascript">
  function contentChange(){
    var content=document.getElementById("contentType");
    var displayvalue=content.options[content.selectedIndex].value;
    content.value=displayvalue;
    }
</script> 
<!-- Ajax Add Content Type -->
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
          
           $('#contentType').empty();
           $('#contentType').append('<option value="0" disabled selected>Content Type</option>');

            contentTypeHTML(response);
            
          },
          error: function(error){
          
              alert("Content type exist!");
              }
      });
       function contentTypeHTML(content){
            // console.log(subunits);
            var optionContent="";
            for(i=0;i<content.length;i++){
              optionContent+='<option value="'+content[i].id+'" >'+content[i].name+"</option>";

            }
            contentType.insertAdjacentHTML('beforeend',optionContent);
          }
    });
  });
</script>   

   
<!-- Ajax Add Media Type -->
<script type="text/javascript">
  function mediaChange(){
    var media=document.getElementById("mediaType");
    var displayvalue=media.options[media.selectedIndex].value;
    media.value=displayvalue;
    }
</script>

<script >
    $(document).ready( function () {
    $('#media').on('click',function(e) {
      e.preventDefault();
      $.ajax({
          type:"POST",
          url: "/media",
          data: $('#addMediaForm').serialize(),
          success: function(response){
          
          alert("Media type Created");
          
           $('#mediaType').empty();
           $('#mediaType').append('<option value="0" disabled selected>Media Type</option>');

            mediaTypeHTML(response);
            
          },
          error: function(error){
          
              alert("Error Occered while creating the Media Type");
              }
      });
       function mediaTypeHTML(media){
            // console.log(subunits);
            var optionMedia="";
            for(i=0;i<media.length;i++){
              optionMedia+='<option value="'+media[i].id+'" >'+media[i].name+"</option>";

            }
            mediaType.insertAdjacentHTML('beforeend',optionMedia);
          }
    });
  });

</script> 