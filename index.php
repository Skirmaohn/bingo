</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    td {
      border:2px solid black;
      padding:5px;
      text-align: center;
    }
    </style>
    <script type='text/javascript'>
function setMyHandler(){
     var elements = document.getElementsByClassName('td');
     for(var i = 0; i < elements.length; i++){
        elements[i].onclick = function(){};
     }
  }
function colorChanger(el){
  if( el.style.backgroundColor === 'green')
    el.style.backgroundColor = 'white';
  else
    el.style.backgroundColor = 'green';

}

</script>
    <meta charset="utf-8">
    <title>Shot Bingo Dead by Daylight</title>
  </head>
  <body>
<h1>Shot Bingo</h1>
<?php
$dbd = array('Wird aufgehangen',
'Stirbt',
'Flucht über den Jäger',
'Hustet',
'Katzen machen etwas',
'Kurze Pause',
'Flüchtet in die Luke',
'Heilt andere Person',
'Wird geheilt',
'Heilt sich selbst',
'Zerstört Totem',
'Erledigt Generator',
'Flüchtet durchs Tor',
'Begrüßt neuen Zuschauer',
'Neuer Sub',
'Neue Donation',
'Technische Probleme',
'Rettet Person von Haken',
'Killer ist AFK',
'Versteckt sich im Schrank',
'Struggle gelingt',
'Vodka wird erwähnt',
'Energy wird erwähnt',
'Erwähnt Discord/Voicechat',
'Erwähnt Smite',
'Erwähnt Community',
'Lootet Kiste',
'Betäubt Jäger mit Palette',
'Öffnet Tür',
'Spielt den Killer',
'May sagt Oof',
'Vermasselt Fähigkeitencheck',
'Großartiger Fähigkeitencheck',
'May lacht'

 );
$rand_keys = array_rand($dbd,25);
?>
<table >
<tr>
<td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[0]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[1]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[2]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[3]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[4]];?></td>
</tr>
<tr>
<td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[5]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[6]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[7]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[8]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[9]];?></td>
</tr>
<tr>
<td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[10]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[11]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[12]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[13]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[14]];?></td>
</tr>
<tr>
<td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[15]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[16]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[17]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[18]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[19]];?></td>
</tr>
<tr>
<td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[20]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[21]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[22]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[23]];?></td><td onclick="colorChanger(this)";><?php echo $dbd[$rand_keys[24]];?></td>
</tr>
</table>

  </body>
</html>
