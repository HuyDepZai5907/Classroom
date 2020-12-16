<?
// develop connection
#define('HOST','localhost');
#define('USERNAME','root');
#define('PSWD','');
#define('DBNAME','ClassRoom');
// deploy connection
define('HOST','remotemysql.com');
define('USERNAME','KRDPwQsBjk');
define('PSWD','UV5rw5J8ju');
define('DBNAME','KRDPwQsBjk');

    class Database {

        private static $db;
        private function __construct() {

        }

        public static function open() {
            if (self::$db === NULL) {
                self::$db = new mysqli(HOST,USERNAME,
                PSWD, DBNAME);
                self::$db->set_charset('UTF8');
            }
            return self::$db;
        }

    }