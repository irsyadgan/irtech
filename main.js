//div 1
window.addEventListener('scroll', function (e)
{
    const parallax = document.getElementById
    ("parallaxbg1");

    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset
    * 0.7 + "px";

})

window.addEventListener('scroll', function (e)
{
    
    const target = document.querySelector('.robot-gambar');

    var scrolled = window.pageYOffset;
    var rate = scrolled * -0.2;


    target.style.transform = 'translate3d(0px, '+rate+'px , 0px)'
    // target.style.background = '#ffcc00';
})

window.addEventListener('scroll', function (e)
{
    
    const target = document.querySelector('.Kuy__Belajar__Robot__');

    var scrolled = window.pageYOffset;
    var rate = scrolled * 0.1;

    target.style.transform = 'translate3d(0px, '+rate+'px , 0px)'
    // target.style.background = '#ffcc00';
})

window.addEventListener('scroll', function (e)
{
    
    const target = document.querySelector('.Irtech_Merupakan');

    var scrolled = window.pageYOffset;
    var rate = scrolled * 0.1;

    target.style.transform = 'translate3d(0px, '+rate+'px , 0px)'
    // target.style.background = '#ffcc00';
})

//div2
window.addEventListener('scroll', function (e)
{
    const parallax = document.getElementById
    ("parallaxbg2");

    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset
    * 0.7 + "px";
})
window.addEventListener('scroll', function (e)
{
    
    const target = document.querySelector('.benefit-hp');

    var scrolled = window.pageYOffset;
    var rate = scrolled * -0.4;
    //var rate2 = scrolled * 0.6;
    // console.log(target.style);

    if (scrolled > 800)
    {
        target.style.transform = 'translate3d('+rate2+'px, 0px , 0px)'
        target.style.background = '#ffcc00';
    }
    else if (scrolled < 800)
    {
        target.style.transform = 'translate3d('+rate+'px, 0px , 0px)'
        
    }

    
    // target.style.background = '#ffcc00';
})
//div 3
// window.addEventListener('scroll', function (e)
// {
//     const parallax = document.getElementById
//     ("parallaxbg3");

//     let offset = window.pageYOffset;
//     parallax.style.backgroundPositionY = offset
//     * -0.05 + "px";
// })

window.addEventListener('scroll', function (e)
{
    
    const target = document.querySelector('.video-laptop');
    var scrolled = window.pageYOffset;
    var rate = scrolled * 0.5;

    if (scrolled > 1200)
    {
        target.style.transform = 'scale('+(1 + rate/13)/100+')'
    }
    
    
    // target.style.background = '#ffcc00';
})