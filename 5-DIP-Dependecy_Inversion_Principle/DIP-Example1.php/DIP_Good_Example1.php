 <?php

 interface ConnectionInterface {

    public function connect();
 }

class DbConnection  implements ConnectionInterface {

    public function connect()
    {
        // connect
    }
}
 class PasswordReminder {

    /**
    * @var ConnectionInterface
    */
    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
 }