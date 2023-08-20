<?php

namespace Colorful\Model;

use ReflectionClass;

/**
 * 追踪 [laravel Eloquent ORM]
 *
 * @author beta
 */
class Trace
{
    
    /**
     * 表名称
     *
     * @var string
     */
    const TABLE = '';
    
    /**
     * ID
     *
     * @var string
     */
    const ID = 'id';
    
    /**
     * 创建时间
     *
     * @var string
     */
    const CREATED_AT = 'created_at';
    
    /**
     * 更新时间
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';
    
    /**
     * 隐藏列
     *
     * @var array
     */
    const HIDE = [];
    
    /**
     * 获取类所有常量
     *
     * @return array
     */
    public static function getConstants(): array
    {
        return (new ReflectionClass(get_called_class()))
            ->getConstants();
    }
    
    /**
     * 获取所有列名称
     *
     * @return array
     */
    public static function getAllColumns(): array
    {
        $constants = self::getConstants();
        
        return array_filter($constants, function (string $key) {
            return !in_array($key, ['TABLE', 'HIDE']);
        }, ARRAY_FILTER_USE_KEY);
    }
    
}
