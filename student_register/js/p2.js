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
let workbool = ccbool = enbool = false;

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".form__input.form-control").forEach(inputElement => {
        let spaceregex = /^(?! )[A-Za-z0-9 ]*(?<! )$/;
        let noalpha = /[^a-zA-Z\d\s:]/;        


      

        inputElement.addEventListener("blur", e => {
            if(e.target.id === "ccname" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                ccbool = false;
            }
            else if(e.target.id === "ccname" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                ccbool = false;
            }
            else if (e.target.id === "ccname" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                ccbool = false;
            }
            else if(e.target.id === "ccname" && e.target.value.length > 0 && e.target.value.length < 6 ){
                
                setInputError(inputElement, "Min requirement - 6 characters");
                ccbool = false;
                }
                else if(e.target.id === "ccname" && e.target.value.length > 255 ){
                    ccbool = false;
                            setInputError(inputElement, "Should not exceed 255 characters");
                                }
            else if(e.target.id === "ccname" &&  e.target.value.length >= 6 &&  e.target.value.length < 255 ){
                ccbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });



        inputElement.addEventListener("blur", e => {
            if (e.target.id === "workin"  && e.target.value == "" ) {
                setInputError(inputElement, "This is a required question");
                workbool = false;
            }
            else if(e.target.id === "workin" ){
                workbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });


        inputElement.addEventListener("blur", e => {
            if(e.target.id === "enumber" && noalpha.test(e.target.value)){
                setInputError(inputElement, "Please remove any special characters");
                enbool = false;
            }
            else if(e.target.id === "enumber" && !spaceregex.test(e.target.value)){
                setInputError(inputElement, "Please remove leading and trailing spaces");
                enbool = false;
            }
            else if (e.target.id === "enumber" && e.target.value=="" ) {
                setInputError(inputElement, "This is a required question");
                enbool = false;
            }
            else if(e.target.id === "enumber" && e.target.value.length > 0 && e.target.value.length < 6 ){
                
                setInputError(inputElement, "Min requirement - 6 characters");
                enbool = false;
                }
                else if(e.target.id === "enumber" && e.target.value.length > 255 ){
                    enbool = false;
                            setInputError(inputElement, "Should not exceed 255 characters");
                                }
            else if(e.target.id === "enumber" &&  e.target.value.length >= 6 &&  e.target.value.length < 255 ){
                enbool = true;
                clearInputError(inputElement);
                bvalidate();
            }
        });



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
  
    })
});


function bvalidate() {


        console.log(workbool, ccbool, enbool);
        if(workbool && ccbool && enbool){
            const elem3 = document.getElementById('mybtn');
            elem3.classList.remove("disabled");
            
            const elem4 = document.getElementById('myform');
            elem4.setAttribute("action","page3.php")

        }


}