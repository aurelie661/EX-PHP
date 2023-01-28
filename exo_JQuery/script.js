//-------------------exo1 LE STYLE DU PARAGRAPHE
// $(document).ready(function(){
//     $("#jsstyle").click(function(){
//       $("#text").css({"color": "green","font-size":"100px"});
//     });
//   });

//---------------------exo2 RECUPERER DES ATTRIBUTS
// $(document).ready(function () {
//     $("#values-btn").click(function () {
//         let g = $("#ggl");
//         console.log("href :", g.attr('href'));
//         console.log("hreflang :", g.attr('hreflang'));
//         console.log("rel :", g.attr('rel'));
//         console.log("target :", g.attr('target'));
//         console.log("type :", g.attr('type'));
//     });
// });

// -----------------exo3 CHANGER LE CONTENU DUNE CELLULE
// function changeCell(line,col,text){
//     $("#myTable")
//         .find("tr:eq("+ line +")")
//         .find("td:eq("+ col +")")
//         .text(text);
//     }
//     changeCell(1,1,"changer");
// -----------------exo3_2ème version CHANGER LE CONTENU DUNE CELLULE
// $("#values-btn").click(function () {
    
//     line = $("#1").val();
//     col = $("#2").val() ;
//     text = $("#3").val();
//     changeCell(line, col, text);
//   });

// -----------------exo4 CREER UN TABLEAU HTML AVEC QUERY

// $("#add_line").click(function () {

//     var last_row = $('#matable tr:last');
//     var new_id = parseInt($(last_row).attr('id').split("_")[1]) + 1;
//     $(last_row).clone().insertAfter('#matable tr:last').attr('id', 'row_' + new_id);

// });
//----------------- exo5 FUNCTION AFFICHE ET COMPTE LES ELEMENT----------------

// const tab = []
// $(document).ready(function () {​​​​​​​​
const options =$('#colorSelect option')
$.each(options,function(){​​​​​​​​
  console.log($(this).val())
// tab.push($(this).val())
}​​​​​​​​);
// }​​​​​​​​)
 
console.log(options.length)
// console.log(tab.join(", "))
 
// $(document).ready(function () {​​​​​​​​
$('#remove-btn').click(()=>{​​​​​​​​
// var parentTag = $('#remove-btn').parent().get(0).tagName;
// console.log(parentTag)
// $('#remove-btn').parent().css("background-color", "red");
$('#colorSelect').children('option:selected').remove();
}​​​​​​​​)
// }​​​​​​​​)

