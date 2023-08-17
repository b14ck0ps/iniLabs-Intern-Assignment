## Interface Implementation Documentation - Task 2

This documentation provides an overview of the PHP classes that implement the `Logger` interface for Task 2.

### Logger Interface

The `Logger` interface defines the contract for logging messages. Classes that implement this interface are required to provide an implementation for the `log()` method.

```php
interface Logger
{
    public function log($message);
}
```

### UserLogger Class

The `UserLogger` class implements the `Logger` interface and is used to log user-related messages. It accepts a username during construction, and the `log()` method appends the username to the log message along with the current timestamp.

```php
class UserLogger implements Logger
{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . " -> " . $this->username . "\n";
    }
}
```

### DatabaseLogger Class

The `DatabaseLogger` class also implements the `Logger` interface and is used for logging database-related messages. It accepts a connection identifier during construction, and the `log()` method appends the connection identifier to the log message along with the current timestamp.

```php
class DatabaseLogger implements Logger
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . " [" . $this->connection . "]\n";
    }
}
```

### Usage Example

Here's the use of the `UserLogger` and `DatabaseLogger` classes to log messages:

```php
require_once 'Loggers/UserLogger.php';
require_once 'Loggers/DatabaseLogger.php';

$userLogger = new UserLogger('Azran');
$userLogger->log('User logged in');

$databaseLogger = new DatabaseLogger('mysql');
$databaseLogger->log('Database connection successful');
```

### Expected Output


```
[2023-08-17 12:34:56] User logged in -> Azran
[2023-08-17 12:34:57] Database connection successful [mysql]
```
