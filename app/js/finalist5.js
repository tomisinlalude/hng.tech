$(document).ready(() => {
  axios.get('https://cors-anywhere.herokuapp.com/https://spreadsheets.google.com/feeds/list/1UWPiN_5eECOq62xmfUm-9BI4gFKmlKTgTrG2yDhY1Kc/od6/public/values?alt=json')
    .then((response) => {
      window._meetup = response.data.feed.entry;
      let output = '';
      response.data.feed.entry.forEach((finalist) => {
      console.log(finalist);
        output += `
        <div class="intern-card" id="designer-container">
          <div class="intern-card-front">
            <div class="image-bg">
              <div class="intern-image">
                <img src="${finalist.gsx$image.$t}" alt="Intern Image" /></div>
              </div>
              <p>${finalist.gsx$name.$t}</p>
              <p class="intern-desc">${finalist.gsx$role.$t}</p>
              <p>${finalist.gsx$stacks.$t}</p>
            </div>
          </div>
        </div>`;
        const finalistsContainer = document.querySelector('.card-container');
        finalistsContainer.innerHTML = output;
      })
    })
    .catch(error => console.log(error));
})