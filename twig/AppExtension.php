<?php
namespace PlsiRadiodjBundle\twig;
/**
 * Description of AppExtension
 *
 * @author simon
 */
//use \Twig_Extension;
//use \Twig_SimpleFilter;
//use Twig_Extension;
class AppExtension extends \Twig_Extension{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('timedouble', array($this, 'timedubleFilter')),
        );
    }
//    
    public function timedubleFilter($seconds){
//        return $seconds;
        $sec = $seconds;
    // Time conversion
    $hours = intval(intval($sec) / 3600);
    $padHours = True;
    $hms = ($padHours)
        ? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
        : $hours. ':';
    $minutes = intval(($sec / 60) % 60);
    $hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';
    $seconds1 = intval($sec % 60);
    $hms .= str_pad($seconds1, 2, "0", STR_PAD_LEFT);
	return $hms;
    }
//
////    public function price11Filter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
////    {
////        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
////        $price = '$'.$price;
////
////        return $price;
////    }
//
    public function getName()
    {
        return 'AppExtension';
    }
}
