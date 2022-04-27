<?php

function func_reg($main_string)
{
    return (preg_match('/^[1-9]\d{5}$/', $main_string) === 1);
}

var_dump(
    func_reg('234567')
);

var_dump(
    func_reg('1234567')
);