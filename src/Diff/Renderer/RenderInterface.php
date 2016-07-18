<?php

/*
 +------------------------------------------------------------------------+
 | Phalcon Diff                                                           |
 +------------------------------------------------------------------------+
 | Copyright (c) 2009-2016, Chris Boulton <chris.boulton@interspire.com>  |
 | Copyright (c) 2016 Phalcon Team and contributors                       |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file docs/LICENSE.txt.                        |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
*/

namespace Phalcon\Diff\Render;

use Phalcon\Diff;

/**
 * Render Interface
 */
interface RenderInterface
{
    /**
     * Render and return diff.
     *
     * @return string
     */
    public function render();

    /**
     * Gets Diff object.
     *
     * @return Diff $diff
     */
    public function getDiffObject();

    /**
     * Sets Diff object.
     *
     * @param Diff $diff
     * @return RenderInterface
     */
    public function setDiffObject(Diff $diff);
}
