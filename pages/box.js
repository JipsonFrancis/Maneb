// box modal
const boxModal = ()=> {
    const modalOverlay = document.querySelector('.overlay-box')
    const buttonBox = document.querySelector('.box-modal')
    const closeBox = document.querySelector('.close-box-modal')

    buttonBox.addEventListener('click', ()=> {
        modalOverlay.classList.add('modal-users-show')
    })

    closeBox.addEventListener('click', ()=> {
        modalOverlay.classList.remove('modal-users-show')
    })
}

boxModal()