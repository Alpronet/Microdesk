<?phpclass Conn extends PDO {    private $conn;       public function __construct() {        $this->conn = new PDO('mysql:host=179.188.16.167;dbname=microdesk01', 'microdesk01', 'KdeKdeKde02')or print (mysql_error());    }}