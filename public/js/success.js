window.onload = () => {
  let countdown = document.getElementById("countdown")
  let count = 3

  const timer = setInterval(() => {
    count--

    countdown.textContent = count

    if (count === 0) {
      clearInterval(timer)
      window.location.href='../pages/auth/login.php'
    }
  }, 2000)
}