    let horisontalScroll = document.querySelector('.slider');
    let leftBtn = document.getElementById('leftBtn');
    let rightBtn = document.getElementById('rightBtn');

    rightBtn.addEventListener('click', ()=>{
        horisontalScroll.style.scrollBehavior = "smooth";
        horisontalScroll.scrollLeft += 355;
    });

    leftBtn.addEventListener('click', ()=>{
        horisontalScroll.style.scrollBehavior = "smooth";
        horisontalScroll.scrollLeft -= 355;
    });