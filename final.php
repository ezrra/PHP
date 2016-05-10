<?php

class Website {

    final public function get_html () {

        return '<h1> Texto </h1>';
    }
}

class Revo extends Website {

    public function get_htm () {

        return '<h2> Texto </h2>';
    }
}

$revo = new Revo;

echo $revo->get_htm();