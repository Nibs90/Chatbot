<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChattiBotti</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#closewindow").click(function() {
        $(".wrapper").remove();
      });
    });
  </script>
</head>

<body>
  <div class="wrapper">
    <div class="title">Chatbot <button id="closewindow" title="Sulje ikkuna"><i class="fa-solid fa-xmark"></i></button>

    </div>
    <div class="form">
      <div class="bot-inbox inbox">
        <div class="icon">
          <i class="fa-regular fa-user"></i>
        </div>
        <div class="msg-header">
          <p>Hei, kuinka voin olla avuksi?</p>
        </div>
      </div>
    </div>
    <div class="typing-field">
      <div class="input-data">
        <input id="data" type="text" placeholder="Kirjoita jotain tähän" required>
        <button id="send-btn">Lähetä</button>
      </div>
    </div>
  </div>

  <script src="bot.js">

  </script>

</body>

</html>