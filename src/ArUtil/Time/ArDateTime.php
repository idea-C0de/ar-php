<?php

namespace ArUtil\Time;

use ArUtil\I18N\Date;
use ArUtil\I18N\Mktime;
use Carbon\Carbon;

class ArDateTime extends Carbon
{
    
    public static function arCreateFromDate($arYear = null, $arMonth = null, $arDay = null, $tz = null)
    {
        $instance = self::now($tz);
        $timestamp = $instance->hijriToTimestamp($arYear, $arMonth, $arDay);
        $instance->setTimestamp($timestamp);
        
        return $instance;
    }
    
    protected function hijriToTimestamp($arYear, $arMonth, $arDay)
    {
        return (new Mktime())->mktime(date('H'), date('i'), date('s'), $arMonth, $arDay, $arYear,
            $correction = 0);
    }
    
    protected function convertTodayToHijri()
    {
        list($arYear, $arMonth, $arDay) = (new Date())->hjConvert(date('Y'), date('m'), date('d'));
        
        return [
            'arYear'  => $arYear,
            'arMonth' => $arMonth,
            'arDay'   => $arDay,
        ];
    }
    
}