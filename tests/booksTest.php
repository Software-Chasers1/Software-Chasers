<?php

namespace PHPUnit\Framework;

/**
 * @coversDefaultClass \SoftwareChasers10\SoftwareChasers\books
 */
class bookstest extends TestCase{
    protected $DataHolder;
  
    public function setUp(): void {
    $this->DataHolder = new \SoftwareChasers10\SoftwareChasers\books();
    $link = mysqli_connect("localhost","user","password","database1");
    mysqli_query($link,"CREATE TABLE books (book_id int,book_name varchar(255),book_author varchar(255),subcategory_id int,user_id int, book_image varchar(255))");
    mysqli_query($link,"INSERT INTO books (book_id,book_name,book_author,subcategory_id,user_id,book_image) VALUES('14','bookname','author','14','14','img')");

    }
   /**
   * @covers ::download
   */
    public function test_if_Empty()
    {
        $this->assertNotEmpty($this->DataHolder->download('14'));
    }
}
?>