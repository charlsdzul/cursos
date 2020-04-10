<?php
/* 

//############################################# CONDICIONALES - LOOPS

➤ if

    if (condition) {
        code to be executed if condition is true;
    }




➤ if-else

    if (condition) {
        code to be executed if condition is true;
    } else {
        code to be executed if condition is false;
    }


➤ switch

    switch (n) {

    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}




➤ The PHP while Loop

    while (condition is true) {
    code to be executed;
}


➤ PHP do while Loop

    do {
    code to be executed;
} while (condition is true);


➤ The PHP for Loop

    for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
}

➤ The PHP foreach Loop

    foreach ($array as $value) {
    code to be executed;
    }

        EJEMPLO

            $colors = array("red", "green", "blue", "yellow");

                foreach ($colors as $value) {
                echo "$value <br>";
                }

            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                foreach($age as $x => $val) {
                echo "$x = $val<br>";
                }    



?>