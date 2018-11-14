<?php

namespace MyApp;


class Subject
{
    /** @var string $label */
    private $label;

    /**
     * Subject constructor.
     * @param string $subject
     */
    public function __construct(string $subject)
    {
        $this->label = $subject;
        return $this;
    }

    /** getters and setters */
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Subject
     */
    public function setLabel(string $label): Subject
    {
        $this->label = $label;
        return $this;
    }

}