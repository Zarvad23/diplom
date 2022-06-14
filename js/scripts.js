let moreWorks = document.getElementById('moreWorks');
let ourWorks  = document.querySelector('.our-works .container');
let Works  = document.querySelectorAll('.our-works .container .work');

moreWorks.addEventListener('click', function (evt) {
    evt.preventDefault();
    moreWorks.style.display = 'none'
    ourWorks.style.gridTemplateRows = 'repeat(3, 400px)';
    for (let i = 6; i<=Works.length - 1; i++) {
        let work = Works[i]
        work.style.opacity = '1'
    }
})

