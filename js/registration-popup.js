(function () {
    'use strict'
  
    document.querySelector('#user-btn').addEventListener('click', function () {
        document.querySelector('.form-container').classList.add('visible')
        document.querySelector('#register-close').style.transition = ".33s all"
    })
    document.querySelector('#register-close').addEventListener('click', function () {
        if (document.querySelector('.form-container').classList.contains('visible')){
            document.querySelector('#register-close').style.transition = "none"
            document.querySelector('.form-container').classList.remove('visible')
        }
    })
    // $('.form-container').on('focusout', function () {
    //     document.querySelector('.form-container').classList.remove('visible')
    // })



  })()
  