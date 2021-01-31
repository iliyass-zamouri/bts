function verifierFormat() {
    var email = document.getElementById("email").value;
    var cemail = document.getElementById("e-conf").value;
  //verifiez format d'email
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)){
    document.getElementById("emessage").innerHTML = "";
    return true;
  } else {
    document.getElementById("emessage").innerHTML = "**Vous avez entré une adresse e-mail invalide!";  
    document.getElementById("email").focus();
    return false; 
}
}

function verifierEmail() {
    var email = document.getElementById("email").value;
    var cemail = document.getElementById("e-conf").value;
    if(email != cemail) {
      document.getElementById("emessage").innerHTML = "**La confirmation d'adresse email ne correspond pas!";  
      document.getElementById("email").focus();
      return false;
    } else {
      document.getElementById("emessage").innerHTML = "";
      return true;
    }
}

function verifierMpFormat() { 

    var mp = document.getElementById("mp").value;  
    var cmp = document.getElementById("mp-conf").value;

  //validation de la longueur minimale du mot de passe
  if(mp.length < 8) {  
       document.getElementById("pmessage").innerHTML = "**La longueur du mot de passe doit comporter au moins 8 caractères";  
       document.getElementById("mp").focus();
       return false;  
    } else {
      document.getElementById("pmessage").innerHTML = "";
    }
      // validation du lengeur maximale de validation du mot de passe 
      if(mp.length > 15) {  
       document.getElementById("pmessage").innerHTML = "**La longueur du mot de passe ne doit pas dépasser 15 caractères";  
       document.getElementById("mp").focus();
       return false;  
    } else { 
      document.getElementById("pmessage").innerHTML = "";
    }   
}

function verifierMp() {  
    var mp = document.getElementById("mp").value;  
    var cmp = document.getElementById("mp-conf").value;

    //verifiez mot de passe
    if(mp == "") {  
       document.getElementById("pmessage").innerHTML = "**Remplissez le mot de passe s'il vous plaît!"; 
       document.getElementById("mp").focus(); 
       return false;  
    } else if (mp != cmp) {
        document.getElementById("pmessage").innerHTML = "**La confirmation du mot de passe ne correspond pas !";
        document.getElementById("mp").focus();
        return false; 
    } else {
      document.getElementById("pmessage").innerHTML = "";
      return true;
    }
}  