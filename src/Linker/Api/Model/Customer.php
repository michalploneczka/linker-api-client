<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Class Customer
 *
 */
class Customer implements CustomerInterface
{
    /**
     * @var int
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @Type("integer")
     */
    protected $externalId;

    /**
     * @var int
     * @Type("integer")
     */
    protected $depotId;

    /**
     * @var string
     * @Type("string")
     */
    protected $code;

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $fullName;

    /**
     * @var string
     * @Type("string")
     */
    protected $nip;

    /**
     * @var string
     * @Type("string")
     */
    protected $regon;

    /**
     * @var string
     * @Type("string")
     */
    protected $postCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $city;

    /**
     * @var string
     * @Type("string")
     */
    protected $street;

    /**
     * @var string
     * @Type("string")
     */
    protected $email;

    /**
     * @var string
     * @Type("string")
     */
    protected $phone;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getExternalId()
    {
        return $this->externalId;
    }

    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    public function getRegon()
    {
        return $this->regon;
    }

    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return int
     */
    public function getDepotId()
    {
        return $this->depotId;
    }

    /**
     * @param int $depotId
     * @return CustomerInterface
     */
    public function setDepotId($depotId)
    {
        $this->depotId = $depotId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return CustomerInterface
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

}
