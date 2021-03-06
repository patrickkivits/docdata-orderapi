<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * @author Tijs Verkoyen <php-docdatapayments@verkoyen.eu>
 */
class CaptureRequest extends AbstractRequest
{
    /**
     * Payment id with check digit identifying the payment.
     *
     * @var string
     */
    protected $paymentId;

    /**
     * Merchant's internal ID for identifying this capture. Will be returned in
     * the capture response and in status reports.
     *
     * @var string
     */
    protected $merchantCaptureReference;

    /**
     * Amount to be captured. If no amount nor an order item code is specified,
     * the capture will be done for the order's total amount.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * A code or article number identifying an item in the order. If specified,
     * this order item's total (gross) amount will be used for this capture's
     * amount and currency.
     *
     * @var string
     */
    protected $itemCode;

    /**
     * Optional description for this capture.
     *
     * @var string
     */
    protected $description;

    /**
     * Indicator whether this is the final capture for this order.
     *
     * @var bool
     */
    protected $finalCapture;

    /**
     * Indicator if any reserved (new) captures should be canceled in favor of
     * this capture. Must always be true for captures.
     *
     * @var bool
     */
    protected $cancelReserved;

    /**
     * The date on which to capture. The first opportunity after this date for
     * a capture will be used. The default is as soon as possible.
     *
     * @var string
     */
    protected $requiredCaptureDate;

    /**
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param boolean $cancelReserved
     */
    public function setCancelReserved($cancelReserved)
    {
        $this->cancelReserved = $cancelReserved;
    }

    /**
     * @return boolean
     */
    public function getCancelReserved()
    {
        return $this->cancelReserved;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param boolean $finalCapture
     */
    public function setFinalCapture($finalCapture)
    {
        $this->finalCapture = $finalCapture;
    }

    /**
     * @return boolean
     */
    public function getFinalCapture()
    {
        return $this->finalCapture;
    }

    /**
     * @param string $itemCode
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @return string
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * @param string $merchantCaptureReference
     */
    public function setMerchantCaptureReference($merchantCaptureReference)
    {
        $this->merchantCaptureReference = $merchantCaptureReference;
    }

    /**
     * @return string
     */
    public function getMerchantCaptureReference()
    {
        return $this->merchantCaptureReference;
    }

    /**
     * @param string $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string $requiredCaptureDate
     */
    public function setRequiredCaptureDate($requiredCaptureDate)
    {
        $this->requiredCaptureDate = $requiredCaptureDate;
    }

    /**
     * @return string
     */
    public function getRequiredCaptureDate()
    {
        return $this->requiredCaptureDate;
    }
}
