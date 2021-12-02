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
