<?php

namespace App\creation\factory;

use App\creation\factory\factory_method\Apt\ApptEncoder;
use App\creation\factory\factory_method\Apt\BlogsApptEncoder;
use App\creation\factory\factory_method\Ttd\BloggsTtdtEncoder;
use App\creation\factory\factory_method\Ttd\TtdEncoder;
use App\Enums\BlogObjectsEnum;

class BloggsCommsManager implements CommsManager
{

    public function getAptEncoder(): ApptEncoder
    {
        return new BlogsApptEncoder();
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdtEncoder();
    }

    public function makeBlogObject(BlogObjectsEnum $blogObjectsEnum): TtdEncoder|ApptEncoder
    {
        return match($blogObjectsEnum) {
            BlogObjectsEnum::APT => $this->getAptEncoder(),
            BlogObjectsEnum::TTD => $this->getTtdEncoder(),
            default => throw new \Exception
        };
    }

////      This method is not intended to bring anything new to the implementation of the pattern.
////      I just decided to make the code more expressive for the task.
//    public function makeBlogObject(BlogObjectsEnum $blogObjectsEnum): TtdEncoder|ApptEncoder
//    {
//        return $this->{'get' . ucfirst($blogObjectsEnum->value) . 'Encoder'}();
//    }
}