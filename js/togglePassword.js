function togglePassword() {
  const input = document.getElementById("password");
  const eye = document.getElementById("icon-eye");
  const eyeOff = document.getElementById("icon-eye-off");

  if (input.type === "password") {
    input.type = "text";
    eye.classList.add("hidden");
    eyeOff.classList.remove("hidden");
  } else {
    input.type = "password";
    eye.classList.remove("hidden");
    eyeOff.classList.add("hidden");
  }
}
