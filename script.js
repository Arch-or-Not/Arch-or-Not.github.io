
    function openNav() {
      document.getElementById("YanMenu").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("YanMenu").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }

  
// script.js
function showImage(imageUrl) {
  var mainImage = document.getElementById('mainImage');
  mainImage.src = imageUrl;
  mainImage.alt = 'Büyük Resim';
}
