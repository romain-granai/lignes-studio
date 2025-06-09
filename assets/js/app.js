const lenis = new Lenis({
    duration: 1,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
    direction: 'vertical',
    gestureDirection: 'vertical',
    smooth: true,
    smoothTouch: false,
    infinite: false,
    // prevent: (node) => node.classList.contains('woocommerce-MyAccount-navigation'),
});
  
requestAnimationFrame(raf);

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

dropdowns();

function dropdowns(){
    var dropdowns = document.querySelectorAll('.dropdown');

    if(!dropdowns){ return };

    dropdowns.forEach((dropdown) => {
        var trigger = dropdown.querySelector('.dropdown__trigger');

        trigger.addEventListener('click', function(){
            dropdown.classList.toggle('dropdown--is-open');
        });
    });
}