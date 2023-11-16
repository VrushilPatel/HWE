<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
    public function testDatabaseConnection(): void
    {
        // Replace with your database information
        $host = 'localhost';
        $database = 'db_healthcare';

        $con = mysqli_connect($host, '', '', $database);

        // Check if connection is successful
        $this->assertNotFalse($con, "Failed to connect to the database");
    }
}
?>
