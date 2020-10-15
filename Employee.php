<?php

class Employee
{
  public $id;
  public $name;
  public $position;
  public $experience;
  public $status;

  public function __construct($id, $name, $position, $experience, $status)
  {
    $this->id = $id;
    $this->name = $name;
    $this->position = $position;
    $this->experience = $experience;
    $this->status = $status;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPosition()
  {
    return $this->position;
  }

  public function getExperience()
  {
    return $this->experience;
  }

  public function getStatus()
  {
    return $this->status;
  }

  
}