/**
    * Author: Joyesh Meshram
    * (c) Copyright by Asterisc Technocrat
    **/



function setInputError(inputElement, message) {
    inputElement.classList.add("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = "";

}

let = brunchbool = coobool = addbool = btbool = spubool = dpubool =false;
let tbool = true;

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".form__input.form-control").forEach(inputElement => {
        let spaceregex = /^(?! )[A-Za-z0-9 ]*(?<! )$/;
        let noalpha = /[^a-zA-Z\d\s:]/;        


        inputElement.addEventListener("blur", e => {
            if (e.target.id === "brunch"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                brunchbool = false;
            }
            else if(e.target.id === "brunch" && e.target.value.length < 255 ){
                brunchbool = true;
                clearInputError(inputElement);
                bvalidate();
                
            }
        });

        inputElement.addEventListener("blur", e => {
            if (e.target.id === "coname"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                coobool = false; 
            }
            else if(e.target.id === "coname" && e.target.value.length < 255 ){
                coobool = true; 
                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if (e.target.id === "btname"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                btbool = false; 
            }
            else if(e.target.id === "btname" && e.target.value.length < 255 ){
                btbool = true; 
                clearInputError(inputElement);
                bvalidate();
            }
        });



        inputElement.addEventListener("blur", e => {
            if (e.target.id === "sfilename"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                spubool = false;
            }
            else if(e.target.id === "sfilename"){
                spubool = true;

                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if (e.target.id === "dfilename"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                dpubool = false;
            }
            else if(e.target.id === "dfilename"){
                dpubool = true;
               
                clearInputError(inputElement);
                bvalidate();
            }
        });
      
  
  
    })
});


function bvalidate() {

        if(brunchbool && coobool  && btbool && tbool && spubool && dpubool){
            const elem5 = document.getElementById('mybtn');
            elem5.classList.remove("disabled");
            
            const elem6 = document.getElementById('myform');
            elem6.setAttribute("action","page4.php")

        }

}