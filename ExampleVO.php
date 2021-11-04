<?php
class ExampleVO
{
    private $id;
    private $userID;
    private $companyID;
    private $receiveID;
    private $paymentMethod;
    private $discountValue;
    private $feesValue;
    private $dueDate;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of userID
     */ 
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set the value of userID
     */ 
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * Get the value of companyID
     */ 
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Set the value of companyID
     */ 
    public function setCompanyID($companyID)
    {
        $this->companyID = $companyID;
    }

    /**
     * Get the value of receiveID
     */ 
    public function getReceiveID()
    {
        return $this->receiveID;
    }

    /**
     * Set the value of receiveID
     */ 
    public function setReceiveID($receiveID)
    {
        $this->receiveID = $receiveID;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     */ 
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Get the value of discountValue
     */ 
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Set the value of discountValue
     */ 
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
    }

    /**
     * Get the value of feesValue
     */ 
    public function getFeesValue()
    {
        return $this->feesValue;
    }

    /**
     * Set the value of feesValue
     */ 
    public function setFeesValue($feesValue)
    {
        $this->feesValue = $feesValue;
    }

    /**
     * Get the value of dueDate
     */ 
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set the value of dueDate
     *
     * @return  self
     */ 
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }
}
?>