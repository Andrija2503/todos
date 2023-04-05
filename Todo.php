<?php

class Todo {
    public function isDone(){
        return ($this->done) ? true : false;
    }

    public function makeItDone(){
        $this->done = 1;
    }

    public function showTodo(){
        if ($this->isDone()) {
            return "<s>".$this->title."</s>";
        }else{
            return $this->title;
        }
    }
}