function validate(){
    var nwp = document.getElementById("pass1").value;
    var cps = document.getElementById("pass2").value;
    if ( nwp !== "" && cps !== ""){
    alert ("submitted successfully");
    window.location.href = "login.html"; // Redirecting to other page.
    return false;
    }
    else if ( nwp == "" && cps == ""){
        alert ("insert a new password");
        return false;
}
}