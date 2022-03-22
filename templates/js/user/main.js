// Affichage des gites sur index.php (user)


affichGite();
function affichGite() {
    const giteResult = document.getElementById('result-gites')
    const xhr = new XMLHttpRequest();
    xhr.open('GET', './select-form-user.php', true);

    xhr.onreadystatechange = function () {
        
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            
            let datas = JSON.parse(this.responseText)
            let listDom = ''

            for(let data of datas){
                listDom += '<li class="gites"><h2>'+ data.name_gite + '</h2><h3>'+ data.location_gite + '</h3><div><figure><img src="../img/pdp/' + data.name_simple_gite + '/' +data.profil_gite + '" alt=""></figure><p>' + data.desc_gite + '<button type="submit" data-id="' +data.id_gite + '">Reserver</button></p></div></li><hr>'
            }
            // giteResult.prepend(listDom)
            giteResult.innerHTML = listDom;
        }
    }
    xhr.send();
}

