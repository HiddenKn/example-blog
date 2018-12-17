<?php
/**
 * Created by PhpStorm.
 * User: Alice
 * Date: 17/12/2018
 * Time: 04:23
 */

class Configuration
{

    private $databaseConfiguration = [];
    private $siteName;

    /**
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->getDatabaseConfiguration()['database'];
    }

    /**
     * @return array
     */
    private function getDatabaseConfiguration(): array
    {
        return $this->databaseConfiguration;
    }

    /**
     * @return string
     */
    public function getDatabaseUser(): string
    {
        return $this->getDatabaseConfiguration()['username'];
    }

    /**
     * @return string
     */
    public function getDatabaseHost(): string
    {
        return $this->getDatabaseConfiguration()['host'];
    }

    /**
     * @return string
     */
    public function getDatabasePassword(): string
    {
        return $this->getDatabaseConfiguration()['password'];
    }

    /**
     * @return int
     */
    public function getDatabasePort(): int
    {
        return $this->getDatabaseConfiguration()['port'];
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $database
     * @param string $host
     * @param int $port
     */
    public function setDatabaseConfiguration($username, $password, $database, $host, $port = 3306): void
    {
        $this->databaseConfiguration = ['username' => $username, 'password' => $password, 'host' => $host, 'port' => $port, 'database' => $database];
    }

    /**
     * @return string
     */
    public function getSiteName(): string
    {
        return $this->siteName;
    }

    /**
     * @param $string
     */
    public function setSiteName($string)
    {
        $this->siteName = $string;
    }


}