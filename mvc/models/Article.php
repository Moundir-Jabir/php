<?php
class Article{
    private $id;
    private $title;
    private $content;
    private $date;

    public function __construct($data){
        $this->id = $data->id;
        $this->title = $data->title;
        $this->content = $data->content;
        $this->date = $data->date;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getDate(){
        return $this->date;
    }
}