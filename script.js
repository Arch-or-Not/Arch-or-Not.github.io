
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault();
  
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
    alert("Lütfen tüm alanları doldurun.");
    return false;
  }

  var formData = new FormData();
  formData.append("name", name);
  formData.append("email", email);
  formData.append("message", message);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "send_email.php");
  xhr.onload = function() {
    if (xhr.status === 200) {
      window.location.href = "tesekkurler.html";
    } else {
      alert("Form gönderilemedi. Lütfen tekrar deneyin.");
    }
  };
  xhr.send(formData);
});
