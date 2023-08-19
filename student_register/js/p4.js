function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");
    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success","form__message--error")
    messageElement.classList.add(`form__message--${type}`,'text-danger');
}

function setInputError(inputElement, message) {
    inputElement.classList.add("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("border", "border-danger");
    inputElement.parentElement.parentElement.querySelector(".form__input-error-message").textContent = "";

}

let = tfeesbool = pfeesbool = ptypebool = otnotbool = adbool = rnobool  = conlinebool = cashbool = false;

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".form__input.form-control").forEach(inputElement => {
        let spaceregex = /^(?! )[A-Za-z0-9 ]*(?<! )$/;
        let feesregex = /^[0-9]*$/;
        let noalpha = /[^a-zA-Z\d\s:]/;     
        
        
        inputElement.addEventListener("blur", e => {
            if(e.target.id === "tfees" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                tfeesbool = false;
            }
            else if(e.target.id === "tfees" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                tfeesbool = false;
            }
            else if (e.target.id === "tfees" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                tfeesbool = false;
            }
            else if(e.target.id === "tfees" && !(feesregex.test(e.target.value))){
                tfeesbool = false;
                setInputError(inputElement, "Must be digits number");
                }
                else if(e.target.id === "tfees" && e.target.value.length > 255  ){
                
                    setInputError(inputElement, "Should not exceed 255 characters");
                    tfeesbool = false; 
                    }
            
            else if(e.target.id === "tfees"){
                tfeesbool = true;
                clearInputError(inputElement);
                bvalidate();
                
            }
        });
        
        inputElement.addEventListener("blur", e => {
            if(e.target.id === "pfees" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                pfeesbool = false;
            }
            else if(e.target.id === "pfees" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                pfeesbool = false;
            }
            else if (e.target.id === "pfees" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                pfeesbool = false;
            }
            else if(e.target.id === "pfees" && !(feesregex.test(e.target.value))){
                pfeesbool = false;
                setInputError(inputElement, "Must be digits number");
                }
                else if(e.target.id === "pfees" && e.target.value.length > 255  ){
                
                    setInputError(inputElement, "Should not exceed 255 characters");
                    pfeesbool = false; 
                    }
            
            else if(e.target.id === "pfees"){
                pfeesbool = true;
                clearInputError(inputElement);
                bvalidate();
                
            }
        });



        inputElement.addEventListener("blur", e => {
            if (e.target.id === "ptype"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                ptypebool = false;
            }
            else if(e.target.id === "ptype"){
                if (e.target.value === "cheque" || e.target.value === "online"){
                    cashbool = false;
                    conlinebool = true;
                    otnotbool = false;
                    console.log("cashbool",cashbool);
                    if(conlinebool){
                        const elem70 = document.getElementById('otlo1');
                        elem70.classList.remove("d-none");
              
            
                    }
                }
                if (e.target.value === "cash"){
                    
                    otnotbool = true;
                    cashbool = true;
                    if(cashbool){
                        const elem70 = document.getElementById('otlo1');
                        elem70.classList.add("d-none");
            
                    }
                }
                console.log(e.target.value)
                ptypebool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });


        inputElement.addEventListener("blur", e => {
            if(e.target.id === "otno" && cashbool){
                clearInputError(inputElement);
            }
            else if (e.target.id === "otno" && e.target.value=="" && conlinebool) {
                setInputError(inputElement, "This is a required question");
                otnotbool = false;
            }
            else if(e.target.id === "otno" && noalpha.test(e.target.value) && conlinebool){
                setInputError(inputElement, "Please remove any special characters");
                otnotbool = false;
            }
            else if(e.target.id === "otno" && !spaceregex.test(e.target.value) && conlinebool){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                otnotbool = false;
            }
            
            else if(e.target.id === "otno" && e.target.value.length > 0 && e.target.value.length < 6 && conlinebool ){
                
                setInputError(inputElement, "Min requirement - 6 characters");
                otnotbool = false;
                }

                    else if(e.target.id === "otno" && e.target.value.length > 255 && conlinebool ){
                    
                        setInputError(inputElement, "Should not exceed 255 characters");
                        otnotbool = false; 
                        }
            else if(e.target.id === "otno" &&  e.target.value.length >= 6 &&  e.target.value.length < 255 && conlinebool){
                otnotbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });



        inputElement.addEventListener("blur", e => {
            if (e.target.id === "adate"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                
                adbool = false;
            }
            else if(e.target.id === "adate"){
                adbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });

        inputElement.addEventListener("blur", e => {
            if(e.target.id === "rno" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                rnobool = false;
            }
            if(e.target.id === "rno" && !spaceregex.test(e.target.value)){
                rnobool = false;
                setInputError(inputElement, "Please remove leading and trailing spaces");
            }
            else if (e.target.id === "rno" && e.target.value=="" ) {
                rnobool = false;
                setInputError(inputElement, "This is a required question");
            }
            else if(e.target.id === "rno" && e.target.value.length > 0 && e.target.value.length < 5 ){
                
                setInputError(inputElement, "Min requirement - 5 characters");
                rnobool = false;
                }
                else if(e.target.id === "rno" && e.target.value.length > 255  ){
                    
                    setInputError(inputElement, "Should not exceed 255 characters");
                    otnotbool = false; 
                    }
            else if(e.target.id === "rno"  &&  e.target.value.length < 255 ){
                rnobool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        }); 
  
    })
});


function bvalidate() {
    console.log(tfeesbool, pfeesbool, ptypebool, otnotbool, adbool, rnobool);

        if(pfeesbool && ptypebool && otnotbool && adbool && rnobool){
            const elem7 = document.getElementById('mybtn');
            elem7.classList.remove("disabled");
            
            const elem8 = document.getElementById('myform');
            elem8.setAttribute("action","review.php")

        }
}

