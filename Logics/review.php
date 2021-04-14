<?php
class Review 
{
    protected $name;
    protected $review;

    public function __construct($name, $review)
    {
        $this->name = $name;
        $this->review=$review;    }

public function getName()
{
    return $this->name;
}

public function getReview()
{
    return $this->review;
}
}
?>