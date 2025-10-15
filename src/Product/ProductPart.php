<?php

namespace Ribal\Onix\Product;


use Ribal\Onix\CodeList\CodeList150;

class ProductPart
{
    /**
     * PrimaryPart
     *
     * @var bool
     */
    protected $PrimaryPart = false;

    /**
     * ProductForm
     *
     * @var CodeList150
     */
    protected $ProductForm;

    /**
     * NumberOfItemsOfThisForm
     *
     * @var int
     */
    protected $NumberOfItemsOfThisForm;

    /**
     * ProductFormFeatureDescription
     *
     * @var string
     */
    protected $ProductFormFeatureDescription;

    /**
     * Set ProductForm
     *
     * @param CodeList150 $ProductForm
     * @return void
     */
    public function setProductForm(CodeList150 $ProductForm)
    {
        $this->ProductForm = $ProductForm;
    }

    /**
     * Set NumberOfItemsOfThisForm
     *
     * @param int $NumberOfItemsOfThisForm
     * @return void
     */
    public function setNumberOfItemsOfThisForm(int $NumberOfItemsOfThisForm)
    {
        $this->NumberOfItemsOfThisForm = $NumberOfItemsOfThisForm;
    }

    /**
     * Set PrimaryPart
     *
     * @param bool $PrimaryPart
     * @return void
     */
    public function setPrimaryPart(bool $PrimaryPart)
    {
        $this->PrimaryPart = $PrimaryPart;
    }

    /**
     * Get ProductForm
     *
     * @return CodeList150
     */
    public function getProductForm()
    {
        return $this->ProductForm;
    }

    /**
     * Get ProductFormFeatureDescription
     *
     * @return int
     */
    public function getNumberOfItemsOfThisForm()
    {
        return $this->NumberOfItemsOfThisForm;
    }

    /**
     * Get PrimaryPart
     * @return bool
     */
    public function isPrimaryPart() {
        return $this->PrimaryPart;
    }

}
