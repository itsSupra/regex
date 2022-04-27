<?php

function func_reg($main_string)
{
    return (
        preg_match(
            '/^([012][1-9]|10|20|30|31)(\/)(01|03|05|07|08|10|12)(\/)((1[6-9]|[2-9][0-9])[0-9]{2})|([012][1-9]|10|20|30)(\/)(04|06|09|11)(\/)((1[6-9]|[2-9][0-9])[0-9]{2})|29(\/)02(\/)((1[6-9]|[2-9][0-9])(04|08|[13579][26]|[2468][480])|(16|[2468][048]|[3579][26])00)|(0[1-9]|1[0-9]|2[0-8])(\/)02(\/)((1[6-9]|[2-9][0-9])[0-9]{2})$/',
            $main_string) === 1);
}

var_dump(
    func_reg('29/02/2000')
);

var_dump(
    func_reg('30/04/2003')
);