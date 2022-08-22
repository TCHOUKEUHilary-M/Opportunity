const letter = [];

let tab = [
  "Agriculteur",
  "Architecte",
  "Baby-Sitter",
  "Blanchisseur",
  "Boulanger",
  "Cableur",
  "Caissièr",
  "Carreleur",
  "Chauffeur",
  "Coiffeur(se)",
  "Couturier(ère)",
  "Developpeur front-end",
  "DJ",
  "Eboueur",
  "Electricien",
  "Electronicien",
  "Eleveur",
  "Esthéticien(ne)",
  "Frigoriste",
  "Garagiste",
  "Gardien",
  "Gérante",
  "hotelier",
  "Impréssario",
  "Infirmièr(e)",
  "jardinier",
  "Karatéka",
  "Maçon",
  "Maitre Nageur",
  "Make Up Artiste",
  "Mécanicien",
  "Menuisier",
  "Notaire",
  "Ortophoniste",
  "Patissièr(e)",
  "Plombier",
  "Repétiteur(ice)",
  "Restaurateur",
  "Sage-Femme",
  "Taximan",
  "Traducteur(ice)",
  "Urbaniste",
  "Veterinaire",
  "Virgile",
  "Web master",
];

let metierA = document.getElementById("ab");
let metierB = document.getElementById("ac");
let metierC = document.getElementById("ad");
let metierD = document.getElementById("ae");
let metierE = document.getElementById("af");
let metierF = document.getElementById("ag");
let metierG = document.getElementById("ah");
let metierH = document.getElementById("ai");
let metierI = document.getElementById("aj");
let metierJ = document.getElementById("ak");
let metierK = document.getElementById("al");
let metierL = document.getElementById("am");
let metierM = document.getElementById("an");
let metierN = document.getElementById("ao");
let metierO = document.getElementById("ap");
let metierP = document.getElementById("aq");
let metierQ = document.getElementById("ar");
let metierR = document.getElementById("as");
let metierS = document.getElementById("at");
let metierT = document.getElementById("au");
let metierU = document.getElementById("av");
let metierV = document.getElementById("aw");
let metierW = document.getElementById("ax");
let metierX = document.getElementById("ay");
let metierY = document.getElementById("az");
let metierZ = document.getElementById("aa");

for (let i = 0; i <= tab.length; i++) {
  //let metier = Array.from(tab[i]);
  let char = tab[i] + "";
  switch (char[0]) {
    case "A":
      metierA.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;
    case "B":
      metierB.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "C":
      metierC.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "D":
      metierD.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "E":
      metierE.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "F":
      metierF.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "G":
      metierG.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "H":
      metierH.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;
    case "I":
      metierI.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "J":
      metierJ.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "K":
      metierK.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "L":
      metierL.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "M":
      metierM.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "N":
      metierN.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "O":
      metierO.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case " P":
      metierP.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "Q":
      metierQ.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "R":
      metierR.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "S":
      metierS.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "T":
      metierT.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "U":
      metierU.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "V":
      metierV.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "W":
      metierW.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "X":
      metierX.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "Y":
      metierY.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;

    case "Z":
      metierZ.innerHTML += "<a>" + tab[i] + "</a><br>";
      break;
  }
}

const btn = document.getElementById("bbt");
btn.addEventListener("click", function () {
  let textRecherche = document.getElementById("recherche").value;

  if (textRecherche != "") {
    // Vide les postes
    document.getElementById("poste-content").innerHTML = "";

    // Get set postes from seqrch
    let elements = getElementStartBy(textRecherche[0], tab);

    let _postDiv = document.createElement("div");

    let _letterTitle = document.createElement("h3");
    _letterTitle.innerHTML = textRecherche[0].toUpperCase();
    _postDiv.appendChild(_letterTitle);
    _postDiv.innerHTML = appendElementToDiv(_postDiv, elements).innerHTML;

    document.getElementById("poste-content").appendChild(_postDiv);
    console.log(_postDiv.innerHTML);
  }
});

//Fonctions
function getElementStartBy(letter, tab = []) {
  let _tempTab = [];

  let i = 0;
  while (i < tab.length) {
    if (tab[i].charAt(0).toLowerCase().includes(letter.toLowerCase()))
      _tempTab.push(tab[i]);
    i++;
  }

  return _tempTab;
}

function appendElementToDiv(divId, elements = []) {
  let i = 0;
  while (i < elements.length) {
    let p = document.createElement("p");
    let a = document.createElement("a");
    a.innerHTML = elements[i];
    p.appendChild(a);
    divId.appendChild(p);
    i++;
  }

  return divId;
}
