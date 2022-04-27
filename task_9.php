<?php

function func_reg($main_string)
{
    return (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/', $main_string) === 1);
}

var_dump(
    func_reg('Cool_pass')
);

var_dump(
    func_reg('C00l_Pass')
);