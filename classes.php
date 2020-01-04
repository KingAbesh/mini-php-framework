<?php

class Task
{
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        //The constructor
        $this->description = $description;

    }

    public function complete()
    {

        return $this->completed = true;
    }

    public function isComplete()
    {

        return $this->completed;
    }

}

$tasks = [

    new Task('Go to paris'),

    new Task('Secure a job'),

    new Task('Build a land')

];


$tasks[0]->complete();

// echo '<pre>';

// var_dump($tasks);

// echo '</pre>';
