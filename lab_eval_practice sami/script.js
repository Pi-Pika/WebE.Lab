const nameInput =document.getElementById('name');
const nameError = document.getElementById('nameError');
const emailInput =  document.getElementById('email');
const emailError = document.getElementById('emailError');
const mobile = document.getElementById('mobile');
const mobileError = document.getElementById('mobileError');
const gender = document.getElementById('gender');
const genderError = document.getElementById('genderError');
const designation = document.getElementById('designation');
const designationError = document.getElementById('designationError');
const salary = document.getElementById('salary');
const salaryError = document.getElementById('salaryError');
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const mobileRegex = /^01[3-9]+[0-9]{8}$/;

nameInput.addEventListener('input', (event) => {
    if (nameInput.value.length > 6) {
        nameError.textContent = ''
    } else if (nameInput.value.length === 0) {
        nameError.textContent = 'Name cannot be empty';
        nameError.style.color = 'red';
        event.preventDefault();
    } else {
        nameError.textContent = 'Name must be at least 6 characters long';
        nameError.style.color = 'red';
        event.preventDefault();
    }
})

emailInput.addEventListener('input', (event)=>{
    
    if (emailRegex.test(emailInput.value)) {
        emailError.textContent = 'You have entered a valid email';
        emailError.style.color = 'green';
    } else if(emailInput.value.length === 0) {
        emailError.textContent = 'Email cannot be empty';
        emailError.style.color = 'red';
        event.preventDefault();
    } else {
        emailError.textContent = 'you have entered an invalid email';
        emailError.style.color = 'red';
        event.preventDefault();
    }
})

mobile.addEventListener('input', (event) => {
    if (mobileRegex.test(mobile.value)) {
        mobileError.textContent = 'You have enetered a valid mobile number';
        mobileError.style.color = 'green';
    } else if (mobile.value.length === 0) {
        mobileError.textContent  = 'Mobile number can not be empty';
        mobilError.style.color = 'red';
    } else {
        mobileError.textContent = 'You have entered an invalid mobile number';
        mobileError.style.color = 'red';
        event.preventDefault();
    }
})

gender.addEventListener('change', (event) => {
    if (gender.value === '') {
        genderError.textContent = 'Please select a gender';
        genderError.style.color = 'red';
        event.preventDefault();
    } else {
        genderError.textContent = '';
    }
})

designation.addEventListener('input', (event) => {
    if (designation.value.length > 0) {
        designationError.textContent = '';
    } else {
        designationError.textContent = 'Designation cannot be empty';
        designationError.style.color = 'red';
        event.preventDefault();
    }
})

salary.addEventListener('input', (event) => {
    if (salary.value.length > 0) {
        salaryError.textContent = '';
    } else {
        salaryError.textContent = 'Salary cannot be empty';
        salaryError.style.color = 'red';
        event.preventDefault();
    }
})