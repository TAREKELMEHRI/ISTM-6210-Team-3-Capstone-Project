/*
function setFormMessage(formElement, type, message) {
	const messageElement = formElement.querySelector(".form__message");

	messageElement.textContent = messageElement
	messageElement.classList.remove("form__message--success", "form__message--error");
	messageElement.classList.add("form__message--${type}");
}

function setInputError(inputElement, message) {
	inputElement.classList.add("form__input--error");
	inputElement.parentElement.querySelector(".form__input--error-message").textContent = message;
}


document.addEventListener("DOMContentLoaded", () => {
	const loginForm = document.querySelector("#login");
	const createAccountForm = document.querySelector("#createAccount");
});

document.querySelector("#linkCreateAccount").addEventListener("click", () => {
	e.preventDefault();
	loginForm.classList.add("form--hidden");
	createAccountForm.classList.remove("form--hidden");
});

document.querySelector("#linkLogin").addEventListener("click", () => {
	e.preventDefault();
	createAccountForm.classList.add("form--hidden");
	loginForm.classList.remove("form--hidden");
});


loginForm.addEventListener("submit", e=> {
	e.preventDefault();

setFormMessage(loginForm, "success", "You're logged in");
	setFormMessage(loginForm, "error", "Invalid Username or Password");
});
*/



