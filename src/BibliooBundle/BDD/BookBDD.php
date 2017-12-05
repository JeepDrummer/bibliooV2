<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 21:22
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Book;


class BookBDD extends BddFinder
{
    /**
     * Return a list of all books, sorted by publication year (most recent first)
     * @return array a list of all books
     */
    public function findAll()
    {
        $sql = "SELECT * FROM book ORDER BY 'year' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $books = array();

        foreach ($res as $row){
            $bookID = $row['id'];
            $books[$bookID] = $this->buildBooks($row);
        }
        
        return $books;
    }

    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
    }

    public function createData()
    {
        // TODO: Implement createData() method.
    }

    public function updateData($id)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteData($id)
    {
        // TODO: Implement deleteData() method.
    }


    /**
     * Create a Book object based on a DB Row
     * @param array $row
     * @return Book
     */
    public function buildObject(array $row)
    {
        $book = new Book();
        $book->setId($row['id']);
        $book->setTitle($row['title']);
        $book->setAuthor($row['author']);
        $book->setYear($row['year']);
        $book->setExtLink($row['external_link']);

        return $book;
    }

}