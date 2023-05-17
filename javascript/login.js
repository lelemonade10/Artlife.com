
let logInForm = document.getElementById("logInForm");

logInForm.addEventListener("submit", (e) => {
    e.preventDefault();

    let username = document.getElementById("username");
    let password = document.getElementById("password");

    if (username.value == "userControl@artlife.com" && password.value == "user123")
    {
        window.open("/main-page.html", "_self");
    }
    else if (username.value == "" || password.value == "")
    {
        alert("Please input Username and Password");
    }
    else 
    {
        alert("Email or Password is incorrect");
    }

});