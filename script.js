window.onload = function () {
  const modal = document.getElementById("loginModal");
  const closeBtn = document.getElementById("closeModal");
  const loginForm = document.getElementById("loginForm");

  // Show the modal on page load
  modal.style.display = "block";

  // Close modal when clicking the close button (×)
  closeBtn.onclick = function () {
    modal.style.display = "none";
  };

  // Close modal when submitting the login form (add your login logic here)
  loginForm.onsubmit = function (e) {
    e.preventDefault(); // prevent actual submission for now
    // You can add login validation here
    alert("Logged in as " + loginForm.username.value);
    modal.style.display = "none";
  };

  // Optional: close modal if user clicks outside the modal content area
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
};
