<?php

function func_reg($main_string)
{
    return (preg_match('/^\{?[a-f0-F]{4}([a-f0-F]{4}\-){4}[a-f0-F]{12}\}?$/', $main_string) === 1);
}

var_dump(
    func_reg('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}')
);
var_dump(
    func_reg('e02fd0e400fd090Aca300d00a0038ba0')
);