const btnRegister = document.getElementById("btnRegister")

const validateForm = () => {
  const password = document.getElementById("password")
  const confirmPassword = document.getElementById("confirmPassword")

  if (password.value !== confirmPassword.value){
    return false
  }

  return true
}

// btnRegister.addEventListener('click', () => {
//   validateForm()
// })