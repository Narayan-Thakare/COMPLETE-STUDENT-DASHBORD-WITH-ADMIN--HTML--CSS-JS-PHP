/**
    * Author: Joyesh Meshram
    * (c) Copyright by Asterisc Technocrat
    **/

function setInputError(inputElement, message) {
/**
    * Description : setInputError takes two inputs, an HTML element and a message string.
    *               
    *               Adds red border bootstrap class (for invalid input) to the input HTML element.
    *               
    *               Selects the HTML element in the parent element (two levels up) 
    *               of the inputted HTML element having class 'form__input-error-message'
    * 
    **/
    inputElement.classList.add("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = "";

}
let fnamebool = emailbool = genbool = dobbool = mnobool = gnobool = addbool = citybool = pinbool = false;


document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".form__input.form-control").forEach(inputElement => {
        let emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let spaceregex = /^(?! )[A-Za-z0-9 ]*(?<! )$/;
        let feesregex = /^[0-9]*$/;
        let name1regex = /^[a-zA-Z'\- ]+$/;
        let noalpha = /[^a-zA-Z\d\s:]/;        
        let adrspaceregex = /^(?! )[,A-Za-z0-9 ]*(?<! )$/;

        inputElement.addEventListener("blur", e => {
        if (e.target.id === "ebox" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                emailbool = false;
            }
            else if(e.target.id === "ebox" && !(emailregex.test(e.target.value)) ){
                setInputError(inputElement, "Must be a valid email");
                emailbool = false;
        
                }
            else if(e.target.id === "ebox" && (emailregex.test(e.target.value)) && e.target.value.length < 255 ){
                emailbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });


        inputElement.addEventListener("blur", e => {
            if(e.target.id === "fullname" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                fnamebool = false;
            }
            else if(e.target.id === "fullname" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                fnamebool = false;
            }
            else if (e.target.id === "fullname" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                fnamebool = false;
            }
            else if(e.target.id === "fullname" && !(name1regex.test(e.target.value)) ){
                setInputError(inputElement, "Should only use characters");
                fnamebool = false;

                }
            else if(e.target.id === "fullname" && e.target.value.length > 0 && e.target.value.length < 6 ){
                fnamebool = false;
                setInputError(inputElement, "Min requirement - 6 characters");
                }
            else if(e.target.id === "fullname" && e.target.value.length > 255 ){
                    fnamebool = false;
                    setInputError(inputElement, "Should not exceed 255 characters");
                    }
            else if(e.target.id === "fullname" &&  e.target.value.length >=6 &&  e.target.value.length <= 255 ){
                fnamebool = true;    
                clearInputError(inputElement);
                bvalidate();
            }
        });


        inputElement.addEventListener("blur", e => {
            if (e.target.id === "gen"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                genbool = false;
            }
            else if(e.target.id === "gen" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                genbool = false;
            }
            else if(e.target.id === "gen"){
                genbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if (e.target.id === "dateob"  && e.target.value == "" ) {
                dobbool = false;
                setInputError(inputElement, "This is a required question");
            }
            else if(e.target.id === "dateob" ){
                dobbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });



        inputElement.addEventListener("blur", e => {
            if(e.target.id === "telnam1" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                mnobool = false;
            }
            else if(e.target.id === "telnam1" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                mnobool = false;
            }
            else if (e.target.id === "telnam1" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                mnobool = false;
            }
            else if(e.target.id === "telnam1" && !(feesregex.test(e.target.value))){
                mnobool = false;
                setInputError(inputElement, "Must be digits only");
                }
            else if(e.target.id === "telnam1" && e.target.value.length < 10){
                mnobool = false;
                setInputError(inputElement, "Requirement - 10 digits");
                }
            else if(e.target.id === "telnam1" && e.target.value.length > 10 ){
                    mnobool = false;
                    setInputError(inputElement, "Exceeding 10 digits");
                    }
            
            else if(e.target.id === "telnam1"){
                mnobool = true;
                clearInputError(inputElement);
                bvalidate();
                
            }
        });

        inputElement.addEventListener("blur", e => {
            if(e.target.id === "telnam2" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                gnobool = false;
            }
            else if(e.target.id === "telnam2" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                gnobool = false;
            }
            else if (e.target.id === "telnam2" && e.target.value.length=="" ) {
                setInputError(inputElement, "This is a required question");
                gnobool = false;
            }
            else if(e.target.id === "telnam2" && e.target.value.length>0 && e.target.value.length<10){
                gnobool = false;
                setInputError(inputElement, "Min requirement - 10 digits");
                }
            else if(e.target.id === "telnam2" && e.target.value.length>0 && e.target.value.length>10){
                gnobool = false;
                    setInputError(inputElement, "Exceeding 10 digits");
                    }
            
            else if(e.target.id === "telnam2"){
                gnobool = true;
                clearInputError(inputElement);
                bvalidate();
                
            }
        });


        inputElement.addEventListener("blur", e => {
            if(e.target.id === "addr" && !adrspaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                addbool = false;
            }
            else if (e.target.id === "addr" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                addbool = false;
            }
            else if(e.target.id === "addr" && e.target.value.length > 0 && e.target.value.length < 6 ){
                
                setInputError(inputElement, "Min requirement 6 characters");
                addbool = false;
                }
                else if(e.target.id === "addr" && e.target.value.length > 255 ){
                    addbool = false;
                            setInputError(inputElement, "Should not exceed 255 characters");
                                }
            else if(e.target.id === "addr" &&  e.target.value.length >= 6 &&  e.target.value.length < 255 ){
                addbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if(e.target.id === "citye" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                citybool = false;
            }
            else if(e.target.id === "citye" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                citybool = false;
            }
            else if (e.target.id === "citye" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                citybool = false;
            }
            else if(e.target.id === "citye" && e.target.value.length > 0 && e.target.value.length < 3 ){
                
                setInputError(inputElement, "Minimum requirement 3 characters");
                citybool = false;
                }
                else if(e.target.id === "citye" && e.target.value.length > 255 ){
                    citybool = false;
                            setInputError(inputElement, "Should not exceed 255 characters");
                                }
            else if(e.target.id === "citye" &&  e.target.value.length >= 3 &&  e.target.value.length < 255 ){
                citybool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if(e.target.id === "pinco" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                pinbool = false;
            }
            else if(e.target.id === "pinco" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                pinbool = false;
            }
            else if (e.target.id === "pinco" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                pinbool = false;
            }
            else if(e.target.id === "pinco" && !(feesregex.test(e.target.value))){
                pinbool = false;
                setInputError(inputElement, "Must be digits only");
                }
                else if(e.target.id === "pinco" && e.target.value.length < 6 ){
                    pinbool = false;
                                setInputError(inputElement, "Min requirement - 6 characters");
                                    }
            else if(e.target.id === "pinco" && e.target.value.length > 6 ){
                pinbool = false;
                            setInputError(inputElement, "Should not exceed 6 characters");
                                }
            else if(e.target.id === "pinco" ){
                pinbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });

      
  
    })
});


function bvalidate() {
    console.log(fnamebool, emailbool, genbool, dobbool, mnobool, gnobool, addbool, citybool, pinbool);
        if(fnamebool && emailbool && genbool && dobbool && mnobool && gnobool && addbool && citybool && pinbool ){
            const elem = document.getElementById('mybtn');
            elem.classList.remove("disabled");
            
            const elem2 = document.getElementById('myform');
            elem2.setAttribute("action","page2.php")

        }
}