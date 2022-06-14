let fabrikTypes = document.querySelectorAll('.fabrics-types ul li')

for (let i = 0; i<=fabrikTypes.length - 1; i++){
    fabrikTypes[i].style.backgroundImage = `url("../pictures/fabrik_${i+1}.jpg")`;
}