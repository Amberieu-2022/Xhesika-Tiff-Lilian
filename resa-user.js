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
                listDom += '<li class="gites"><h2>' + data.name_gite + '</h2><p>' + data.location_gite + '</p><img src="./img/pdp/' + data.profil_gite + '" alt=""><p>' + data.desc_gite + '</p><a href="./resa-user-form.php?id='+ data.id_gite+'"class="btn-resa">Reserver</a></li>'
                console.log(data.id_gite)
            
                
            }

            resultGites.innerHTML = listDom;

            reservCli();
            // reservation();
            // document.getElementById('nb-posts').innerHTML = countGite();
        }
    }
    xhr.send();
}

// function reservCli(){
//     const bntResa = document.getElementsByClassName('btn-resa');
//    for (const element of bntResa){
//        element.addEventListener('click', function (e){
//         //    e.preventDefault();
//            let idGite = this.dataset.id;
//            recapResa(idGite);
//        })
//    }
// }

// function  recapResa(){
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', './resa-user-form.php', true);
//     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function () {
//         if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
//             alert('hehe');
//         }
//     }
//     xhr.send('id_gite=' + id);
// }