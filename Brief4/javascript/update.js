const cancel2 = document.querySelector('.cancel-update')
const update =document.querySelector('.update')
const close_update = document.querySelector('.close-btn-update')
const updatebtn = document.querySelectorAll('.event-update')


close_update.addEventListener('click', ()=>{
    update.classList.add('hide')

})

cancel2.addEventListener('click', ()=> {
    update.classList.add('hide')
})

for( var i=0 ; i < updatebtn.length ; i++){
    updatebtn[i].addEventListener('click', ()=>{
        update.classList.remove('hide')
    
    })
    

}