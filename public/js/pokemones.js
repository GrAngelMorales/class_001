const { result, method } = require("lodash");

function detallePokemon(id) {
    fetch('https://pokeapi.co/api/v2/pokemon/' + id)
        .then((resp) => resp.json())
        .then(function (data) {

            pokemonActual = data;

            let nom = data['name'];
            let fot = data['sprites'];
            let habi = data['abilities'];
            let altura = data['height'];
            let tipo = data['types'];
            let peso = data['weight'];

            let nm = document.getElementById("exampleModalLabel");
            let img = document.getElementById("im_pok");
            let tr_h = document.getElementById("hab");
            let heg = document.getElementById("alt");
            let tr_t = document.getElementById("tip");
            let wei = document.getElementById("pes");

            let tr1 = "";
            let tr2 = "";

            habi.forEach(function (habil) {
                tr1 += "<tr>" + "<td>" + habil.ability.name + "</td>" + "<td>" + habil.ability.url + "</td>" + "</tr>";
            })

            tipo.forEach(function (tp) {
                tr2 += "<tr>" + "<td>" + tp.type.name + "</td>" + "<td>" + tp.type.url + "</td>" + "</tr>";
            })

            nm.innerHTML = nom;
            img.innerHTML = "<img src='" + fot.other.home.front_default + "' alt='Imagen del pokemon seleccionado.' class='img-fluid'>";
            tr_h.innerHTML = tr1;
            heg.innerHTML = (altura / 3.281).toFixed(2);
            tr_t.innerHTML = tr2;
            wei.innerHTML = (peso / 2.205).toFixed(2);

            $('#infoPokemon').modal('show');
        })
}
