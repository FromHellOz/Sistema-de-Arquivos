const submit = document.getElementById("submit");
submit.addEventListener("click", validate)

function validate(e){
    e.preventDefault();
    const userField = document.getElementById("user");
    let valid = true;

    if(!userField.value){
        const nameError = document.getElementById("nameError");
        nameError.classList.add("visible");
        userField.classList.add("invalid");
        nameError.setAttribute("aria-hidden", false);
        nameError.setAttribute("aria-invalid", true);
    }
    return valid;
}