<?php
    const AGE_GRAD_1 = 1;
    const AGE_GRAD_18 = 18;
    const AGE_GRAD_65 = 65;

    $age = 33;

    if ($age >= AGE_GRAD_18 && $age <= AGE_GRAD_65) {
        echo "Вам еще работать и работать";
    } elseif ($age > AGE_GRAD_65) {
        echo "Вам пора на пенсию";
    } elseif ($age >= AGE_GRAD_1 && $age < AGE_GRAD_18) {
        echo "Вам ещё рано работать";
    } else {
        echo "Неизвестный возраст";
    }
