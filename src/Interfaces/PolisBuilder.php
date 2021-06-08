<?php

interface PolisBuilder
{

    public function encrypt(bool $value);
    public function username(string $username);
    public function password(string $password);
    public function topMargin(integer $value);
    public function bottomMargin(integer $value);
    public function leftMargin(integer $value);
    public function rightMargin(integer $value);
}
