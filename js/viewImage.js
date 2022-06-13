let imageContainer = document.querySelectorAll('.our-works .container .work');

let container = document.createElement('div');
let image = document.createElement('img');
image.style = `height: 100%; 
               width: auto;
               position: relative;
               top: 0;
               left: 50%;
               transform: translateX(-50%);
               `;
container.style = `
                   position: fixed;
                   left: 0;
                   top: 0;
                   width: 100%;
                   height: 100%;
                   background-color: rgba(0,0,0,0.4);
                   display: none;
                   z-index: 10000;`;
container.append(image);
container.addEventListener('click', function() {
    container.style.display = 'none'
})
document.body.append(container);


for (let i = 0; i <= imageContainer.length; i++){
    let currentImage = imageContainer[i];
    currentImage.addEventListener('click', function() {
        image.src = window.getComputedStyle(currentImage).backgroundImage.slice(21,53);
        container.style.display = 'block'
    })
}