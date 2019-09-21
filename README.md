# Web-Log/Laravel Zero

#### Web-logs project was development on micro-framework Laravel Zero. That provide a simple command for reading a json data on fomar show behind:

`{
    "request": {
        "method": "GET",
        "uri": "/get",
        "url": "http://httpbin.org:8000/get",
        "size": "75",
        "querystring": {},
        "headers": {
            "accept": "*/*",
            "host": "httpbin.org",
            "user-agent": "curl/7.37.1"
        },
    },
    "upstream_uri": "/",
    "response": {
        "status": 200,
        "size": "434",
        "headers": {
            "Content-Length": "197",
            "via": "kong/0.3.0",
            "Connection": "close",
            "access-control-allow-credentials": "true",
            "Content-Type": "application/json",
            "server": "nginx",
            "access-control-allow-origin": "*"
        }
    },
    "authenticated_entity": {
        "consumer_id": "80f74eef-31b8-45d5-c525-ae532297ea8e"
    },
    "route": {
        "created_at": 1521555129,
        "hosts": null,
        "id": "75818c5f-202d-4b82-a553-6a46e7c9a19e",
        "methods": ["GET","POST","PUT","DELETE","PATCH","OPTIONS","HEAD"],
        "paths": [
            "/example-path"
        ],
        "preserve_host": false,
        "protocols": [
            "http",
            "https"
        ],
        "regex_priority": 0,
        "service": {
            "id": "0590139e-7481-466c-bcdf-929adcaaf804"
        },
        "strip_path": true,
        "updated_at": 1521555129
    },
    "service": {
        "connect_timeout": 60000,
        "created_at": 1521554518,
        "host": "example.com",
        "id": "0590139e-7481-466c-bcdf-929adcaaf804",
        "name": "myservice",
        "path": "/",
        "port": 80,
        "protocol": "http",
        "read_timeout": 60000,
        "retries": 5,
        "updated_at": 1521554518,
        "write_timeout": 60000
    },
    "latencies": {
        "proxy": 1430,
        "kong": 9,
        "request": 1921
    },
    "client_ip": "127.0.0.1",
    "started_at": 1433209822425
}´

## Installation Guide:

### Requirements:
* MySQL 5.7 >=
* Laravel Zero (preference for latest version)

--

On MySql create a local database named "web-logs". Change your credentials for access database on file "config/database.php". Default is:

`           'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'web-logs'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),´

## First Steps:
  All commands are very simple for usage, After performing the installation guide, run the following commands to adjust the production environment.

  * php web-logs migrate

  This command will create the entire application database structure in mysql.

## Commands
  Actually has two commands for usage in Web-logs application. The first command is responsible for populated database with data logs.

  * **php web-logs logs <PATH>**
   <PATH> : Path of file .txt with data logs events. (FORMAT JSON)

  * **php web-logs report --console**
   (--console): Is a optional parameters, case not require save .csv file for reports. This parameters show's the entire report in command-line.

## Web-Logs

Development by Lucas M. Tortelli for study proposes.

## Full Documentation of Laravel Zero

For full documentation, visit [laravel-zero.com](https://laravel-zero.com/).

## License

Laravel Zero is an open-source software licensed under the [MIT license](https://github.com/laravel-zero/laravel-zero/blob/stable/LICENSE.md).
