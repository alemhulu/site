 var url =$('#path').val();
var x = window.matchMedia("(max-width: 500px)")
 var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
if (x.matches) { // If media query matches
    myState.zoom = .6;
} else {
    myState.zoom = 1;
}

        pdfjsLib.getDocument(url).then((pdf) => {
      
            myState.pdf = pdf;
            render();
 
        });
 
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
          
                var canvas = document.getElementById("pdf-render");
                var ctx = canvas.getContext('2d');
      
                var viewport = page.getViewport(myState.zoom);
 
                canvas.width = viewport.width;
                canvas.height = viewport.height;
          
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                    
                });
                document.getElementById('load').style.visibility="hidden";
                 document.querySelector('#page-num').textContent = myState.currentPage;
                 document.querySelector('#page-count').textContent = myState.pdf.numPages;
            });
        }
       
        document.getElementById('prev-page').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage == 1) 
              return;
            myState.currentPage -= 1;
            document.getElementById("current_page").value = myState.currentPage;
             document.querySelector('#page-num').textContent = myState.currentPage;
             document.querySelector('#page-count').textContent = myState.pdf.numPages;
            render();
        });
 
        document.getElementById('next-page').addEventListener('click', (e) => {
            if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
               return;
            myState.currentPage += 1;
            document.getElementById("current_page").value = myState.currentPage;
             document.querySelector('#page-num').textContent = myState.currentPage;
             document.querySelector('#page-count').textContent = myState.pdf.numPages;
            render();
        });
 
        document.getElementById('current_page').addEventListener('keypress', (e) => {
            if(myState.pdf == null) return;
          
            // Get key code
            var code = (e.keyCode ? e.keyCode : e.which);
          
            // If key code matches that of the Enter key
            if(code == 13) {
                var desiredPage = 
                document.getElementById('current_page').valueAsNumber;
                                  
                if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                    myState.currentPage = desiredPage;
                    document.getElementById("current_page").value = desiredPage;
                    render();
                }
            }
        });
 
        document.getElementById('zoom_in').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom += 0.5;
            render();
        });
 
        document.getElementById('zoom_out').addEventListener('click', (e) => {
            if(myState.pdf == null) return;
            myState.zoom -= 0.5;
            render();
        });


var full= document.getElementById('fullPdfMobile');


full.addEventListener('click',function(){
    
    document.getElementById("page-top").style.display = "none";
    document.getElementById("body").style.overflow = "auto";
    

    fullMobile();

});

function fullMobile()
{

    var url =$('#path').val();
    var numPages = 0;
    var myState = {
               pdf: null,
               currentPage: 1,
               zoom: .6
               
           }
           function myFunction(x) {
            if (x.matches) { // If media query matches
                myState.zoom=.8;
            } else {
                myState.zoom=1.3;
            }
          }
          
          
          myFunction(x) // Call listener function at run time
          x.addListener(myFunction) // Attach listener function on state changes


           pdfjsLib.getDocument(url).then((pdf) => {
         
               myState.pdf = pdf;
               numPages = myState.pdf.numPages;
           
                //Start with first page
           pdf.getPage( 1 ).then( handlePages );
    
           });

           function handlePages(page)
           {
               //This gives us the page's dimensions at full scale
               var viewport = page.getViewport( 1 );
           
               //We'll create a canvas for each page to draw it on
               var canvas = document.createElement( "canvas" );
               var div = document.createElement( "div" );
               
               div.innerHTML="<h2>Alemhulu</h2>";
               
               canvas.style.display = "block";
               var context = canvas.getContext('2d');
               var viewport = page.getViewport(myState.zoom);
               canvas.height = viewport.height;
               canvas.width = viewport.width;
           
               //Draw it on the canvas
               page.render({canvasContext: context, viewport: viewport});
           
               //Add it to the web page
               document.body.appendChild( canvas );
           
               //Move to next page
               myState.currentPage++;
               if ( myState.pdf !== null && myState.currentPage <= numPages )
               {
                   myState.pdf.getPage( myState.currentPage ).then( handlePages );
               }
           }
                   function render() {
                       myState.pdf.getPage(myState.currentPage).then((page) => {
                     
                           var canvas = document.getElementById("pdf-render");
                           var ctx = canvas.getContext('2d');
                 
                           var viewport = page.getViewport(myState.zoom);
            
                           canvas.width = viewport.width;
                           canvas.height = viewport.height;
                     
                           page.render({
                               canvasContext: ctx,
                               viewport: viewport
                           });
                            document.querySelector('#page-num').textContent = myState.currentPage;
                            document.querySelector('#page-count').textContent = numPages;
                       });
                   }
                  
                   document.getElementById('prev-page').addEventListener('click', (e) => {
                       if(myState.pdf == null || myState.currentPage == 1) 
                         return;
                       myState.currentPage -= 1;
                       document.getElementById("current_page").value = myState.currentPage;
                        document.querySelector('#page-num').textContent = myState.currentPage;
                        document.querySelector('#page-count').textContent = numPages;
                       render();
                   });
            
                   document.getElementById('next-page').addEventListener('click', (e) => {
                       if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
                          return;
                       myState.currentPage += 1;
                       document.getElementById("current_page").value = myState.currentPage;
                        document.querySelector('#page-num').textContent = myState.currentPage;
                        document.querySelector('#page-count').textContent = numPages;
                       render();
                   });
            
                   document.getElementById('current_page').addEventListener('keypress', (e) => {
                       if(myState.pdf == null) return;
                     
                       // Get key code
                       var code = (e.keyCode ? e.keyCode : e.which);
                     
                       // If key code matches that of the Enter key
                       if(code == 13) {
                           var desiredPage = 
                           document.getElementById('current_page').valueAsNumber;
                                             
                           if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                               myState.currentPage = desiredPage;
                               document.getElementById("current_page").value = desiredPage;
                               render();
                           }
                       }
                   });
            
                   document.getElementById('zoom_in').addEventListener('click', (e) => {
                       if(myState.pdf == null) return;
                       myState.zoom += 0.5;
                       render();
                   });
            
                   document.getElementById('zoom_out').addEventListener('click', (e) => {
                       if(myState.pdf == null) return;
                       myState.zoom -= 0.5;
                       render();
                   });
                   
}
















