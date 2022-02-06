<?php


namespace App\classes;


class Blog
{

    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 => [
                'title' => 'A new blog',
                'Description' => 'Blog Description',
                'author' => 'Shahbuddin Emon',
                'image' => 'plane.jpg'
            ],
            1 => [
                'title' => 'Another blog',
                'Description' => 'Blog Description',
                'author' => 'Hasan Ali',
                'image' => 'T-Shirt.jpg'
            ],
            2 => [
                'title' => 'About Bangladesh',
                'Description' => 'Blog Description',
                'author' => 'Jahed',
                'image' => 'pamjabi.jpg'
            ],
        ];
    }

}