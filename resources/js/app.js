import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])



const myModal = document.getElementById('Modal');
const myInput = document.getElementById('delete');

myInput.addEventListener('click', function () {

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })

})


