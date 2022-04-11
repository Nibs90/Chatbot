<?php
//Tietokantaan yhdistäminen
$conn = mysqli_connect("localhost", "root", "", "Onlinebot") or die("Database Error");
//Tietokanta toimii localhostina, siksi ei salasanaa
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$check_data = "SELECT response FROM chatbot WHERE messages LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// Jos käyttäjän kysymys vastaa tietokannassa olevaa kysymystä, annetaan siihen vastaus. 
// Muussa tapauksessa pahoitellaan
if (mysqli_num_rows($run_query) > 0) {
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['response'];
    echo $replay;
} else {
    echo "Pahoitteluni, en ymmärrä";
}
