const btnappel = document.getElementById("btnappel");

btnappel.addEventListener("click",function () {
  let nom_o = document.getElementById("name").value;
  let telephone_o = document.getElementById("telephone").value;
  let email_o = document.getElementById("email").value;
  let structure_o = document.getElementById("structure").value;
  let secteur_o = document.getElementById("secteur").value;
  let poste_o = document.getElementById("poste").value;
  let heure_o = document.getElementById("heure").value;
  let lieu_o = document.getElementById("lieu").value;
  let horraire_o = document.getElementById("horraire").value;
  let jour_o = document.getElementById("day").value;
  let age_o = document.querySelector("input[name=age]:checked").value;
  let niveau_o = document.getElementsByName("niveau");
  let value_niveau = "";
  for (let i = 0; i < niveau_o.length; i++) {
    if (niveau_o[i].checked) {
      value_niveau += niveau_o[i].value;
    }
  }
  let qualite_o = document.getElementById("qualite").value;
  let apt_o = document.getElementById("apt").value;
  let condition_o = document.getElementById("condition").value;
  //nouvelle div
  let newol = document.getElementById("infool");
  let newol1 = document.getElementById("olemploi");
  let newol2 = document.getElementById("qual");

  newol.innerHTML +=
    "<li>" + nom_o + "</li>" + "<br>" + "<li>" + telephone_o + "</li>" + "<br>";
  "<li>" + email_o + "</li>" + "<br>" + "<li>" + structure_o + "</li>" + "<br>";

  newol1.innerHTML +=
    "<li>" + secteur_o + "</li>" + "<br>" + "<li>" + poste_o + "</li>" + "<br>";
  "<li>" +
    heure_o +
    "</li>" +
    "<br>" +
    "<li>" +
    lieu_o +
    "</li>" +
    "<br>" +
    "<li>" +
    horraire_o +
    "</li>" +
    "<li>" +
    jour_o +
    "</li>";
  newol2.innerHTML +=
    "<li>" +
    age_o +
    "</li>" +
    "<br>" +
    "<li>" +
    value_niveau +
    "</li>" +
    "<br>";
  "<li>" +
    qualite_o +
    "</li>" +
    "<br>" +
    "<li>" +
    apt_o +
    "</li>" +
    "<br>" +
    "<li>" +
    condition_o +
    "</li>";
});
