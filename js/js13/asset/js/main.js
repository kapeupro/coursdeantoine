function validationText(id,min = 3,max = 10) {
    const inputNom = document.querySelector('#'+id);
    const errorNom = document.querySelector('#error_'+id);
    inputNom.addEventListener('keyup', function () {
        let value = inputNom.value;
        let longueur = value.length;
        let text = '';
        let cla = 'error';
        if (value !== '') {
            if (longueur < min) {
                text = 'Veuillez renseigner au moins '+min+' caractères.'
            } else if (longueur > max) {
                text = 'Veuillez renseigner moins de '+max+' caractères.'
            } else {
                text = 'Merci , vous avez écrit ' + longueur + ' caractères';
                cla = 'success'
            }
        } else {
            text = 'Veuillez renseigner ce champ.'
        }
        errorNom.innerHTML = text
        errorNom.className = cla
    });
}
validationText('nom');
validationText('prenom',5,15);

const select = document.querySelector('#fruits');
select.addEventListener('change', function() {
    let value = select.value;
    let color = 'white';
    if(value == 'banane') {
        color = 'yellow'
    } else if(value == 'kiwi') {
        color = 'green'
    } else if(value == 'papaye') {
        color = 'orange'
    }
    select.style.backgroundColor = color
});


const formulaire = document.querySelector('#formulaire');
formulaire.addEventListener('submit', function(e) {
    e.preventDefault();
    const nom = document.querySelector('#nom').value;
    const prenom = document.querySelector('#prenom').value;
    const fruit = document.querySelector('#fruits').value;
    // AJAX GET
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhttp.open("GET", "./inc/ajax.php", true);
    xhttp.send();

    // AJAX 2
    let xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            console.log(JSON.parse(this.responseText));
            let data = JSON.parse(this.responseText);
            let html = 'je suis ' + data.nom + ' ' + data.prenom + ' et like ' + data.fruit
            let boite = document.querySelector('#js_response');
            boite.innerHTML = html
            formulaire.remove();
            //if(this.responseText != 'error') {
                // formulaire.remove();
                // let boite = document.querySelector('#js_response');
                // boite.innerHTML = this.responseText
                // boite.style.color = 'green';
                // boite.style.fontSize = "4rem";
                // boite.style.textAlign = "center";
            //}
        }
    }
    xhttp2.open("POST", "./inc/ajax2.php", true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhttp2.send("nom=" + nom + "&prenom=" + prenom + "&fruit=" + fruit);
});



