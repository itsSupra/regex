<?php

function func_reg($main_string)
{
    return (preg_match('/^((http:|https:)\/\/)?\w[-\w]*\w(\.\w[-\w]*\w)*(:\d+)?(\/([\w.]|%20)+)*(\?(\w|%20)+=(\w|%20)+(&(\w|%20)+=(\w|%20)+)*)?(#\w+)?$/u',
            $main_string) === 1);
}

var_dump(
    func_reg('стажеры.рф')
);

var_dump(
    func_reg('zcon.com/index.html#bookmark')
);