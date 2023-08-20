<?php

namespace Colorful\Model;

use DateTimeImmutable;

/**
 * 时间戳 - [Timestamp]
 *
 * @author beta
 */
class Timestamp
{
    
    /**
     * 秒级时间戳
     *
     * @return int
     */
    public static function second(): int
    {
        return time();
    }
    
    /**
     * 毫秒级时间戳
     *
     * @return int
     */
    public static function millisecond(): int
    {
        return (int) (microtime(true) * 1000);
    }
    
    /**
     * 生成有效的时间戳
     *
     * @param  int  $timestamp
     * @param  int  $second
     *
     * @return DateTimeImmutable
     */
    public static function validity(
        int $timestamp,
        int $second
    ): DateTimeImmutable {
        return (new DateTimeImmutable())
            ->setTimestamp($timestamp + $second);
    }
    
}