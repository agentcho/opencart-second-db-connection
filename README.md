# opencart-second-db-connection
Simple class for creation second connection to database

For OpenCart 2.0.1.1

Поместите файл в /catalog/model/api/

Вызвать можно из контроллера/модели через 
  $this->load->model('api/db'); 
  $connection = $this->model_api_db->getInstance(); 

  $connection->query("SELECT ..."); 
