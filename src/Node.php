<?php

class Node{

    public mixed $item;
    public mixed $next;
    public mixed $prev;

    public function set(Node|null $prev, mixed $item, Node|null $next) {
        $this->item = $item;
        $this->next = $next;
        $this->prev = $prev;
    }
}