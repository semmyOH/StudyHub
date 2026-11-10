<?php
$gebruikers = [
  "admin" => "geheim123",
  "student" => "welkom01",
  "docent" => "phprules",
  "stefan" => "ikhouvankaas",
  "sem" => "supercool123"
];

$gebruiker = $_POST["gebruiker"];
$wachtwoord = $_POST["wachtwoord"];

if (isset($gebruikers[$gebruiker]) && $gebruikers[$gebruiker] == $wachtwoord) {
  echo "<h2>Welkom, $gebruiker!</h2>";
} else {
  echo "<p>Geen toegang.</p>";
}
?>