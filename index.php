<?php 
//You are entering a world of messy code, a commentless void "the scary door" now for some ascii art at the bottom of this file:
//TODO delete indexed.php
//$vote = $_POST['Vote'];//WE CAN USE THIS WHEN ALEX FINISHES HIS STUFF this is likely to be the source of all our problems
$vote = "gender|1;race|2;eco|3";

//database = localhost
//login = backbac2_9babies
//db table= backbac2_baby
//alex1998 = pass for user

$con = mysqli_connect("localhost", "bacbbac2_9babies","alex1998", "backbac2_baby");// how we connect to mysql for server use
//$con = mysqli_connect("74.220.195.132", "bacbbac2_9babies","alex1998", "backbac2_baby");//for other use
if ($con->connect_error){
echo("you idiot");
}
else{
echo "haha";//IT WORKED!
}
$split = eplode(";",$ui);//explodes by ;
$arraylength = count($split);//counts how many thingas are in an array for a for loop.. :D
//$arraylength++;//may prove to be necesary, but until then, screw that... :D
for ($i=0; $i<$arraylength; $i++){//the purpose of this for loop is to go through everything that got exploded and make it into it's own thing
// insert a ton of if's in here for every possibility for launch, each as a function
$operatee = $split[$i];
$topic = explode("|", $operatee);//what we're exploding by | sructure is topic|vote(int)
$option = $topic[2];//it's a 2 for 1!!    
$topic = $topic[1];//got rid of the fugly array     
//$unessec = mysqli_query($con, "SELECT topic FROM baby where topic = ". $topic);
$option = "option".$option;
mysqli_query($con, "UPDATE baby SET ".$option." = option + 1 WHERE topic = '".$topic."' ");//increments a table
echo "holy shit I got this far!";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
}
/*


  ________                  ,d888888888b,                  ________
"""" _.-;'               ,dP"'         `"Qb,           _.-'.'    """"
   .'  <           ,d88buP"               "Qud88b,    <  .'
    `.  `.        dP"   8'   ..       ..   `8   "Qb    \  `.
      `>  `,     dP" .::8 _ :.@;  _  ;@.: _ 8::. "Qb    `,  `>
     /'   /     ,8' .::dP"       `.'       "Qb::. `8,  /'  /'
   /'    `\     dP .:::8(      `--^--'      )8:::. Qb `\ /'
  `-,_     `\   8' ::::"Qba,..,       ,..,adP":::: `8   `-,_
      ~-.  /'  ,8  ::::::,p`""         ""'q,::::::  8,   /' ~-.
      _-'/'   ,d' .:::::,d'               `b,:::::. `b,/'   _-'
   ,-'  `\   ,d' .::::::d'                 `b::::::. `b\ .-'
  `-,_    `\,d' q888q8b,8    ,p       q,    8,d8p888p `b,\`-.
      `-,.  d' d",  ;  `b,   8,       ,8   ,d'  ;  ,"b `b `. `-,.
        .' ,8  8 `  `   `b,  `b,     ,d'  ,d'   '  ' 8  8 ,'  .'
       ,' / q, `b,       `b  a88a. .a88a  d'       ,d' ,p/  ,'
      <  `. `q,  `b,      8      8.8      8      ,d"  ,p'. <
       `.  ; `"Q888`b,    `Q8888P" "Q8888P'    ,d'888P"'  ; `.
_____    `_'         "Q888P"             "Q888P"          `._;   ____
   """"""""                                                 """""""
*/
?>
