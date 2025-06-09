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