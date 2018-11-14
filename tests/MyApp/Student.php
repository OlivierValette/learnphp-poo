<?php

namespace MyApp;

class Student extends Person
{
    /** @var array $grades */
    private $grades;


    /** Add a grade
     * @param float $grade
     * @return Student
     */
    public function addGrade(float $grade): Student
    {
        $this->grades[] = $grade;
        return $this;
    }

    /** average of student grades
     * @return float
     */
    public function getAverage() : float
    {
        return array_sum($this->grades) / count($this->grades);
    }


    /** Overrides */

    public function getFullname(): string
    {
        return "Student: " . parent::getFullname();
    }


    /** getters and setter */
    /**
     * @return array
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * @param array $grades
     * @return Student
     */
    public function setGrades(array $grades): Student
    {
        $this->grades = $grades;
        return $this;
    }

}