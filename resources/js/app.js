import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const erase = document.getElementById('erase');
const modal = document.getElementById('myModal');

erase.addEventListener('click', 

    function () { 

        modal.classList.add('myDisplay');

})


