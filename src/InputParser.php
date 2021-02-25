<?php

class InputParser
{
    private array $input;
    function __construct(string $input)
    {
        $this->input = explode(PHP_EOL, $input);
    }

    public function getTestDuration()
    {
        return (int) $this->getHeaderLineParts()[0];
    }

    public function getIntersectionCount()
    {
        return (int) $this->getHeaderLineParts()[1];
    }

    public function getStreetCount()
    {
        return (int) $this->getHeaderLineParts()[2];
    }

    public function getCarCount(){
        return (int) $this->getHeaderLineParts()[3];
    }

    public function getPoints(){
        return (int) $this->getHeaderLineParts()[4];
    }

    private function getHeaderLineParts()
    {
        $headerLine = $this->getLine(0);
        return $this->splitLine($headerLine);
    }

    private function getLine(int $index): string
    {
        return $this->input[$index];
    }

    private function splitLine(string $line): array
    {
        return explode(' ', $line);
    }
}
