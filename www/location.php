ini_set('display_errors',1); 
      error_reporting(E_ALL);

      header('Access-Control-Allow-Origin: *');  

      $hostdb = 'localhost';
      $namedb = 'saiviru_jos1';
      $userdb = 'saiviru';
      $passdb = '12personal';

      $conn = new PDO("mysql:host=dbip; dbname=$namedb", $userdb, $passdb);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      if(isset($_POST['longitude']) && ($_POST['latitude'])) {

      $longitude = $_POST['longitude'];
      $latitude = $_POST['latitude'];

      $stmt = "INSERT INTO login (latitude,longitude) 
               VALUES (:longitude,:latitude)";

      $q = $conn->prepare($stmt);
      $results = $q->execute(array(
        ":longitude"=>$longitude,
        ":latitude"=>$latitude
     ));
      }
      exit();