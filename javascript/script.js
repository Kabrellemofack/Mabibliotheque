document.getElementById('formulaire').addEventListener('submit',function(event){
    let nom = document.getElementById('nom').value.trim();
    
    let email=document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
    let valider=true;
    event.preventDefault();
    if(nom ===''){
        document.getElementById('nameError').innerText='nom requis';
        valider=false;
    }
    if(message===''){
        document.getElementById('messageError').innerText='message requis';
        valider=false;
    }

    if(email===''){
        document.getElementById('emailError').innerText='email requis';
        valider=false;
    }
    if(valider){
        alert('message envoyer avec success');
        document.getElementById('formulaire').reset();

    }    
});