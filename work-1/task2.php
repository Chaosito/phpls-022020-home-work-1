<?php
    const PICTURES = 80;
    const FELT_TIPPED_PEN = 23;
    const PENCIL = 40;

    print "На школьной выставке ".PICTURES." рисунков.<br>";
    print FELT_TIPPED_PEN." из них выполнены фломастерами, ".PENCIL." карандашами, а остальные — красками.<br>";
    print "Сколько рисунков, выполненные красками, на школьной выставке?<br><br>";

    print "Ответ:<br> Рисунков выполненных краской: ".PICTURES." - (".FELT_TIPPED_PEN." + ".PENCIL.") = ".(PICTURES - (FELT_TIPPED_PEN + PENCIL));
