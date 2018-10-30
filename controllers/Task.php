<?php

class Task
{
  public $title;
  public $description;
  public $completed = false;

//  public function __construct($title, $description)
//  {
//    $this->title = $title;
//    $this->description = $description;
//  }
  public function complete(){
    $this->completed = true;
  }
  public function isCompleted(){
    return $this->completed;
  }

}

