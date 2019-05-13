$(document).ready(() => {
  axios.get('https://cors-anywhere.herokuapp.com/https://spreadsheets.google.com/feeds/list/1UWPiN_5eECOq62xmfUm-9BI4gFKmlKTgTrG2yDhY1Kc/od6/public/values?alt=json')
    .then((response) => {
      window._meetup = response.data.feed.entry;
      let output = '';
      response.data.feed.entry.forEach((finalist) => {
      console.log(finalist);
        output += `
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
                  <img src="${finalist.gsx$image.$t}" alt="Intern Image" /></div>
                </div>
                <p>${finalist.gsx$name.$t}</p>
                <p class="intern-desc">${finalist.gsx$role.$t}</p>
                <p>${finalist.gsx$stacks.$t}</p>
              </div>
              <div class="intern-card-back">
                <p>${finalist.gsx$name.$t}</p> 
                <p>${finalist.gsx$role.$t}</p> 
                <button><a href="${finalist.gsx$portfolio.$t}">View Portfolio</a></button>
                <div class="social-links">
                  <a href=""><img src="../app/img/linkedin icon.png" alt="social link" title="LinkedIn"></a>
                  <a href=""><img src="../app/img/medium icon.png" alt="social link" title="Medium"></a>
                  <a href=""><img src="../app/img/github icon.png" alt="social link" title="Github"></a>
                  <a href=""><img src="../app/img/twitter icon.png" alt="social link" title="Twitter"></a>
                  <a href=""><img src="../app/img/dribbble icon.png" alt="social link" title="Dribbble"></a>
                  <a href=""><img src="../app/img/behance icon.png" alt="social link" title="Behance"></a>
                </div>
              </div>
            </div>
          </div>
        </div>`;
        const finalistsContainer = document.querySelector('.designers-container');
        finalistsContainer.innerHTML = output;
      })
    })
    .catch(error => console.log(error));

// Digital marketers
axios.get('https://cors-anywhere.herokuapp.com/https://spreadsheets.google.com/feeds/list/1z60Q8o8OHZJfiTD_Hylt3J_zms8gcvHjkq5HSnb3Q6Y/od6/public/values?alt=json')
.then((response) => {
  window._meetup = response.data.feed.entry;
  let output = '';
  response.data.feed.entry.forEach((finalist) => {
  console.log(finalist);
    output += `
    <div class="intern-card">
      <div class="intern-card-inner">
        <div class="intern-card-front">
          <div class="card-image-bg">
            <div class="intern-image">
              <img src="${finalist.gsx$image.$t}" alt="Intern Image" /></div>
            </div>
            <p>${finalist.gsx$name.$t}</p>
            <p class="intern-desc">${finalist.gsx$role.$t}</p>
            <p>${finalist.gsx$stacks.$t}</p>
          </div>
          <div class="intern-card-back">
          <p>${finalist.gsx$name.$t}</p> 
          <p>${finalist.gsx$role.$t}</p> 
          <button><a href="${finalist.gsx$portfolio.$t}">View Portfolio</a></button>
          <div class="social-links">
            <a href=""><img src="../app/img/linkedin icon.png" alt="social link" title="LinkedIn"></a>
            <a href=""><img src="../app/img/medium icon.png" alt="social link" title="Medium"></a>
            <a href=""><img src="../app/img/github icon.png" alt="social link" title="Github"></a>
            <a href=""><img src="../app/img/twitter icon.png" alt="social link" title="Twitter"></a>
            <a href=""><img src="../app/img/dribbble icon.png" alt="social link" title="Dribbble"></a>
            <a href=""><img src="../app/img/behance icon.png" alt="social link" title="Behance"></a>
          </div>
        </div>
        </div>
       </div> 
    </div>`;
    const finalistsContainer = document.querySelector('.marketers-container');
    finalistsContainer.innerHTML = output;
  })
})
.catch(error => console.log(error));

})