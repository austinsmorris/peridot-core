<?php
namespace Peridot\Core;

/**
 * The SuiteLoaderInterface outlines a contract for including
 * tests
 *
 * @package Peridot\Core
 */
interface SuiteLoaderInterface
{
    /**
     * Search a path for a provided file or scan a
     * directory structure for files matching the loader's
     * conditions
     *
     * @param $path
     * @return array
     */
    public function getTests($path);

    /**
     * Load tests
     *
     * @param $path
     */
    public function load($path);
}
