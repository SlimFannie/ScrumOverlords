var i = 0;
var o = 0
var txt = document.getElementById("ligneUn").innerHTML; /* The text */
var txtDeux = document.getElementById("ligneDeux").innerHTML;
var speed = 35; /* The speed/duration of the effect in milliseconds */

function typer() {
  typeUn();
  typeDeux();
}

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

  $( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

window.onload = function() {
  typer();
}

