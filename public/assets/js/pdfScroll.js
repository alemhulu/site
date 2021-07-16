var url = $('#path').val();
let numPages=0;
var pdfContainer = document.getElementById("canvas_container");
var x = window.matchMedia("(max-width: 500px)")
var myState = {
    pdf: null,
    currentPage: 1,
    zoom: 1
}
if (x.matches) { // If media query matches
    myState.zoom = 1;
} else {
    myState.zoom = 1.7;
}


pdfjsLib.getDocument(url).then((pdf) => {

    myState.pdf = pdf;
    numPages = myState.pdf.numPages;
    console.log(myState.pdf);
    //Start with first page
    // $('#pdf-render').remove();
    // document.getElementById('pdf-render').style.height = "0px";
    document.getElementById('load').style.visibility="hidden";
    document.querySelector('#page-num').textContent = myState.currentPage;
    document.querySelector('#page-count').textContent = numPages;
    pdf.getPage(1).then(handlePages);
   
    
});

function handlePages(page) {
    //This gives us the page's dimensions at full scale
    var viewport = page.getViewport(1);

    //We'll create a canvas for each page to draw it on
    
    var canvas = document.createElement("canvas");
    
    canvas.style.display = "block";
    var context = canvas.getContext('2d');
    var viewport = page.getViewport(myState.zoom);
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    //Draw it on the canvas
    page.render({ canvasContext: context, viewport: viewport });

    //Add it to the web page
    pdfContainer.appendChild(canvas);

    //Move to next page
    myState.currentPage++;
    if (myState.pdf !== null && myState.currentPage <= numPages) {
        myState.pdf.getPage(myState.currentPage).then(handlePages);
    }
}