user = document.getElementById("user");
passwd = document.getElementById("password");

function validate(event) {
  if (user.value === "user" && passwd.value === "pass") {
    alert("OK");
  } else {
    event.preventDefault();
    user.classList.add("user_pass_fail");
    passwd.classList.add("user_pass_fail");
  }
}
