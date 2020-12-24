// filter function
function test() 
{
  	var action = 'data';
        var grade_id = get_filter_text('gradeId');
        var course_id = get_filter_text('courseId');
        var unit_id = get_filter_text('unitId');
        var subunit_id = get_filter_text('subunitId');
        var type_id = get_filter_text('typeId');
        var media_id = get_filter_text('mediaId');
        $.ajax
	      ({
            url:"/moeuser",
            method:'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{action:action, grade_id:grade_id, course_id:course_id, unit_id:unit_id, subunit_id:subunit_id, type_id:type_id, media_id:media_id},
            success:function(response)
		        {
                  if(response.x==0)
                  {             
                                // to inform nothing has checked
                                $('.ga').removeClass('lblue');
                                $('.CB').removeClass('lblue');
                                $('.UB').removeClass('lblue');
                                $('.SUB').removeClass('lblue');
                                $('.CTB').removeClass('lblue');
                                $('.MTB').removeClass('lblue'); 
                                $('#result').show();
                                $('#filter').empty();
                                var commonCourses='<ul  style="color:black;">';
                                                                for(i=0;i<response.commonCourses.length;i++)
                                                                        {
                                                  commonCourses+='<li><input type="checkbox" class="form-check-input " id="courseId" value="'+response.commonCourses[i].id+'" onchange="test()" ><h6>'+response.commonCourses[i].name+'</h6></li>';
                                                                      }
                                                                commonCourses+='</ul>';
                                                                $('#courseFilter').html(commonCourses);

                                var allUnits='<ul  style="color:black;">';
                                                    for(i=0;i<response.allUnits.length;i++)
                                                    {
                                                            allUnits+='<li><input type="checkbox" class="form-check-input" id="unitId" value="'+response.allUnits[i].id+'" onchange="test()" ><h6>'+response.allUnits[i].title+'</h6></li>';
                                                    }
                                                    allUnits+='</ul>';

                                                    $('#unitFilter').html(allUnits);

                              var allSubunits='<ul  style="color:black;">';
                                                    for(i=0;i<response.allSubunits.length;i++)
                                                    {
                                                        allSubunits+='<li><input type="checkbox" class="form-check-input" id="subunitId" value="'+response.allSubunits[i].id+'" onchange="test()" ><h6>'+response.allSubunits[i].title+'</h6></li>';
                                                    }
                                                    allSubunits+='</ul>';

                                                    $('#subunitFilter').html(allSubunits);
			              }
			              else
		              	{       
                            if(response.g==1&&response.c==0)
                            {
                                  var courses='<ul  style="color:black;">';
                                                        for(i=0;i<response.courses.length;i++)
                                                          {
                                                            courses+='<li><input type="checkbox" class="form-check-input " id="courseId" value="'+response.courses[i].id+'" onchange="test()" ><h6>'+response.courses[i].name+'</h6></li>';
                                    }
                                  courses+='</ul>';
                                  $('#courseFilter').html(courses);
                                  $('#unitFilter').empty();
                                  $('#subunitFilter').empty();
                            }                                                                                                                                                                                                                                                                                                                                                                                                                  
                            if(response.c==1&&response.u==0)
                            {
                                  var units='<ul  style="color:black;">';
                                  for(i=0;i<response.units.length;i++)
                                  {
                                    units+='<li><input type="checkbox" class="form-check-input" id="unitId" value="'+response.units[i].id+'" onchange="test()" ><h6>'+response.units[i].title+'</h6></li>';
                                  }
                                  units+='</ul>';

                                  $('#unitFilter').html(units);
                                  $('#subunitFilter').empty();
                            }
                            if(response.u==1&&response.su==0)
                            {
                                    var subunits='<ul  style="color:black;">';
                                    for(i=0;i<response.subunits.length;i++)
                                    {
                                        subunits+='<li><input type="checkbox" class="form-check-input" id="subunitId" value="'+response.subunits[i].id+'" onchange="test()" ><h6>'+response.subunits[i].title+'</h6></li>';
                                    }
                                    subunits+='</ul>';

                                    $('#subunitFilter').html(subunits);
                            }
                             $('#result').hide();
                            $('#filter').html(response.output);
                          // to inform grede has been checked
                          if(response.g==1)
                          {
                             
                              $('.ga').addClass('lblue');
                          }
                          else
                          {
                            $('.ga').removeClass('lblue')
                          }
                          if(response.c==1)
                          {
                             $('.CB').addClass('lblue');
                          }
                          else{
                              $('.CB').removeClass('lblue');
                          }
                          if(response.u==1)
                          {
                              $('.UB').addClass('lblue');
                          }
                          else{
                              $('.UB').removeClass('lblue');
                          }
                          if(response.su==1)
                          {
                              $('.SUB').addClass(' lblue');
                          }
                          else{
                              $('SUB').removeClass('lblue');
                          }
                          if(response.co==1)
                          {
                              $('.CTB').addClass(' lblue');
                          }
                          else{
                              $('CTB').removeClass('lblue');
                          }
                          if(response.m==1)
                          {
                              $('.MTB').addClass(' lblue');
                          }
                          else{
                              $('.MTB').removeClass('lblue');
                          }
                     }
              }
        });
 	      function get_filter_text(text_id)
	      {
            var filterData = [];
            $('#'+text_id+':checked').each(function()
		        {
           	  	filterData.push($(this).val());
          	});
          	return filterData;
        }

}

// Search function
$(document).ready(function()
{
         $('#search1').keyup(function()
        {
                var query=$("#search").val();
		var output='<option>alem</option>';
               $.ajax
                ({
                        url:'/search',
                        method:'Get',
                        data:{query:query},
                        success:function(response)
                        {
				 $('#subunitFilter').html(allSubunits);

                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });


        });

});




// search button submit function
$(document).ready(function()
{
	$('#searchForm').submit(function()
	{
		var query=$('#myInput').val();
		 $.ajax
                ({
                        url:'/search',
                        method:'Get',
                        data:{query:query},
                        success:function(response)
                        {
				 $('#result').hide();
                                $('#filter').html(response);

                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });
                collapseButton.click()
                 return false;
	});
});


// from autocomplete dropdown while click search function
function changeFunction()
{
	var query=event.target.id;
	$.ajax
                ({
                        url:'/search',
                        method:'Get',
                        data:{query:query},
                        success:function(response)
                        {
                                 $('#result').hide();
                                $('#filter').html(response);

                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });
                collapseButton.click()
                 return false;

}