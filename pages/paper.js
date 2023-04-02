// box modal
const boxModal = ()=> {
    const modalOverlay = document.querySelector('.overlay-paper')
    const buttonBox = document.querySelector('.paper-modal')
    const closeBox = document.querySelector('.close-paper-modal')

    buttonBox.addEventListener('click', ()=> {
        modalOverlay.classList.add('modal-users-show')
    })

    closeBox.addEventListener('click', ()=> {
        modalOverlay.classList.remove('modal-users-show')
    })
}

boxModal()