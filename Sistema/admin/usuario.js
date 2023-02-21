const botton = document.querySelector(".btn_perfil"); 
const botton1 = document.querySelector(".btn_carro"); 
const botton2 = document.querySelector(".btn_compraA"); 
const botton3 = document.querySelector(".btn_productosA"); 
const botton4 = document.querySelector(".btn_facturas"); 
const botton5 = document.querySelector(".btn_cliente"); 
const cambio = document.querySelector('.perfil');
const cambio1 = document.querySelector('.carrito');
const cambio2 = document.querySelector('.compras');
const cambio3 = document.querySelector('.producto');
const cambio4 = document.querySelector('.factura');
const cambio5 = document.querySelector('.cliente');
botton.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechaperfil");
    cambio.classList.toggle("perfil");
    img.style.transform = "rotate(180deg)";
    img.style.transition = "transform 0.5s";
    if(cambio.classList.contains("perfil")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";
    }
})
botton1.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechacarro");
   cambio1.classList.toggle("carrito");
   img.style.transform = "rotate(180deg)";
   img.style.transition = "transform 0.5s";
   
    if(cambio1.classList.contains("carrito")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";

    }
})
botton2.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechacompras");
   cambio2.classList.toggle("compras");
   img.style.transform = "rotate(180deg)";
   img.style.transition = "transform 0.5s";
    if(cambio2.classList.contains("compras")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";
    }
})
botton3.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechaproductos");
   cambio3.classList.toggle("producto");
   img.style.transform = "rotate(180deg)";
   img.style.transition = "transform 0.5s";
    if(cambio3.classList.contains("producto")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";
    }
})
botton4.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechafacturas");
   cambio4.classList.toggle("factura");
   img.style.transform = "rotate(180deg)";
   img.style.transition = "transform 0.5s";
    if(cambio4.classList.contains("factura")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";
    }
})
botton5.addEventListener("click",()=>{
   const img = document.querySelector(".img_flechaclientes");
   cambio5.classList.toggle("cliente");
   img.style.transform = "rotate(180deg)";
   img.style.transition = "transform 0.5s";
    if(cambio5.classList.contains("cliente")==true){
      img.style.transform = "rotate(0)";
      img.style.transition = "transform 0.5s";
    }
})

