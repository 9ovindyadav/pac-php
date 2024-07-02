<?php

declare(strict_types=1);

namespace Govind;

class Reader implements SplObserver
{
    public function __construct(private string $name)
    {

    }

    public function update(\SplSubject $subject)
    {
        echo "{$thi->name} is listening the news {$subject->getContent()}";
    }
}