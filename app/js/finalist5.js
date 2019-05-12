$(document).ready(() => {
   const designersTabe = 'https://cors-anywhere.herokuapp.com/https://spreadsheets.google.com/feeds/list/1UWPiN_5eECOq62xmfUm-9BI4gFKmlKTgTrG2yDhY1Kc/od6/public/values?alt=json';
    
    async function fetchDesigners(endpoint) {
        const data = await fetch(endpoint);
        //let data = await res.json();
      
        //data = data.map(user => user.username);
      
        console.log(data);
    }

    fetchDesigners(designersTabe);

function fetchDesigners() {

    
}
})