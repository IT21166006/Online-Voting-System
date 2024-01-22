function check(){
    var email = document.getElementById("ema").value;
    var password = document.getElementById("pass").value;
    if ( email !== "" && password !== ""){
    window.location.href = "voter.html"; // Redirecting to other page.
    return false;
    }
    else if (email == "" && password == ""){
        alert ("check your fields");
        return false;
}
}