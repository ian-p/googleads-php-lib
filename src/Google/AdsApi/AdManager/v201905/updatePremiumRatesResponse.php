<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updatePremiumRatesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\PremiumRate[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\PremiumRate[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\PremiumRate[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\PremiumRate[]|null $rval
     * @return \Google\AdsApi\AdManager\v201905\updatePremiumRatesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
