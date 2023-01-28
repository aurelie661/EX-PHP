// _______________IMPLEMENTATION APPEL AJAX EN JS________________________
// const btn = document.getElementById('btn');
// btn.addEventListener('click', function (e) {
// const objXMLHttpRequest = new XMLHttpRequest();
//     objXMLHttpRequest.onreadystatechange = function () {
//         if (objXMLHttpRequest.readyState === 4) {
//             if (objXMLHttpRequest.status === 200) {
//                 console.log(objXMLHttpRequest.responseText);
//             } else {
//                 alert("Error code : " + objXMLHttpRequest.status);
//                 alert("Error Message : " + objXMLHttpRequest.statusText);
//             }
//         }
//     }
//     objXMLHttpRequest.open('GET', 'programme.php');
//     objXMLHttpRequest.send();

// })
// _______________IMPLEMENTATION APPEL AJAX EN JQUERY________________________
const btn = document.getElementById('btn');
btn.addEventListener('click', function (e) {
const objXMLHttpRequest = new XMLHttpRequest();
$.ajax(
    'programme.php',
    {
        success: function (objXMLHttpRequest) {
            console.log('Appel Ajax réussi !');
            console.log('Données reçus du serveur : ' + objXMLHttpRequest);

        },
        Error: function () {
            alert("Erreur détectée lors de l'appel AJAX");
        }
    }
);
})

