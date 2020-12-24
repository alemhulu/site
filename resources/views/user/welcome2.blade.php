@extends('layouts.app2')
@section('content')
@section('homeStyle')
<link rel="stylesheet" href="/assets/css/homeStyle.css">
@endsection
<section>
<div class=" container-fluid">
  <div class="row">
    <div class="col-md-1  collapse "  id="navbarSupportedContent">
      
        
        <div class=" mt-3" >
               <ul class="navbar-nav mr-auto ">
      <button class="btn btn-block text-left p-2 buttonMenu border mb-2 zoom ga bold " id="headingOne" data-toggle="collapse" data-target="#gradeCollaps" 
                    aria-expanded="true" aria-controls="gradeCollaps"
                    style="font-size: 16px;font-family: sans-serif Gotham ;"  >
                Grades 
            </button>
             <div id="gradeCollaps" class="collapse hide" aria-labelledby="headingOne" >
              <div id="gradeFilter">
                @if(count($grades)>0) 
                <ul style="color:black;">
                @foreach($grades as $grade)
                <li><input type="checkbox"class="form-check-input " value="{{$grade->id}}" id="gradeId" onchange="test()" ><h6>Grade - {{$grade->name}}</h6></li>
                @endforeach
                </ul>
                @endif
              </div>
            </div>
               
              
           
        
        <!-- Course Menu -->
       
            
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-2 zoom CB bold" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
            Course
            </button>
            
          
          <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" >
              <div id="courseFilter">
              @if(count($courses)>0) 
              <ul  style="color:black;">
              @foreach($courses as $course)
              <li><input type="checkbox"class="form-check-input resource_check" value="{{$course->id}}"  id="courseId" onchange="test()" ><h6>{{$course->name}}</h6></li>
              @endforeach
              </ul>
              @endif
              </div>
          </div>
        
        <!-- Unit Menu -->
        
          
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-2 zoom UB bold" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  >
            Unit
            </button>
            
         
          <div id="collapseThree" class="collapse " aria-labelledby="headingThree" >
            <div id="unitFilter">
              @if(count($units)>0) 
              <ul style="color:black;" >
              @foreach($units as $unit)
              <li><input type="checkbox"class="form-check-input resource_check" value="{{$unit->id}}" id="unitId" onchange="test()"><h6> {{$unit->title}}</h6></li>
              @endforeach
              </ul>
              @endif
            </div>
          </div>
        
        <!-- Subunit Menu -->
        
          
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-2 zoom SUB bold" id="headingfour" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            Sub-Unit
            </button>
            
          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" >
            <div id="subunitFilter">
              @if(count($subunits)>0) 
              <ul id="" style="color:black;">
              @foreach($subunits as $subunit)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="test()"  value="{{$subunit->id}}" id="subunitId"><h6> {{$subunit->title}}</h6></li>
              @endforeach
              </ul>
              @endif
           </div>
          </div>
       
        <!-- Content Type Menu -->
        
            
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-2 zoom CTB bold" id="headingfive" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            Content Type
            </button>
            
          
          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" >
            <div >
              @if(count($types)>0) 
              <ul id="" style="color:black;">
              @foreach($types as $type)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="test()"  value="{{$type->id}}" id="typeId"><h6> {{$type->name}}</h6></li>
              @endforeach
              </ul>
              @endif
            </div>
          </div>
      
        <!-- Media Type Menu -->
        
          
            
            <button class="btn btn-block text-left p-2 buttonMenu border collapsed mb-2 zoom MTB bold" id="headingsix" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
            Media Type
            </button>
           
          
          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" >
           <div>
              @if(count($medias)>0) 
              <ul id="" style="color:black;">
              @foreach($medias as $media)
              <li><input type="checkbox"class="form-check-input resource_check" onchange="test()"  value="{{$media->id}}" id="mediaId"><h6> {{$media->name}}</h6></li>
              @endforeach
              </ul>
              @endif
           </div>
          </div>
    </ul>
        </div> 
    </div>

  <div class="col-md">

      <div id="content" >
        <div id="result">

          @foreach($types as $type)
          @if(count($type->allresources)>0)
              <h4 class="m-0 mt-2  bg-white"><strong class="blackColor">{{$type->name}}</strong></h4>
                <div class="container-fluid p-0">
                <div class="row md">
                  @foreach($type->allresources->take(4) as $resource)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4" id="linkColor">
                      <div class="zoom" data-toggle="tooltip" data-placement="top" title="{{$resource->description}}">
                        <a href="{{url('user',[$resource->id, $type->id])}}">                      
                        @if($resource->media->name == "Document"||$resource->media->name == "document" )
                        <img id="pdfView" value="{{$resource->id}}" src="{{$resource->thumbnailLocation}}" 
                        class="rounded-top shadow " width="100%" height="180px" >
                        @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                        <img  src="{{$resource->thumbnailLocation}}"class="rounded-top shadow " width="100%" height="180px"  >
                        @endif
                        
                        <div class="p-1 shadow rounded text-black">
                          @if($resource->unit_id=="" || $resource->subunit_id=="" || $resource->grade_id=="")
                          <h6 class="mb-0">{{$resource->course->name}} </h6>
                          <h6 class=" mb-2 text-truncate">{{$resource->description}} </h6>
                          <span class="date ">{{$resource->view}} Views  </span><span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>
                          @else
                          <h6 class="mb-0">G-{{$resource->grade->name}} {{$resource->course->name}}</h6>
                          <h6 class="mb-0">Unit {{$resource->unit->name}} - {{$resource->unit->title}}</h6> 
                          <h6 class=" mb-2">Subunit {{$resource->subunit->name}} - {{$resource->subunit->title}}</h6>
                          <span class="date ">{{$resource->view}} Views </span>
                          <span class="date float-right">{{$resource->created_at->diffForHumans() }}</span>
                          @endif
                        </div>
                        </a>
                      </div>
                     
                    </div> 
                  @endforeach 
                </div>                
              </div>         
          @endif  
          @endforeach
        </div>
      </div>
      <div id="filter"></div>
   

    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <footer class="bg-white sticky-footer">
    <div class="container my-auto">
    <div class="text-center my-auto copyright fixed-bottom"><span>Copyright © MoE 2020</span></div>
    </div>
    </footer>  
  </div> <!-- col 10 end-->


  </div>   
</div>
</section>
<script src="assets/js/jquery.min.js"></script>
<script src="/assets/js/home.js"></script>
<script type="text/javascript">

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
@endsection



