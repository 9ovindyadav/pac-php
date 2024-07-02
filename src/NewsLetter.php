<?php

declare(strict_types=1);

namespace Govind;

class NewsLetter implements SplSubject
{
    private array $observers = [];
    private string $content;

    public function __construct(private string $name)
    {

    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);

        if($key){
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function breakOutNews(string $content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return "{$this->content} ( {$this->name} )";
    }
}