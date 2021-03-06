<?php
namespace ManaPHP\Meter;

interface LinearInterface
{
    /**
     * @param string $type
     * @param string $id
     *
     * @return static
     */
    public function record($type, $id);

    /**
     * @param string $type
     * @param string $id
     *
     * @return void
     */
    public function flush($type, $id = null);

    /**
     * @param string $type
     * @param string $id
     *
     * @return int
     */
    public function get($type, $id);
}