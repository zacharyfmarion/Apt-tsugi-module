<?php

class APT{
  /*
    Function to read grade info from
  */
  static function getInfo($text){
    // creating a dom object to load html
    $DOM = new DOMDocument;
    $DOM->loadHTML($text);

    // Not sure what format the file is in right now...
    $studentId = $DOM->getElementById('student-id')->textContent;
    $questionId = $DOM->getElementById('question-id')->textContent;
    $grade = $DOM->getElementById('grade')->textContent;

    echo($studentId.", ".$grade);

    return array($studentId, $questionId, $grade);
  }

}

?>
