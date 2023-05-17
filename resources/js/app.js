import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const erase = document.getElementById('erase');

erase.addEventListener('click', 

    function () {
        
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')
        
        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
        

})


