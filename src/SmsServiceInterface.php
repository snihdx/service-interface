<?php

namespace longxiaoyang\ServiceInterface;

interface SmsServiceInterface
{
    public function send(string $mobile, int $type);
}