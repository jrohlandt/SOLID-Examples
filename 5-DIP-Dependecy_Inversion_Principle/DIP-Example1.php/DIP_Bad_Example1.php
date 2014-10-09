 <?php

 class PasswordReminder {

    /**
    * @var MySQLConnection
    */
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
 }