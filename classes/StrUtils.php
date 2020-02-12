<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:35
 */

class StrUtils
{

    private $utils;

    public function __construct($utils)
    {
        $this->utils = $utils;
    }


    public function bold()
    {
        return "<b>" . $this->utils . "</b>";
        // $this->utils = "<b>" . $this->utils . "</b>";
        // return $this;
    }


    public function italic()
    {
        return "<i>" . $this->utils . "</i>";
    }


    public function underline()
    {
        return "<u>".$this->utils ."</u>";
    }


    public function capitalize()
    {
        return $this->utils = strtoupper($this->utils);
    }


    public function uglify()
    {
        $this->utils=$this->bold();
        $this->utils=$this->italic();
        $this->utils=$this->underline();
        $this->utils=$this->capitalize();
        return $this->utils;
    }
}
