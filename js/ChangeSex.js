let Male = document.querySelector('.individualClothsMale');
let Female = document.querySelector('.individualClothsFemale');
let btnMale = document.querySelector('.ChangeBtnMale');
let btnFemale = document.querySelector('.ChangeBtnFemale');

function ChangeSex() {
    btnMale.onclick = function (evt) {
        evt.preventDefault()
        Female.classList.add('noActive')
        Male.classList.remove('noActive');
        btnMale.classList.add('changeBtnsActive');
        btnFemale.classList.remove('changeBtnsActive');
    }
    btnFemale.onclick = function (evt) {
        evt.preventDefault()
        Male.classList.add('noActive')
        Female.classList.remove('noActive');
        btnFemale.classList.add('changeBtnsActive');
        btnMale.classList.remove('changeBtnsActive');
    }
}

ChangeSex();