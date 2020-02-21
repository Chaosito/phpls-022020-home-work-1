<?php
    const AGE_MIN = 1;
    const AGE_WORK = 18;
    const AGE_MAX = 65;

    $age = 33;

    if ($age >= AGE_WORK && $age <= AGE_MAX) {
        echo "Вам еще работать и работать";
    } elseif ($age > AGE_MAX) {
        echo "Вам пора на пенсию";
    } elseif ($age >= AGE_MIN && $age < AGE_WORK) {
        echo "Вам ещё рано работать";
    } else {
        echo "Неизвестный возраст";
    }
