<template>
  <div id="z6" >
      <nav class="navbar navbar-expand-lg navbar-dark ">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end list" id="navbarNavDropdown">
                  <ul class="navbar-nav  ">
                      <li class="nav-item">
                          <a  aria-current="page" href="#">ELO BOOST</a>
                      </li>
                      <li class="nav-item">
                          <a  aria-current="page" href="#">CONTA UNRANKED</a>
                      </li>
                      <li class="nav-item">
                          <a  aria-current="page" href="#">BOOT UP</a>
                      </li>
                      <li class="nav-item">
                          <a  aria-current="page" href="#">COACHING</a>
                      </li>


                  </ul>
              </div>
          </div>
      </nav>
      <div class="row justify-content-center">
          <div id="frases"></div>
      </div>
  </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
$(document).ready(function(){
    var textos =
        [
            "MELHORES BOOSTERS",
            " O MELHOR PREÇO",
            "BOOT UP EM 4 DIAS",
            "SEGURANÇA",

        ];
    var atual = 0;
    $('#frases').text(textos[atual++]);
    setInterval(function() {
        $('#frases').fadeOut(function() {
            if (atual >= textos.length) atual = 0;
            $('#frases').text(textos[atual++]).fadeIn(1000);
        });
    }, 5000);
});
</script>
