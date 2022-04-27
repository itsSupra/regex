<?php

function func_reg($main_string)
{
    return (preg_match('/^abcdefdhsf\^dsd\$%ВВo\*18340$/', $main_string) === 1);
}

function fun_php($main_string)
{
    return ('abcdefdhsf^dsd$%ВВo*18340' === $main_string);
}

var_dump(
    func_reg('abcdefghijklmnoasdfasdpqrstuv18340 ')
);

var_dump(
    fun_php('abcdefdhsf^dsd$%ВВo*18340')
);