//Liste des gites

giteDisplay();

function giteDisplay() {
    const resultGites = document.getElementById('result-gites')
    const xhr = new XMLHttpRequest();

    xhr.open('GET', './select-form-user.php', true);

    xhr.onreadystatechange = function () {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            let datas = JSON.parse(this.responseText)
            let listDom = ''

            for (let data of datas) {
                listDom += '<li class="gites"><h2>' + data.name_gite + '</h2><p>' + data.location_gite + '</p><img src="./img/pdp/' + data.profil_gite + '" alt=""><p>' + data.desc_gite + '</p><a href="#" class="btn-resa" data-id="' + data.id_gite + '">Reserver</a></li>'
                // console.log(data.id_gite)
                let idGite = data.id_gite;
                console.log(idGite)
                
            }

            resultGites.innerHTML = listDom;

           
            reservation();
            // document.getElementById('nb-posts').innerHTML = countGite();
        }
    }
    xhr.send();
}

function reservation(){
    const bntResa = document.getElementsByClassName('btn-resa');

    for(const element of bntResa){
        element.addEventListener('click', function(e){
            window.location.href = 'resa-user-form.php';
        })
    }
}




//Affichage de la modal

// function showModal() {
//     const btnDel = document.getElementsByClassName('btn-del');
//     const confirm = document.getElementsByClassName('confirm');

//     for (const element of btnDel) {
//         element.addEventListener('click', function (e) {
//             e.preventDefault();
//             confirm[0].style.display = 'block';
//             let idGite = this.dataset.id;
//             deleteGite(idGite);
//         })
//     }
// }

//Fermeture de la modal

// function hideModal() {
//     const no = document.getElementById('no');
//     const yes = document.getElementById('yes');
//     const confirm = document.getElementsByClassName('confirm');

//     no.addEventListener('click', function () {
//         confirm[0].style.display = 'none';
//     })

//     yes.addEventListener('click', function () {
//         confirm[0].style.display = 'none';
//     })
// }

// //Suppression d'un gite

// function deleteGite(id) {

//     const yes = document.getElementById('yes');

//     yes.addEventListener('click', function () {

//         const xhr = new XMLHttpRequest();
//         xhr.open('POST', './delete-gite.php', true);

//         xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

//         xhr.onreadystatechange = function () {
//             if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
//                 giteDisplay();
//             }
//         }
//         xhr.send('id_gite=' + id);
//     })
// }

// function countGite() {
    
//     return document.getElementsByClassName('gites').length;

// }