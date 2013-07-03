<?php

namespace Squirrel\Filesystem;

/**
 * Object representation of a path.
 *
 * @package Squirrel\Filesystem
 * @author Valérian Galliat
 */
abstract class Path
{
    /**
     * @var string
     */
    protected $path;

    /**
     * Initializes formatted and parsed path string.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        if (file_exists($path)) {
            $path = realpath($path);
        }

        if (!preg_match('/^(?:[a-zA-Z]:)?[\\\\\/]/', $path)) {
            $path->prepend(getcwd() . '/');
        }

        $path = str_replace('\\', '/', $path);
        $index = strpos($path, '/') + 1;
        $trailing = substr($path, 0, $index);
        $parts = explode('/', substr($path, $index));
        $parts = array_filter($parts, 'strlen');
        $absolutes = array();

        foreach ($parts as $part) {
            if ($part === '.') {
                continue;
            }

            if ($part === '..') {
                array_pop($absolutes);
                continue;
            }

            $absolutes[] = $part;
        }

        $this->path = str_replace('/', DIRECTORY_SEPARATOR, $trailing . implode('/', $absolutes));
    }

    /**
     * Gets path as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->path;
    }

    /**
     * Returns whether current path is readable.
     *
     * @return boolean
     */
    public function isReadable()
    {
        return is_readable($this->path);
    }

    /**
     * Returns whether current path is writable.
     *
     * @return boolean
     */
    public function isWritable()
    {
        return is_writable($this->path);
    }

    /**
     * Returns whether path type exists.
     *
     * @return boolean
     */
    public abstract function exists();

    /**
     * Removes path type of tree.
     *
     * @return boolean
     */
    public abstract function remove();

    /**
     * Creates path type with given mode.
     *
     * @param  int $mode
     * @return boolean
     */
    public abstract function create($mode = 0777);
}
