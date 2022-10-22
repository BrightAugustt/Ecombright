const form = document.getElementById('form');
const cname = document.getElementById('cname');
const cemail = document.getElementById('cemail');
const cpass = document.getElementById('cpass');
const ccountry = document.getElementById('ccountry');
const ccity = document.getElementById('ccity');

form.addEventListener('register', e =>{
    e.preventDefault();

    validateInputs();

});

const setError = (element,message) => {
    const  inputControl = element = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}
const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
}
const validateInputs = () => {

    const cnameValue = cname.Value.trim();
    const cemailValue = cemail.value.trim();
    const cpassValue =cpass.value.trim();
    const ccountryValue = ccountry.value.trim();
    const ccityValue = ccity.value.trim();
    const ccontactValue = ccontact.value.trim();


}

if (cnameValue === ''){
    setError(cname, 'fullname is require');

} else {
    setSuccess(cname);
}
