<?php

namespace MyApp;


class Teacher extends Person
{
    /** @var array $subjects  */
    private $subjects;



    public function addSubject(Subject $subject) : Teacher
    {
        $this->subjects[] = $subject;
        return$this;
    }

    /** getters and setter */
    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }/**
     * @param array $subjects
     * @return Teacher
     */
    public function setSubjects(array $subjects): Teacher
    {
        $this->subjects = $subjects;
        return $this;
    }

}
