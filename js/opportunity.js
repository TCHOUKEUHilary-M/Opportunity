const btn1 = document.getElementById("btn1");
btn1.addEventListener("click",function () {
  alert("vous allez ajouter une competence");
  let comp = document.getElementById("competences").value;
  let ul = document.getElementById("addcomp");
  ul.innerHTML += "<li>" + comp + "</li>";
  document.getElementById("competences").value = "";
});
const btn2 = document.getElementById("btn2");

btn2.addEventListener("click",function () {
  let annee = document.getElementById("annee").value;
  let exp = document.getElementById("experience").value;

  let table = document.getElementById("exp");

  table.innerHTML +=
    "<tr>" + "<td>" + annee + "</td>" + "<td>" + exp + "</td>" + "</tr>";
  document.getElementById("experiences").value = "";
  document.getElementById("experience").value = "";
});

