var i = 0;
var o = 0
var txt = 'Désolé, il n\'y a aucune campagne active en ce moment.'; /* The text */
var txtDeux = 'Cette application a été conçue par l\'équipe étudiante Scrum Overlords.';
var speed = 35; /* The speed/duration of the effect in milliseconds */

function typeUn() {
  if (i < txt.length) {
    document.getElementById("typeUn").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeUn, speed);
  }
}

function typeDeux() {
    if (o < txtDeux.length) {
      document.getElementById("typeDeux").innerHTML += txtDeux.charAt(o);
      o++;
      setTimeout(typeDeux, speed);
    } 
  }

window.onload = function() {
    typeUn(),
    typeDeux();
}