<?php
namespace Ackintosh\Ganesha\Storage;

interface AdapterInterface
{
    /**
     * @param  string $serviceName
     * @return int
     */
    public function load($serviceName);

    /**
     * @param  string $serviceName
     * @param  int    $count
     * @param  int    $ttl
     * @return void
     */
    public function save($serviceName, $count, $ttl);

    /**
     * @param  string $serviceName
     * @param  int    $ttl
     * @return void
     */
    public function increment($serviceName, $ttl);

    /**
     * decrement failure count
     *
     * If the operation would decrease the value below 0, the new value must be 0.
     *
     * @param  string $serviceName
     * @param  int    $ttl
     * @return void
     */
    public function decrement($serviceName, $ttl);

    /**
     * sets last failure time
     *
     * @param  string $serviceName
     * @param  int    $lastFailureTime
     * @return void
     */
    public function saveLastFailureTime($serviceName, $lastFailureTime);

    /**
     * returns last failure time
     *
     * @return int | null
     */
    public function loadLastFailureTime($serviceName);

    /**
     * sets status
     *
     * @param  string $serviceName
     * @param  int    $status
     * @return void
     */
    public function saveStatus($serviceName, $status);

    /**
     * returns status
     *
     * @param  string $serviceName
     * @return int
     */
    public function loadStatus($serviceName);
}
