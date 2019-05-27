<footer class="footer">
    <div class="footer-content">
        <div class="footer-clmn">
            2019 Sukutra <a href="http://asta.com">Astos</a>
        </div>
        <div class="footer-clmn">
            Elpastas: <a href="mailto:asta@gmail.com">asta@gmail.com</a>
        </div>
    </div>
</footer>
<script>
      function menu() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
</script>
