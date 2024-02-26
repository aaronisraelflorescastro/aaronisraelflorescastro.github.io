//mostar los personales sin filtrar
//tenemos que obbtener todos los personajes llamado a la api
//renderizarlos en nuestro dom
//cuando cambien los filtros se tiene que hacer un llamado nuevo a la api
//se debe renderizar nuevamente

const characterEl = document.getElementById('characters');
const nameFilterEl = document.getElementById('name-filter');
const statusFilterEl = document.getElementById('status-filter');

async function getCharacters(name, status) {
    let url = 'https://rickandmortyapi.com/api/character';

	if (name || status  ){
		url += '?';
		if(name){
			url += `name=${name}&`;
		}

		if(status){
			url += `status=${status}`
		}
	}
    const response = await fetch(url);
    const data = await response.json();
    
    return data.results;
}

async function displaycharacters(name, status) {
    const characters = await getCharacters(name, status);

	characterEl.innerHTML='';


    for (let character of characters) {
        const card = document.createElement('div');
        card.classList.add('character-card');

        card.innerHTML = `
            <img src="${character.image}" alt="${character.name}"/>
            <h2>${character.name}</h2>
            <p>Status: ${character.status}</p>
            <p>Species: ${character.species}</p>
        `;

        characterEl.appendChild(card);
    }
}

displaycharacters();


nameFilterEl.addEventListener('input',() =>{
	displaycharacters(nameFilterEl.value, statusFilterEl.value );
});

statusFilterEl.addEventListener('change', () => {
    displaycharacters(nameFilterEl.value, statusFilterEl.value);
});
