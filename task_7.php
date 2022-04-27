<?php

function func_reg($main_string)
{
    return (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w]+)*\.(\w{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/',
            $main_string) === 1);
}

var_dump(
    func_reg('mail@mail.ru')
);

var_dump(
    func_reg('12323123@111[]][]')
);