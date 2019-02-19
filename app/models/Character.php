<?php

class Character extends CoreModel {
  
  private $id;
  private $description;
  private $picture;
  private $type_id;


  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */ 
  public function setPicture($picture)
  {
    $this->picture = $picture;

    return $this;
  }
  /**
   * Get the value of type_id
   */ 
  public function getType_id()
  {
    return $this->type_id;
  }

  /**
   * Set the value of type_id
   *
   * @return  self
   */ 
  public function setType_id($type_id)
  {
    $this->type_id = $type_id;

    return $this;
  }
}