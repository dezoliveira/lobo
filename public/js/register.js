const btnRegister = document.getElementById("btnRegister")

const validateForm = () => {
  const password = document.getElementById("password")
  const confirmPassword = document.getElementById("confirmPassword")

  if (password.value !== confirmPassword){
    return false
  }

  return true
}

// btnRegister.addEventListener('click', () => {
//   validateForm()
// })