const button = document.querySelector('.btn_menu');
const nav = document.querySelector('.nav_responsive');
button.addEventListener("click",()=>{
    nav.classList.toggle('res')
})
//footer
const botton = document.querySelector(".btn_info"); 
const botton1 = document.querySelector(".btn_redes"); 
const botton2 = document.querySelector(".btn_politica"); 
const botton3 = document.querySelector(".btn_contacto"); 
const cambio = document.querySelector('.inf');
const cambio1 = document.querySelector('.sociales');
const cambio2 = document.querySelector('.politica');
const cambio3 = document.querySelector('.contactos');
botton.addEventListener("click",()=>{
    cambio.classList.toggle("inf");
})
botton1.addEventListener("click",()=>{
   cambio1.classList.toggle("sociales");
})
botton3.addEventListener("click",()=>{
    cambio3.classList.toggle("contactos");
 })
botton2.addEventListener("click",()=>{
   cambio2.classList.toggle("politica");
})

