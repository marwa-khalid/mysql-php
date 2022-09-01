
function searchProduct(){

    const input = document.getElementById('search').value.toUpperCase();
    const cardContainer = document.getElementById('card-list');
    var check = 0;
    
    const cards = cardContainer.getElementsByClassName('col-sm-3');

    for(let i=0; i < cards.length ; i++){

        let productName = cards[i].querySelector(".card-details h5.name");

        if(productName.innerText.toUpperCase().indexOf(input) > -1){
            document.getElementById('unmatched').innerHTML = '';
            cards[i].classList.add('display-card');
            cards[i].classList.remove('hide-card');
            check++;
        }
        else {
            cards[i].classList.add('hide-card');
            cards[i].classList.remove('display-card');
            if(!check){
                document.getElementById('unmatched').innerHTML = '<h2>No matching products</h2> ';
            }
        }
    }


}