// users modal
const userModal = ()=> {
    const modalOverlay = document.querySelector('.modal-users-overlay')
    const button = document.querySelector('.users-moddal')
    const closeUsers = document.querySelector('.close-users-modal')

    button.addEventListener('click', ()=> {
        modalOverlay.classList.add('modal-users-show')
    })

    closeUsers.addEventListener('click', ()=> {
        modalOverlay.classList.remove('modal-users-show')
    })
}

userModal()