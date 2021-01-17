<?php

include_once ('Elements.php');

Class Content
{

    private $content;

    public function __construct($url)
    {
        $elements = new Elements($url);
        $this->content = $elements->getElements();
    }

    /**
     * @return Elements
     */
    public function getContent()
    {
        return $this->content;
    }

    public function getImg()
    {
        $img = file_get_contents('https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png');
        file_put_contents('img.png', $img);
    }
}





