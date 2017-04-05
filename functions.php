<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeCoffee($type) {
  if ($type == 'counterstrike') {
    echo '<p>Counter-Strike is a series of multiplayer first-person shooter video games, in which teams of terrorists and counter-terrorists battle to, respectively, perpetrate an act of terror and prevent it.</p>';
  } else if ($type == 'leagueoflegends') {
    echo '<p>League of Legends is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and macOS.</p>';
  } else if ($type == 'Dota2') {
    echo '<p>Dota 2 is a free-to-play multiplayer online battle arena video game developed and published by Valve Corporation.</p>';
  } else if ($type == 'Overwatch') {
    echo '<p>Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Microsoft Windows, PlayStation 4, and Xbox One.</p>';
  } else if ($type == 'Street Fighter') {
    echo '<p>Street Fighter, commonly abbreviated as SF or スト, is a fighting video game franchise by Capcom. The second game in the series is credited with establishing many of the conventions of the one-on-one fighting genre.</p>';
  } else if ($type == 'Super Smash Bros') {
    echo '<p>Super Smash Bros., known in Japan as Dairantō Smash Brothers, is a series of crossover fighting games published by Nintendo, that primarily features characters from franchises established on its systems.</p>';
  } else if ($type == 'Call of Duty') {
  	echo '<p>Call of Duty is a first-person shooter video game franchise. The series began on Microsoft Windows, and later expanded to consoles and handhelds. Several spin-off games have been released.</p>';
  } else if ($type == 'Gears of War') {
  	echo '<p>Gears of War is a video game franchise created and originally owned by Epic Games, developed and managed by The Coalition, and owned and published by Microsoft Studios.</p>';
  } else if ($type == 'halo') {
  	echo '<p>Halo is a military science fiction first-person shooter video game franchise created by Bungie and now managed and developed by 343 Industries, a subsidiary of Microsoft Studios.</p>';
  } else {
    echo '<p>That&rsquo;s not a real Esport.</p>';
  }
}