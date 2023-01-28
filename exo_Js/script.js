function compare(nB1,nB2){
    if(nB1>nB2){
        alert('Le premier nombre est supèrieur au deuxième');
    }
    else{
        alert('Le deuxième nombre est supérieur au premier');
    }
}

function pair(nombre){
    if(nombre%2 == 0){
        alert('Le nombre '+nombre+' est pair');
    }
    else{
        alert('Le nombre '+nombre+' est impair');
    }
}

function Factoriel(n) {
    // return n > 1?n * Factoriel(n-1):1;

    // for(let i=0;i<=n;i++) {
    //     document.write(i+"! est "+Factoriel(i)+"<BR>");
    // }
 }
// --------------------------------------------------------------------
// ________________________exo 1_________________________________
// const nombre=prompt('Veuillez saisir un nombre :');
//      alert('Le nombre est :'+nombre);
// --------------------------------------------------------------------
// __________________________exo2___________________________________
// const nombre1 = prompt('Veuillez saisir un premier nombre :');
// const nombre2 = prompt('Veuillez saisir un deuxieme nombre :');

// compare(nombre1,nombre2);

// -----------------------------------------------------------------------
// ____________________________exo 3________________________________
// const nombre = prompt('Veuillez saisir un nombre :');
// pair(nombre);
// ----------------------------------------------------------------------
// _____________________________exo4______________________________________
// const nombre=prompt('Veuillez saisir un nombre :');
// console.log('La factorielle de ce nombre est :'+factorielle(nombre));
// ------------------------------------------------------------------------
// _____________________________exo5______________________________________


// ------------------------------------------------------------------------
// _________________________exoDom1______________________________________


// let div=document.createElement('div');
// div.id='divTP1';

// createAndAppendTextNode("Le ",div);
// createAndAppendStrongElement("World Wide Web",div);
// createAndAppendTextNode(", abrégé par le sigle ",div);
// createAndAppendStrongElement("W3C ",div);
// createAndAppendLinkElement("http://fr.wikipedia.org/wiki/Organisme_de_normalisation",
//                             "Organisme de normalisation",
//                             "organisme de standardisation",
//                             div);

// createAndAppendTextNode(" à but non-lucratif chargé de promouvoir la comptabilité des technologies du ",div);
// createAndAppendLinkElement("http://fr.wikipedia.org/wiki/World_Wide_Web",
//                             "World Wide Web",
//                             "World Wide Web",
//                             div);
// createAndAppendTextNode(".",div);

// document.body.appendChild(div);

// function createAndAppendTextNode(text,parent){
//     let contenu =document.createTextNode(text);
//     parent.appendChild(contenu);
// }

// function createAndAppendStrongElement(textContent,parent){
//     let strong=document.createElement("strong");
//     strong.innerHTML= textContent;
//     parent.appendChild(strong);

// }

// function createAndAppendLinkElement(href,title,content,parent){
//     let link=document.createElement("a");
//     link.href=href;
//     link.title=title;
//     createAndAppendTextNode(content,link);
//     parent.appendChild(link);
// }
// ------------------------------------------------------------------------
// _________________________exoDom2______________________________________


// ----------------------------------------------------------------------------
// _________________________exoDom3______________________________________
// ________________________________creation de la div_______________________________________
// let div=document.createElement('div');
// // ________________________________creation de la checkbox1_____________________________________
// let checkbox=document.createElement("input");
// checkbox.type="checkbox";
// checkbox.name="name";
// checkbox.value="value";
// checkbox.id= "id";
// div.appendChild(checkbox);

// let label=document.createElement('label');
// label.htmlFor= "id";
// label.appendChild(document.createTextNode('Spaghetti'));

// //__________________________________ creation de la checkbox2____________________________
// let checkbox2=document.createElement("input");
// checkbox2.type="checkbox";
// checkbox2.name="name";
// checkbox2.value="value";
// checkbox2.id= "id";
// div.appendChild(checkbox2);

// let label2=document.createElement('label');
// label2.htmlFor= "id";
// label2.appendChild(document.createTextNode('Bolognaise'));

// // ___________________________creation du 1er bouton_________________________________
// let bouton=document.createElement("button");
// bouton.innerHTML="Valider";
// bouton.onclick= function(){
//     checkbox.checked= true;
//     checkbox2.checked= true;
// }
// let labelForButton=document.createElement('label');
// labelForButton.htmlFor= "id";

// // __________________________creation du 2ème bouton__________________________________
// let bouton2=document.createElement("button");
// bouton2.innerHTML="Effacer";
// bouton2.onclick= function(){
//     checkbox.checked= false;
//     checkbox2.checked= false;
// }
// let labelForButton2=document.createElement('label');
// labelForButton2.htmlFor= "id";

// // ____________________________________________________________________________________
// div.appendChild(checkbox);
// div.appendChild(label);
// div.appendChild(checkbox2);
// div.appendChild(label2);
// div.appendChild(bouton);
// div.appendChild(labelForButton);
// div.appendChild(bouton2);
// div.appendChild(labelForButton2);
// document.body.appendChild(div);


// ----------------------------------------------------------------------------
// // _________________________exoDom4______________________________________

// // ________________________________creation de la div_______________________________________
// let div=document.createElement('div');
// div.id='divTP1';

// // // ________________________________creation du contenu_______________________________________
// createAndAppendTextNode("Le ",div);
// createAndAppendStrongElement("World Wide Web",div);

// createAndAppendBrElement("br",div);
// createAndAppendTextNode(", abrégé par le sigle ",div);
// createAndAppendStrongElement("W3C ",div);

// createAndAppendBrElement("br",div);
// createAndAppendLinkElement("http://fr.wikipedia.org/wiki/Organisme_de_normalisation",
//                             "Organisme de normalisation",
//                             "organisme de standardisation",
//                             div);

// createAndAppendBrElement("br",div);
// createAndAppendTextNode(" à but non-lucratif chargé de promouvoir la comptabilité des technologies du ",div);

// createAndAppendBrElement("br",div);
// createAndAppendLinkElement("http://fr.wikipedia.org/wiki/World_Wide_Web",
//                             "World Wide Web",
//                             "World Wide Web",
//                             div);
// createAndAppendTextNode(".",div);

// // // ___________________________creation du bouton_________________________________
// let bouton=document.createElement("button");
// bouton.innerHTML="Enlever les sauts de ligne";
// bouton.onclick= function(){
//    let elements= document.getElementsByClassName('br');
//    for(let i=0;i< elements.length;i++){
//         // let element= elements[i];
//         div.removeChild(elements[i]);
//    }
   
// }
// let labelForButton=document.createElement('label');
// labelForButton.htmlFor= "id";

// // // ________________________________affichage_______________________________________
// div.appendChild(bouton);
// div.appendChild(labelForButton);
// document.body.appendChild(div);


// // // ________________________________fonction_______________________________________
// function createAndAppendTextNode(text,parent){
//     let contenu =document.createTextNode(text);
//     parent.appendChild(contenu);
// }

// function createAndAppendStrongElement(textContent,parent){
//     let strong=document.createElement("strong");
//     strong.innerHTML= textContent;
//     parent.appendChild(strong);

// }

// function createAndAppendLinkElement(href,title,content,parent){
//     let link=document.createElement("a");
//     link.href=href;
//     link.title=title;
//     createAndAppendTextNode(content,link);
//     parent.appendChild(link);
// }

// function createAndAppendBrElement(text,parent){
//     let br=document.createElement("br");
//     br.className= 'br';
//     br.innerHTML= text;
//     parent.appendChild(br);

// }

// ---------------------------------------------------------------------------
// _____________________________exoDOM5________________________________________
let td= document.querySelectorAll('td');

td.forEach((cellule) => {
    cellule.addEventListener("click", e => {
        //vérifie que le contenu est du texte
        if(e.target.firstChild != null && e.target.firstChild.nodeType === 3){
            let input =document.createElement('input');
            let existentText= e.target.innerHTML;
            input.setAttribute("type","text");
            input.setAttribute("value",existentText);
            //supprime le contenu actuel du td
            e.target.innerHTML="";
            e.target.appendChild(input);
            input.focus();
            input.setSelectionRange(input.value.length,input.value.length);

            //declarer l'évènement focusout (étecté lors du perte du focus sur l'input)
            input.addEventListener("focusout",e => {
                e.target.parentElement.innerHTML= e.target.value;
            })
        }
    })

})