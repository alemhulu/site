// $(window).scroll(function () {
//     if ($(window).scrollTop() + $(window).height() == $(document).height()) {
//         alert("bottom!");
//     }
// });
// let heightWindows= $(window).height();
// let heightDocument=$(document).height();
// alert (heightWindows + 'document height '+ heightDocument);
// filter function

// Inportant Variable 
let courses, typeMoreButtons, feedbackButton, feedbackSend, buttonMenus, file_id, downloadFileFile, downloadCount, searchButtons, searchInput1, searchInput2, windowWidth, course, type, courseTypes,
    searchInputBig, searchInputSmall, grade, gradeTypes, garade_id_radio, grade_type_id;
garade_id_radio=1;
function fileDownloadId () {
    file_id= event.target.parentElement.value;
    fileDownload(file_id);
}    

// Search function
$('.input').keyup(function (event) {
    if (event.keyCode === 13) {
        query = event.target.value;
        search(query);
    }
});

// Search function 
function search(query) {
    $.ajax({
        url: '/search',
        method: 'Get',
        data: { query: query },
        success: function (response) {
            $('#result').hide();
            $('#filter').html(response);
            common();
        },
        error: function (error) {
            alert("Error!  ");
        }
    });
}
// download funtion  
function fileDownload (file_id) {
    $.ajax({
        url: '/download',
        method: 'GET',
        data: { file_id: file_id },
        success: function (response) {

        },
        error: function (error) {
            alert("Error!  ");
        }
    });

}
function courseTypeCall() {
    // Filter Course by the content type
    courseTypes = document.querySelectorAll('.courseType');
    courseTypes.forEach(function (courseType) {
        courseType.addEventListener('click', function (e) {
            type = this.id;
            course = query;
            courseTypeFunction(course, type);
        });
    });
}
function courseTypeFromController()
{
    type = event.target.id;
    course=query;
    courseTypeFunction(course, type);
}

// from autocomplete dropdown while click search function
function changeFunction() {
    var query = event.target.id;
    search(query);
    // collapseButton.click()
    return false;
}

// content type button click fetch more of that content

function typeMore(query) {
   
    $.ajax
        ({
            url: '/typeMore',
            method: 'Get',
            data: { query: query },
            success: function (response) {
                $('#content').hide();
                $('#filter').html(response);
                
            },
            error: function (error) {
                alert("Error!  ");
            }
        });
}

// Search by course name from all Grades

function courseFromAllGrade(query) {
   
    $.ajax
        ({
            url: '/searchCourse',
            method: 'Get',
            data: { query: query },
            success: function (response) {
               
                $('#content').hide();
                $('#filter').html(response);
                

            },
            error: function (error) {
                alert("Error!  ");
            }
        });
}
// Filter course for a specific content type
function courseTypeFunction(query, type) {
    $.ajax
        ({
            url: '/courseType',
            method: 'Get',
            data: { type: type, course:course},
            success: function (response) {
                $('#content').hide();
                $('#filter').html(response);
                
            },
            error: function (error) {
                alert("Error!  ");
            }
        });
}


//Filter grade from a specific content type
function gradeTypeFunction(grade,type) {
    $.ajax({
        url:'/gradeType',
        method:'Get',
        data:{grade:grade, type:type,},
        success(response){
            $('#content').hide();
            $('#filter').html(response);
            
        },
        error(){
            alert('Error! ');
        }
    });
}


 // feedback funtion
 function feedbackAjax(){
     $.ajax({
         type: "POST",
         url: "/feedbacks",
         data: $('#addFeedbackForm').serialize(),
         success: function (response) {
             alert("Thank you for your Feedback!");
             
         },
         error: function (error) {
             alert("Error Occered while sending a Feedback");
         }
     });
 }

 //Filter all resources for choosen grade by the content type
function gradeTypeController() {
    type_id_radio = event.target.innerHTML;
    // grade_id_radio = event.target.value;
    
    gradeTypeFunction(grade_id_radio,type_id_radio);
    
 }
 


// common js for all page functionlity
function common() {
   
    
    // downloadFile function
    downloadFiles = document.querySelectorAll('.download');
    downloadCount = document.querySelector('#downloadCount');
    downloadFiles.forEach(function (downloadFile) {
        downloadFile.addEventListener('click', function (e) {
            file_id = downloadFile.value;
            fileDownload(file_id);
        });
    });

    // Filter Course by the content type
    courseTypes = document.querySelectorAll('.courseType');
    courseTypes.forEach(function (courseType) {
        courseType.addEventListener('click', function (e) {
            type = this.id;
            course = query;
            alert('hello');
            courseTypeFunction(course, type);
        });
    });

    //Filter Type for a given grade
    gradeTypes = document.querySelectorAll('.gradeType');
    gradeTypes.forEach(function (gradeType) {
        gradeType.addEventListener('click', function (e) {
            // grade = $("input[type='radio'][name='grade']:checked").parent().text();
            grade = $('#gradeId:checked').val();
            type = this.val;
            
            // gradeTypeFunction(grade,type);
        });
    });
}


function intialization() {

    // Course filter From diffent Grades
    courses = document.querySelectorAll(".course");
    courses.forEach(function (course) {
        course.addEventListener('click', function (e) {
            query = e.currentTarget.id;
            courseFromAllGrade(query);
        });
    });

    //search form reload stop
    $("#searchForm1").submit(function (e) {
        e.preventDefault();
    });
    $("#searchForm").submit(function (e) {
        e.preventDefault();
    });
    common();

    // content More
     typeMoreButtons = document.querySelectorAll('.typeMoreButton');
    typeMoreButtons.forEach(function (typeMoreButton) {
        typeMoreButton.addEventListener('click', function (e) {
             query = e.currentTarget.id;
            typeMore(query);
        });
    });


    // feedback
    feedbackButton = document.querySelector('.feedback');
    feedbackSend = document.querySelector('#feedbackSend');
    // feedbackButton.addEventListener('click',feedbackFuntion,false);
    feedbackSend.addEventListener('click', feedbackAjax, false);

    // icon toggle for menu

    buttonMenus = document.querySelectorAll('.buttonMenu');
        buttonMenus.forEach(function (buttonMenu){
            buttonMenu.addEventListener('click',function(e){
            buttonMenu.children[0].classList.toggle('fa-angle-up');
        });
    });


    //search button click
    windowWidth = window.matchMedia("(max-width:993px)");
    searchButtons = document.querySelectorAll('.search');
    searchButtons.forEach(function (searchButton){
        searchButton.addEventListener('click',function (e){
            searchInputSmall = $('#myInput').val();
            searchInputBig = $('#myInput1').val();
            // console.log(searchInput1);
            // console.log(searchInput2);
            if (windowWidth.matches){
                
                query = searchInputSmall;
            }
            else
            {
                
                query = searchInputBig;
            }
           search(query);
         
        });
    });

}

// excutes after window successfully loaded
window.onload = intialization;


// fileter function
function gredeFilter(){
    $('input[type=checkbox]').prop('checked', false);
    grade_id_radio = event.target.value;
    filter();
}

function filter() {
     
     
        var action = 'data';
        var grade_id = get_filter_text('gradeId');
        var course_id = get_filter_text('courseId');
        var unit_id = get_filter_text('unitId');
        var subunit_id = get_filter_text('subunitId');
        var type_id = get_filter_text('typeId');
        var media_id = get_filter_text('mediaId');
        let commonCourses='';
        $.ajax
            ({ 
                url: "/moeuser",
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: { action: action, grade_id: grade_id, course_id: course_id, unit_id: unit_id, subunit_id: subunit_id, type_id: type_id, media_id: media_id },
                success: function (response) {
                    if (response.x == 0) {
                        // to inform nothing has checked
                        $('.ga').removeClass('lblue');
                        $('.CB').removeClass('lblue');
                        $('.UB').removeClass('lblue');
                        $('.SUB').removeClass('lblue');
                        $('.CTB').removeClass('lblue');
                        $('.MTB').removeClass('lblue');
                        commonCourses=$('.course').innerHTML;
                        $('#result').show();
                        $('#filter').empty();
                        //  commonCourses = '<ul  style="color:black;"><br>';
                        // for (i = 0; i < response.commonCourses.length; i++) {
                        //     commonCourses += '<li><input type="radio" name"courses" class="form-check-input course" id="courseId" value=""' + response.commonCourses[i].id + '"  ><h6>' + response.commonCourses[i].name + '</h6></li>';
                        // }
                        // commonCourses += '<br></ul>';
                        
                        $('#courseFilter').html(commonCourses);
                        document.getElementById('courseForm').reset();
                        var allUnits = '<ul  style="color:black;"><br>';
                        for (i = 0; i < response.allUnits.length; i++) {
                            allUnits += '<li><input type="checkbox" class="form-check-input" id="unitId" value="' + response.allUnits[i].id + '" onchange="filter()" ><h6>' + response.allUnits[i].title + '</h6></li>';
                        }
                        allUnits += '<br></ul>';
                        $('#unitFilter').html(allUnits);
                        var allSubunits = '<ul  style="color:black;"><br>';
                        for (i = 0; i < response.allSubunits.length; i++) {
                            allSubunits += '<li><input type="checkbox" class="form-check-input" id="subunitId" value="' + response.allSubunits[i].id + '" onchange="filter()" ><h6>' + response.allSubunits[i].title + '</h6></li>';
                        }
                        allSubunits += '<br></ul>';
                        $('#subunitFilter').html(allSubunits);
                   }
                    else {
                        
                        if (response.g == 1 && response.c == 0) {
                            var courses = '<ul  style="color:black;"><br>';
                            
                            for (i = 0; i < response.courses.length; i++) {
                                courses += '<li><input type="checkbox" class="form-check-input " id="courseId" value="' + response.courses[i].id + '" onchange="filter()" ><h6>' + response.courses[i].name + '</h6></li>';
                            }
                            courses += '<br></ul>';
                            $("#headingTwo").attr("aria-expanded", "false");
                            $('#collapseTwo').addClass('show');
                            $('#courseFilter').html(courses);
                            $('#unitFilter').empty();
                            $('#subunitFilter').empty();
                            
                        }
                       
                        if (response.c == 1 && response.u == 0) {
                            var units = '<ul  style="color:black;"><br>';
                            for (i = 0; i < response.units.length; i++) {
                                units += '<li><input type="checkbox" class="form-check-input" id="unitId" value="' + response.units[i].id + '" onchange="filter()" ><h6> Unit ' + response.units[i].name + ". " + response.units[i].title + '</h6></li>';
                            }
                            units += '<br></ul>'; 
                            $("#headingThree").attr("aria-expanded", "false");
                            $('#collapseThree').addClass('show');
                            $('#unitFilter').html(units);
                            $('#subunitFilter').empty();
                        }
                        if (response.u == 1 && response.su == 0) {
                            var subunits = '<ul  style="color:black;"><br>';
                            for (i = 0; i < response.subunits.length; i++) {
                                subunits += '<li><input type="checkbox" class="form-check-input" id="subunitId" value="' + response.subunits[i].id + '" onchange="filter()" ><h6> Sub-unit ' + response.units[i].name + ". "  + response.subunits[i].title + '</h6></li>';
                            }
                            subunits += '<br></ul>';

                            $("#headingfour").attr("aria-expanded", "false");
                            $('#collapsefour').addClass('show');
                            $('#subunitFilter').html(subunits);
                        }
                        $('#result').hide();
                        $('#filter').html(response.output);
                        // to inform grede has been checked
                        if (response.g == 1) {

                            $('.ga').addClass('lblue');
                        }
                        else {
                            $('.ga').removeClass('lblue')
                        }
                        if (response.c == 1) {
                            $('.CB').addClass('lblue');
                        }
                        else {
                            $('.CB').removeClass('lblue');
                        }
                        if (response.u == 1) {
                            $('.UB').addClass('lblue');
                        }
                        else {
                            $('.UB').removeClass('lblue');
                        }
                        if (response.su == 1) {
                            $('.SUB').addClass(' lblue');
                        }
                        else {
                            $('SUB').removeClass('lblue');
                        }
                        if (response.co == 1) {
                            $('.CTB').addClass(' lblue');
                        }
                        else {
                            $('CTB').removeClass('lblue');
                        }
                        if (response.m == 1) {
                            $('.MTB').addClass(' lblue');
                        }
                        else {
                            $('.MTB').removeClass('lblue');
                        }
                    }
                    intialization();
                }
            });
        function get_filter_text(text_id) {
            var filterData = [];
            $('#' + text_id + ':checked').each(function () {
                filterData.push($(this).val());
            });
            return filterData;
        }
    
    }
    //end of filter function







//autoComplete function
function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function (e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false; }
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
                b.addEventListener("click", function (e) {
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
    /*execute a Search function 
        presses a key on the keyboard:
    */
    // inp.addEventListener("keydown", function (e) {
    //     //var countries = ["Biology","Acid and Base","Chemistry","Grade 11","Grade 12","Grade 10","ICT","Stempower","Simulated Lab"];  
    //     var x = document.getElementById(this.id + "autocomplete-list");
    //     if (x) x = x.getElementsByTagName("div");
    //     if (e.keyCode == 40) {
    //         /*If the arrow DOWN key is pressed,
    //         increase the currentFocus variable:*/
    //         $('.autocomplete-active').click(function () {
    //             console.log(this.id);
    //         });
    //         currentFocus++;
    //         /*and and make the current item more visible:*/
    //         addActive(x);
    //     } else if (e.keyCode == 38) { //up
    //         /*If the arrow UP key is pressed,
    //         decrease the currentFocus variable:*/
    //         currentFocus--;
    //         /*and and make the current item more visible:*/
    //         addActive(x);
    //     } else if (e.keyCode == 13) {
    //         /*If the ENTER key is pressed, prevent the form from being submitted,*/
    //         e.preventDefault(); countries
    //         if (currentFocus > -1) {
    //             /*and simulate a click on the "active" item:*/
    //             if (x) x[currentFocus].click();
    //         }
    //     }
    //     var query = $("#myInput1").val();
    //     if(query==='')
    //     {
            
    //         $('#content').show();

    //     }
    //     else{
    //          search(query);
    //     }
    

    // });
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

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
autocomplete(document.getElementById("myInput1"), countries);

// $(document).ready (function(){
//     $(document).on('click',' .pagination a ' , function(event){
//         event.preventDefault();
//         let page = $(this)[0].href;
//         console.log (page);
//         fetch_data(page);
//     });
// });
// function fetch_data(page){
//     $.ajax({
//        url:page,
//        success: function (data){
//            $('#pagination_data').html(data);
//        }
//     });
// }




