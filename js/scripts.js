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

let block_show = false;

function scrollTracking(){
    if (block_show) {
        return false;
    }

    let wt = $(window).scrollTop();
    let wh = $(window).height();
    let et = $('.active').offset().top;
    let eh = $('.active').outerHeight();
    let dh = $(document).height();

    if (wt + wh >= et || wh + wt == dh || eh + et < wh){
        block_show = true;

        // Код анимации
        $('.active span:eq(0)').show('fast', function(){
            $(this).next().show('fast', arguments.callee);
        });
    }
}

$(window).scroll(function(){
    scrollTracking();
});

$(document).ready(function(){
    scrollTracking();
});
