<?php
include_once('./simplehtmldom/simple_html_dom.php');

Class Elements
{
    private $elements;

    public function __construct($url)
    {
        $this->elements = new simple_html_dom();
        $this->elements->load_file($url);
    }

    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param mixed $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

}




