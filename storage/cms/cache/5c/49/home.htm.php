<?php 
class Cms5c7ec5b97f6c7963507796_e13f16809361b80dc393ce84e8718618Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
