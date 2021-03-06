<?php
    //A lot of the code was from an online resource but understood and adapted
    //http://coreymaynard.com/blog/creating-a-restful-api-with-php/
    abstract class API 
    {
        /**
         * Property: method
         * The HTTP method this request was made in, either GET, POST, PUT or DELETE
         */
        protected $method = '';
        /**
         * Property: endpoint
         * The Model requested in the URI. eg: /files
         */
        protected $endpoint = '';
        /**
         * Property: verb
         * An optional additional descriptor about the endpoint, used for things that can
         * not be handled by the basic methods. eg: /files/process
         */
        protected $verb = '';
        /**
         * Property: args
         * Any additional URI components after the endpoint and verb have been removed, in our
         * case, an integer ID for the resource. eg: /<endpoint>/<verb>/<arg0>/<arg1>
         * or /<endpoint>/<arg0>
         */
        protected $args = Array();
        /**
         * Property: file
         * Stores the input of the PUT request
         */
        protected $file = Null;
        /**
         * Constructor: __construct
         * Allow for CORS, assemble and pre-process the data
         */
        public function __construct($request) {
            header("Access-Control-Allow-Orgin: *");
            header("Access-Control-Allow-Methods: *");
            header("Content-Type: application/json");

            $this->args = explode('/', rtrim($request, '/'));
            //Gets rid of the /blank
            array_shift($this->args);
            //Gets rid of /api
            array_shift($this->args);
            //array_shift($this->args) now contains the endpoint eg (/api)/project
            $this->endpoint = array_shift($this->args);
            //If the next exists and isn't a num then we know its the verb /project/delete
            if (array_key_exists(0, $this->args) && !is_numeric($this->args[0])) {
                $this->verb = array_shift($this->args);
            }
            //everything left in $this->args is the arguements eg. /project/delete/1

            $this->method = $_SERVER['REQUEST_METHOD'];

            switch($this->method) {
                case 'DELETE':
                case 'POST':
                    //the data of the request will be assigned to file
                    $this->file = file_get_contents("php://input");
                    break;
                case 'GET':
                    break;
                case 'PUT':
                    //the data of the request will be assigned to file
                    $this->file = file_get_contents("php://input");
                    break;
                default:
                    $this->_response('Invalid Method', 405);
                    break;
            }
        }

        public function processAPI() {
            //check to see if the endpoint trying to be accessed exists
            if (method_exists($this, $this->endpoint)) {
                return $this->_response($this->{$this->endpoint}($this->args));
            }
            return $this->_response(Array("Error" => "No Endpoint: $this->endpoint"), 404);
        }

        //return the response of the endpoint to the user
        private function _response($data, $status = 200) {
            header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
            return json_encode($data);
        }

        private function _requestStatus($code) {
            $status = array(
                200 => 'OK',
                404 => 'Not Found',
                405 => 'Method Not Allowed',
                500 => 'Internal Server Error',
            ); 
            return ($status[$code])?$status[$code]:$status[500]; 
        }
    }
?>
