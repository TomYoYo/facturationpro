<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:54 PM
 */
class Language
{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;
    protected $language = array("fr" => "Français",'en'=>'Anglais');
}