
<?php
use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://gmlopez11:gab1234@cluster0.cspkejo.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';


$apiVersion = new ServerApi(ServerApi::V1);
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

?>