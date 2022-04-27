<?php

function func_reg($main_string)
{
    return (preg_match('/^[0-9a-fA-F]{2}(:[0-9a-fA-F]{2}){5}$/', $main_string) === 1);
}

var_dump(
    func_reg('01:32:54:67:89:AB')
);

var_dump(
    func_reg('01:33:47:65:89:ab:cd')
);