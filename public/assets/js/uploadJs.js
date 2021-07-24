//     document.addEventListener("DOMContentLoaded", function() {

//         document.getElementById('button-file').addEventListener('click', (event) => {
//             event.preventDefault();

//             inputId = 'fileLocation';

//             window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
//         });

//     // second button
//     document.getElementById('button-thumbnail').addEventListener('click', (event) => {
//         event.preventDefault();

//       inputId = 'thumbnailLocation';

//       window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
//     });
//   });

//   // input
//   let inputId = '';

//   // set file link
//   function fmSetLink($url) {
//         document.getElementById(inputId).value = $url;
//   }

    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-file').addEventListener('click', (event) => {
            event.preventDefault();
            document.getElementById('folderLocation').value="";
            inputId = 'fileLocation';

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });

    // second button
    document.getElementById('button-thumbnail').addEventListener('click', (event) => {
        event.preventDefault();

      inputId = 'thumbnailLocation';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    // third button
    document.getElementById('button-folder').addEventListener('click', (event) => {
      event.preventDefault();
      document.getElementById('fileLocation').value="";
    inputId = 'folderLocation';

    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
  });
    
  });

  

  // input
  let inputId = '';

  // set file link
  function fmSetLink($url) {
        document.getElementById(inputId).value = $url;
  }

