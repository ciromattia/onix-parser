<?php

namespace Ribal\Onix\Product;

class Prize
{
    /**
     * PrizeName
     *
     * @var string
     */
    protected $PrizeName;

    /**
     * PrizeYear
     *
     * @var string
     */
    protected $PrizeYear = '';

    /**
     * Set PrizeName
     *
     * @param string $PrizeName
     * @return void
     */
    public function setPrizeName($PrizeName)
    {
        $this->PrizeName = $PrizeName;
    }

    /**
     * Set PrizeYear
     *
     * @param string $PrizeYear
     * @return void
     */
    public function setPrizeYear($PrizeYear)
    {
        $this->PrizeYear = $PrizeYear;
    }

    /**
     * Get PrizeName
     *
     * @return string
     */
    public function getPrizeName()
    {
        return $this->PrizeName;
    }

    /**
     * Get PrizeYear
     *
     * @return string
     */
    public function getPrizeYear()
    {
        return $this->PrizeYear;
    }
}
