// Affichage des gites sur index.php (user)


affichGite();
function affichGite() {
    const giteResult = document.getElementById('result-gites')
    const xhr = new XMLHttpRequest();
    xhr.open('GET', './select-form-user.php', true);
    
    xhr.onreadystatechange = function () {
        
        var json = '{"result":true,"count":1}',
    obj = JSON.parse(json);
    console.log(obj.count);

        if (this.readyState === this.DONE && this.status === 200) {
            console.log('coucou1')

            let listDom = '{}'
            let datas = JSON.parse(listDom)
            console.log(datas)
            
            

            for(let data of datas){
                listDom += '<li class="gites"><h2>'+ data.name_gite + '</h2><h3>'+ data.location_gite + '</h3><div><figure><img src="../img/pdp/' + data.name_simple_gite + '/' + data.profil_gite + '" alt=""></figure><p>' + data.desc_gite + '<button type="submit" data-id="' + data.id_gite + '">Reserver</button></p></div></li><hr>'
            }
            // giteResult.prepend(listDom)
            giteResult.innerHTML = listDom;
        }
    }
    xhr.send();
}
