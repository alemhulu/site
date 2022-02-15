
<script>
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
            url:"{{route('moeuser')}}",
            method:'POST',
            data:{"_token": "{{ csrf_token() }}",action:action, grade_id:grade_id, course_id:course_id, unit_id:unit_id, subunit_id:subunit_id, type_id:type_id, media_id:media_id},
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
</script>
<script>
$(document).ready(function()
{
	 $('#pdf').click(function()
        {
                var file_id=document.getElementById("pdf").value;
               $.ajax
                ({
                        url:'/view',
                        method:'Get',
                        data:{file_id:file_id},
                        success:function(response)
                        {
                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });


        });

});
</script>
<script>
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
</script>
<script>
//var countries = ["Biology","Acid and Base","Chemistry","Grade 11","Grade 12","Grade 10","ICT","Stempower","Simulated Lab"];
var countries = <?php echo json_encode($tag); ?>;
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
	  b.setAttribute("id", arr[i]);
	    b.setAttribute("onclick", "changeFunction()");
	  b.setAttribute("style", "font-size: 14px;font-family: sans-serif Gotham ;");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              //closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keyup", function(e) { 
//var countries = ["Biology","Acid and Base","Chemistry","Grade 11","Grade 12","Grade 10","ICT","Stempower","Simulated Lab"];  
    var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();countries
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
	 var query=$("#myInput").val();
               
               $.ajax
                ({
                        url:'/search',
                        method:'Get',
                        data:{query:query},
                        success:function(response)
                        {
                       var tag = [];
			for(i=0;i<response.length;i++)
			{
				tag.push(response[i].tag);
				
			}
			
	        //alert(countries);	
                countries = tag;
		//alert(countries);


                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });

  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


//alert(countries);
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

<script>
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

</script>

<script>
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
</script>
