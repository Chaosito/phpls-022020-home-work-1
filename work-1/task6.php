<?php
    print '<table cellpadding="5" cellspacing="0" border="1">';
    for ($i = 1; $i <= 10; $i++) {

        if ($i == 1) {
            print "<tr><td>&nbsp;</td>";
            for ($j = 1; $j <= 10; $j++) {
                print "<th>{$j}</th>";
            }
            print "</tr>";

        }

        print '<tr>';
        for ($j = 1; $j <= 10; $j++) {

            if ($j == 1) print "<th>{$i}</th>";

            if ($i % 2 == 0 && $j % 2 == 0) {
                $val = "(".($i * $j).")";
            } elseif ($i % 2 != 0 && $j % 2 != 0){
                $val = "[".($i * $j)."]";
            } else {
                $val = $i * $j;
            }
            print "<td style='text-align:center'>{$val}</td>";
            // Если индекс строки и столбца четный, то в круглых, если не четный в квадратных, иначе тупо вывести
        }
        print '</tr>';
    }
    print '</table>';