<?phpclass Conn extends PDO {    private $conn;      public function __construct() {        $this->conn = new PDO('mysql:host=179.188.16.167;dbname=microdesk01', 'microdesk01', 'KdeKdeKde02')or print (mysql_error());    }        private function setParams($statament, $parameters = array()){                foreach ($parameters as $key => $value) {            $this->setParams($key,$value);        }    }            private function setParam($statament,$key,$value){        $statament->bindParam($key,$value);    }        public function query($rawQuery ,$parameters = array()) {        $stmt = $this->conn->prepare($rowQuery);        $this->setParams($stmt, $parameters);        $stmt->execute();        return $stmt;    }        public function select($rawQuery,$params =array()):array {                echo 'ta na select';        die();                $this->query($rawQuery, $params);        return $stmt->fetchAll(PDO::FETCH_ASSOC);                    }        private function setParams($statament, $parameters = array()){                foreach ($parameters as $key => $value) {            $this->setParams($key,$value);        }    }            private function setParam($statament,$key,$value){        $statament->bindParam($key,$value);    }        public function query($rawQuery ,$parameters = array()) {        $stmt = $this->conn->prepare($rowQuery);        $this->setParams($stmt, $parameters);        $stmt->execute();        return $stmt;    }        public function select($rawQuery,$params =array()):array {                echo 'ta na select';        die();                $this->query($rawQuery, $params);        return $stmt->fetchAll(PDO::FETCH_ASSOC);                    }        }