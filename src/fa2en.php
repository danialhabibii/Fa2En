<?php

namespace Dni\Fa2en;

class fa2en
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function convert()
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $range = range(0, 9);

        return str_replace($persian, $range, $this->value);
    }
}