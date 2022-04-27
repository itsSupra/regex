<?php

function func_reg($main_string)
{
    return (preg_match('/^#[0-9A-Fa-f]{6}$/', $main_string) === 1);
}

var_dump(
    func_reg('#FF3421')
);

var_dump(
    func_reg('f#fddee')
);