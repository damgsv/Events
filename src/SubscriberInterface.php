<?php
/**
 * Created by PhpStorm.
 * User: galicher
 * Date: 26/03/17
 * Time: 11:14
 */

namespace Galicher\Event;


interface SubscriberInterface
{
    public function getEvents(): array;
}