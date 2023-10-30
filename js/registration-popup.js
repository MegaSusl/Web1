(function () {
    'use strict'
  
    document.querySelector('#user-btn').addEventListener('click', function () {
        if (document.querySelector('.form-container').classList.contains('visible')){
            document.querySelector('.form-container').classList.remove('visible')
        }
        else {
            document.querySelector('.form-container').classList.add('visible')
        }
      
    })
  })()
  