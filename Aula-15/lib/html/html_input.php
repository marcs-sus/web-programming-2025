<?php
require_once 'html_element.php';

class htmlInput extends htmlElement
{
    private $title;
    private $default;
    private $password;

    public function __construct()
    {
        $this->setStyle("font-color: red");
    }

    public function renderHtml()
    {
        return "<input " . $this->getStyle() . ">" . $this->getTitle() . "</input>";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($sTitle)
    {
        $this->title = $sTitle;
    }

    public function setDefault($defaultValue)
    {
        $this->default = $defaultValue;
    }

    public function setPassword($isPasswordField)
    {
        $this->password = $isPasswordField;
    }
}
