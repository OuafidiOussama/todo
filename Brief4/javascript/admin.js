const btn2 = document.querySelector('.btn2')
const btn3 = document.querySelector('.btn3')
const btn4 = document.querySelector('.btn4')
const add_clubbtn= document.querySelector('.card-add-club')
const add_eventbtn= document.querySelector('.card-add-event')
const more= document.querySelector('.more')
const add_club= document.querySelector('.add-club')
const shownon1 = document.querySelector('.shownon1')
const shownon2 = document.querySelector('.shownon2')
const close_more = document.querySelector('.close-btn-more')
const close_add = document.querySelector('.close-btn-add')
const cancel1 = document.querySelector('.cancel-club')

const info = document.querySelector('.info')
const member_info = document.querySelector('.member-info-rep')




info.addEventListener('mouseover',()=>{
    member_info.classList.remove('hide')

})
info.addEventListener('mouseleave',()=>{
    member_info.classList.add('hide')

})







add_clubbtn.addEventListener('click', ()=>{
    add_club.classList.remove('hide')
})
close_add.addEventListener('click', ()=>{
    add_club.classList.add('hide')
})
cancel1.addEventListener('click', ()=> {
    add_club.classList.add('hide')
})

btn2.addEventListener('click', ()=>{
    more.classList.remove('hide')

})
close_more.addEventListener('click', ()=> {
    more.classList.add('hide')


})
btn3.addEventListener('click', ()=>{
    shownon1.classList.toggle('hide');
    
})
btn4.addEventListener('click', ()=>{
    shownon2.classList.toggle('hide');
    
})