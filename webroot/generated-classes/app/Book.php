<?php

namespace app;

use app\Base\Book as BaseBook;

/**
 * Skeleton subclass for representing a row from the 'book' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Book extends BaseBook
{

    public function __construct()
    {

        $book = new Book();
        $book -> setName('Stefan');
        $book -> setLastName('Oljacic');
        $book -> setAge('23');
        $book -> setDeveloper('backend');

        $book -> save();
    }
}

