<?php
namespace Items\Entity;

class Items
{
    protected $id;
    protected $description;
    protected $size;
    protected $price;
    protected $qty;
    protected $delete = 0;
    protected $created;

    protected $attributes = array(
        'id' => array(
            'hide' => true,
            'key' => true,
            'list' => false,
            'create' => false,
            'type' => 'hidden',
        ),
        'description' => array(
            'width' => '40%',
            'type' => 'textarea',
            'required' => true,
        ),
        'Size' => array(
            'width' => '40%',
            'type' => 'select',
            'required' => true,
            'options' => array('s' => 'Small', 'm' => 'Medium', 'l' => 'Large', 'xl' => 'X-Large', 'xxl' => 'XX-Large'),
        ),
        'price' => array(
            'width' => '20%',
            'type' => 'int',
            'required' => true,
        ),
        'qty' => array(
            'width' => '20%',
            'type' => 'int',
            'required' => true,
        ),
        'created' => array(
            'width' => '30%',
            'create' => false,
            'update' => false,
        ),
        'delete' => array(
            'type' => 'radio',
            'options' => array(0 => 'No', 1 => 'Yes'),
            'create' => false,
        )
    );

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * @return int
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }


}