

const infoCards = [];

document.getElementById("menu-cards").childNodes.forEach((cards) => {
    // excluded commentaries
    if(cards.hasChildNodes() ){
        cards.hidden = true;
        infoCards.push(cards)

    }
})

const setVisible = (index) => {
    /*
    ini buat tampilin card sesuai sama button yang di click
    setiap mau ngeklik pindah card , set semua cards jadi invisible, kecuai card yang sesuai sama button
    yang di klik
    */
    infoCards.map((cards, indexInfoCards) => {
        indexInfoCards === index ? cards.hidden = false : cards.hidden = true
    })
}

infoCards[0].hidden = false;


export function buttonAccountInfo () {
    console.log("check")
    setVisible(0);
}

export function buttonSubscriptions () {
    setVisible(1);
}