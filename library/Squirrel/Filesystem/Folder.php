<?php

namespace Squirrel\Filesystem;

/**
 * Interface for filesystem folders.
 *
 * @package Squirrel\Filesystem
 * @author Valérian Galliat
 */
class Folder extends Path
{
    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return is_dir($this->path);
    }

    /**
     * {@inheritdoc}
     */
    public function remove()
    {
        if (!$this->exists()) {
            return true;
        }

        return rmdir($this->path);
    }

    /**
     * {@inheritdoc}
     */
    public function create($mode = 0777)
    {
        if ($this->exists()) {
            return true;
        }
        
        return mkdir($this->path, $mode, true);
    }

    /**
     * Returns whether given file exists in folder.
     *
     * @todo
     * @param string|File $file
     * @return boolean
     */
    public function hasFile($file)
    {
        if ($file instanceof File) {

        }

        return $this->getFile($file)->exists();
    }

    /**
     * Gets file in folder by string.
     *
     * @param string $file
     * @return File
     */
    public function getFile($file)
    {
        return new File($this->path . '/' . $file);
    }

/*
    public static function items($dir)
    {
        $files = array();

        foreach (scandir($dir) as $file)
        {
            if (!in_array($file, array('.', '..')))
            {
                $files[] = $dir . '/' . $file;
            }
        }

        return $files;
    }

    public static function scan($dir)
    {
        $files   = self::items($dir);

        foreach ($files as $file)
        {
            if (is_dir($file))
            {
                $files = array_merge($files, self::scan($file));
            }
        }

        return $files;
    }

    public static function dirs($dir)
    {
       return Collection::cast(self::items($dir))->filter('is_dir');
    }

    public static function files($dir)
    {
        return Collection::cast(self::items($dir))->filter('is_file');
    }*/
}
