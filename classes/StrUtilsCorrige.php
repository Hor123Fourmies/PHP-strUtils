<?php


class StrUtilsCorrige
{
    private $str;


    public function __construct($text)
    {
        //echo $text;
        $this->str = $text;
    }

/*
    public function test (){
        //echo $text;
        echo $this->str;
    }
*/

    public function boldA()
    {
        return "<b>".$this->str."</b>";
    }

    public function bold()
    {
        $this->str = "<b>".$this->str."</b>";
        //return $this->str;
        return $this;

    }


    public function italic()
    {
        $this->str = "<i>".$this->str."</i>";
        //return $this->str;
        return $this;
    }


    public function underline()
    {
        $this->str = "<u>".$this->str."</u>";
        //return $this->str;
        return $this;
    }


    public function uglify()
    {
       // $this->bold();
       // $this->italic();
       // $this->underline();
       // return $this->str;
        $this->bold()->italic()->underline();
        return $this->str;
    }

    public function displayStr()
    {
        echo $this->str;
    }
}