<?php
require_once 'html_element.php';

class htmlTable extends htmlElement
{
    private $numCols;
    private $numRows;
    private $data;

    public function __construct()
    {
        $this->setStyle('border-style: dashed;border-color: blue;');
    }

    public function setData($aData)
    {
        $this->data = $aData;
        $this->setRows(sizeof($this->data));
        $this->setCols(sizeof($this->data[0]));
    }

    public function renderHtml()
    {
        return '<table ' . $this->getStyle() . '> ' . $this->getRows() . '</table>';
    }

    public function getRows()
    {
        $rows = '';
        for ($iRows = 0; $iRows < $this->numRows; $iRows++) {
            $rows .= '<tr>' . $this->getCols($iRows) . '</tr>';
        }
        return $rows;
    }

    public function getCols($iRow)
    {
        $cols = '';
        for ($iCols = 0; $iCols < $this->numCols; $iCols++) {
            $cols .= '<td>' . $this->data[$iRow][$iCols] . '</td>';
        }
        return $cols;
    }

    public function setCols($iCols)
    {
        $this->numCols = $iCols;
    }

    public function setRows($iRows)
    {
        $this->numRows = $iRows;
    }
}
