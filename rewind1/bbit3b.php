<?php
/*
  Consider the following string(bbit3c.txt)
  It constains names(surname,second_name,first_name),number,country and country code of some individuals
  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows
      a). first_name second_name,surname (# country_code(0) number[country])
      b). .......
      c). .......
    Summary
     -- Total names : total.
     -- Total unique countries : total(list of countries - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1)
 */

$quize = "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
 |'We were not meant to be somebody--we were meant to know Somebody.'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'.Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
 |'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
 |'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'.Calvin,John C.1530-10-09.https://www.brainyquote.com/authors/john_calvin|
 'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
 |'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
 |'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
 |'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance is not about not having beliefs. It is about how your beliefs lead you to treat people who disagree with you.'.KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
 |'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
 'It is not opinions that man needs: it is TRUTH...'.Bonar Horatius B.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
 'Nothing could be more irrational than the idea that something comes from nothing.'.SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
 |'He is no fool who gives what he cannot keep to gain that which he cannot lose.'.Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot";

// //  echo $quiz[3];

$quiz = explode('|', $quize);
 ?>
<html>
<body>

<h1>Quotes with authors names</h1>
<ol class="list-group">
  <?php foreach($quiz as $rows){
    // quote part
   $endofquote = strrpos($rows,".'.");
   $data = substr($rows, $endofquote);
   $quote = str_replace("'","",substr($rows, 0, $endofquote));
// first name part
   $explodedend = explode(".h",$data);
  //  url
   $url=array_pop($explodedend);
 $end_of_fname = strrpos($data, ",");
   $fname = str_replace(".'."," - ",substr($data, 0,$end_of_fname));
// last name
   $last_parts = substr($data,$end_of_fname);
  $end_of_lname = strpos($last_parts,".");
  $lname= substr($last_parts, 0,$end_of_lname);
// date
  $dates = substr($last_parts,$end_of_lname);
  $end_of_date = strrpos($dates,".");
  $date = date("Y", strtotime(str_replace( ".https://bit."," ",substr($dates, 1,$end_of_date))));
?>

   <li><?php
  // print_r($explodedline); echo "<br>";
   echo '"'. $quote .'" ';
    ?> <a href="<?php echo  "h". $url ?>"><?php echo $fname." " ?></a><?php echo $lname?><span>    ( <?php echo $date ?>)</span>
  </li>

  <?php }?>
  </ol>


</body>

</html>
