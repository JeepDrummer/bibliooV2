<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 21:22
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Book;
use Doctrine\DBAL\Connection;

class BookBDD
{
    /**
     * database connection
     * @var Connection
     */
    private $db;

    /**
     * BookBDD constructor.
     * The database connection object
     * @param Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Return a list of all books, sorted by publication year (most recent first)
     * @return array a list of all books
     */
    public function findAll()
    {
        $sql = "SELECT * FROM book ORDER BY 'year' DESC";
        $res = $this->db->fetchAll($sql);
        $books = array();

        foreach ($res as $row){
            $bookID = $row['id_livre'];
            $books[$bookID] = $this->buildBooks($row);
        }
        
        return $books;
    }

    /**
     * Create a Book object based on a DB Row
     * @param array $row
     * @return Book
     */
    public function buildBooks(array $row)
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