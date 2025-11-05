<?php
include("Team.php");
$myTeam = new Team("Tigers");


myTeam->finalScore(2,2);
myTeam->finalScore(3,2);
myTeam->finalScore(5,0);
myTeam->finalScore(1,2);
myTeam->finalScore(0,2);


echo "\nTigers total points is" . $myTeam->getTotalPoints();
echo "\nTigers total goal average is" .  $myTeam->getGoalAverage();

?> 