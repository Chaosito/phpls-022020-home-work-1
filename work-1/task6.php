<table cellpadding="5" cellspacing="0" border="1">
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <!--<tr><td><?=$i;?></td></tr>-->
        <?php if ($i == 1): ?>
            <tr><td>&nbsp;</td>
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <th><?=$j;?></th>
                <?php endfor; ?>
            </tr>
        <?php endif; ?>
    <tr>
        <?php for ($j = 1; $j <= 10; $j++): ?>
            <?php if ($j == 1): ?>
                <th><?=$i;?></th>
            <?php endif; ?>
            <td style='text-align:center'><?=($i % 2 == 0 && $j % 2 == 0) ? "(".($i * $j).")" : (($i % 2 != 0 && $j % 2 != 0) ? "[".($i * $j)."]" : $i * $j);?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>
