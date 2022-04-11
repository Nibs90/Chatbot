/*
Käyttäjän painaessa lähetä-painiketta, haetaan ensin lähetetty viesti, joka syötetään
connect.php tiedostolle, joka puolestaan vertaa sitä tietokannassa oleviin ja palauttaa annetun vastauksen.
Tämän jälkeen skripti luo uuden divin ja syöttää vastauksen käyttäjän näkyville.
*/
$(document).ready(function () {
  $("#send-btn").on("click", function () {
    $value = $("#data").val();
    $msg = `<div class="user-inbox inbox"><div class="msg-header"><p>${$value}</p></div></div>`;
    $(".form").append($msg);
    $("#data").val("");

    $.ajax({
      url: "connect.php",
      type: "POST",
      data: `text=${$value}`,
      success: function (result) {
        $replay = `<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>${result}</p></div></div>`;
        $(".form").append($replay);

        $(".form").scrollTop($(".form")[0].scrollHeight);
      },
    });
  });
});
