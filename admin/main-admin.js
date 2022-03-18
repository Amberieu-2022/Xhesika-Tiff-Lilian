//Liste des gites

giteDisplay();

function giteDisplay() {
    const listGites = document.getElementById('list-gites')
    const xhr = new XMLHttpRequest();

    xhr.open('GET', './select-gite.php', true);

    xhr.onreadystatechange = function () {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            let datas = JSON.parse(this.responseText)
            let listDom = ''

            for (let data of datas) {
                listDom += '<li class="gites"><h2>' + data.name_gite + '</h2><p>' + data.location_gite + '</p><img src="../img/' + data.name_simple_gite + '/' + data.profil_gite + '" alt=""><p>' + data.desc_gite + '</p><a href="#" class="btn-del" data-id="' + data.id_gite + '">Supprimer</a></li>'
                console.log(data)
            }

            listGites.innerHTML = listDom;

            showModal();

            hideModal();

            document.getElementById('nb-posts').innerHTML = countGite();
        }
    }
    xhr.send();
}

//Affichage de la modal

function showModal() {
    const btnDel = document.getElementsByClassName('btn-del');
    const confirm = document.getElementsByClassName('confirm');

    for (const element of btnDel) {
        element.addEventListener('click', function (e) {
            e.preventDefault();
            confirm[0].style.display = 'block';
            let idGite = this.dataset.id;
            deleteGite(idGite);
        })
    }
}

//Fermeture de la modal

function hideModal() {
    const no = document.getElementById('no');
    const yes = document.getElementById('yes');
    const confirm = document.getElementsByClassName('confirm');

    no.addEventListener('click', function () {
        confirm[0].style.display = 'none';
    })

    yes.addEventListener('click', function () {
        confirm[0].style.display = 'none';
    })
}

//Suppression d'un gite

function deleteGite(id) {

    const yes = document.getElementById('yes');

    yes.addEventListener('click', function () {

        const xhr = new XMLHttpRequest();
        xhr.open('POST', './delete-gite.php', true);

        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                giteDisplay();
            }
        }
        xhr.send('id_gite=' + id);
    })
}

function countGite() {
    
    return document.getElementsByClassName('gites').length;

}