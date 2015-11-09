<?php
namespace app\model;

use chilimatic\lib\interfaces\ISelfValidator;
use chilimatic\lib\traits\validator\PropertyValidatorGeneratorTrait;


/**
 *
 * @author j
 * Date: 11/9/15
 * Time: 4:12 PM
 *
 * File: TestModel.php
 */
class TestModel implements ISelfValidator
{

    /**
     * @trait implements ISelfValidator
     */
    use PropertyValidatorGeneratorTrait;

    /**
     * @validator (name="type\scalar\isString", expect="true", operator="&", mandatory="false")
     *
     * @var string
     */
    private $id;

    /**
     * @validator (name="type\scalar\isInt", expect="true", operator="&", mandatory="true")
     * @validator (name="type\scalar\isInt", expect="true", operator="&")
     */
    private $count;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}