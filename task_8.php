<?php

function func_reg($main_string)
{
    return (preg_match('/^(\d|[1-9][0-9]|1\d{2}|2[0-4][0-9]|25[0-5])(\.(\d|[[1-9][0-9]|1\d{2}|2[0-4][0-9]|25[0-5])){3}$/',
            $main_string) === 1);
}

var_dump(
    func_reg('255.255.255.0')
);

var_dump(
    func_reg('1300.6.7.8')
);