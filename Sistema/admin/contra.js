const iconeye = document.querySelector(".eye1");
const iconeye2 = document.querySelector(".eye2");
const iconeye3 = document.querySelector(".eye3");
iconeye.addEventListener("click", function(){
if(this.nextElementSibling.type === "password"){
    this.nextElementSibling.type = "text";
}else{
    this.nextElementSibling.type = "password";
}

})
iconeye2.addEventListener("click", function(){
    if(this.nextElementSibling.type === "password"){
        this.nextElementSibling.type = "text";
    }else{
        this.nextElementSibling.type = "password";
    }
    
    })
    iconeye3.addEventListener("click", function(){
        if(this.nextElementSibling.type === "password"){
            this.nextElementSibling.type = "text";
        }else{
            this.nextElementSibling.type = "password";
        }
        
        })