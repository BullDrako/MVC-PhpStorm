<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 13/10/2015
 * Time: 16:29
 */

namespace models;


class CalculatorModel
{
    private $_op1;
    private $_op2;
    private $_result;
    public function __construct($_op1, $_op2)
    {
        $this->_op1 = $_op1;
        $this->_op2 = $_op2;
    }
    public function sum()
    {
        $this->_result = $this->_op1 + $this->_op2;
    }
    public function subtract()
    {
        $this->_result = $this->_op1 - $this->_op2;
    }
    public function multiply()
    {
        $this->_result = $this->_op1 * $this->_op2;
    }

    public function division()
    {
        $this->_result = $this->_op1 / $this->_op2;
    }
    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->_result;
    }
}