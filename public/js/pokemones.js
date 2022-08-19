const { result, method } = require("lodash");

function detallePokemon(id) {
    console.log(id);
    fetch('https://pokeapi.co/api/v2/pokemon/' + id)
        .then((resp) => resp.json())
        .then(function (data){

            pokemonActual = data;

            let habi = data['abilities'];
            let altura = data['height'];
            let typo = data['types'];

            console.log(habi);
            console.log(altura);
            console.log(typo);

            let tr = document.getElementById("hab");
            let tr1 = "";
            let tr3 = "";

            habi.forEach(function(habil){
                tr1 += "<tr>"+habil+"</tr>";
            })

            tr.innerHTML = tr1;

            $('#infoPokemon').modal('show');
    })
}