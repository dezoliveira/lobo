let exit = document.getElementById("exit")

const logout = () => {
  window.location.href = "../../pages/auth/login.php"
}

exit.addEventListener("click", () => {
  logout()
})