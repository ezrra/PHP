<?php

abstract class AbstractWebsite
{    
    protected $html;
    
    public function __construct ()
    {
        $this->html = '<b>No tiene HTML</b>';
    }

    public function get_html ()
    {
        return $this->html;
    }

    abstract public function get_title();
}

class Revo extends AbstractWebsite
{
    const HEADER = 'Revo.org';

    public function get_html ()
    {
        return '<h1>Esto es un h1</h1>';
    }
    
    public function get_title ()
    {    
        return self::HEADER;
    }
}

class PHP extends AbstractWebsite
{
    const HEADER = 'Mexicano';

    // public function get_html ()
    // {
    //     return '<h2>Esto es un h2</h2>';
    // }
    
    public function get_title ()
    {    
        return self::HEADER;
    }
}

$revo   = new Revo;
$revo_html   = $revo->get_html();
$revo_title  = $revo->get_title();
echo "REVO: $revo_html | $revo_title";

echo "<hr />";

$php = new PHP;
$php_html   = $php->get_html();
$php_title  = $php->get_title();

echo "PHP: $php_html | $php_title";


