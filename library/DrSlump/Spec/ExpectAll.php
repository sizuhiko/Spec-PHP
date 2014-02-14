<?php
//  Spec for PHP
//  Copyright (C) 2011 Iván -DrSlump- Montes <drslump@pollinimini.net>
//
//  This source file is subject to the MIT license that is bundled
//  with this package in the file LICENSE.
//  It is also available through the world-wide-web at this URL:
//  http://creativecommons.org/licenses/MIT/

namespace DrSlump\Spec;

use DrSlump\Spec;


/**
 * Wraps an iterable variable to apply an expectation over all of
 * its members, and it will be ok if all of them pass.
 *
 * @package     Spec
 * @author      Iván -DrSlump- Montes <drslump@pollinimini.net>
 * @see         https://github.com/drslump/Spec
 *
 * @copyright   Copyright 2011, Iván -DrSlump- Montes
 * @license     http://creativecommons.org/licenses/MIT     The MIT License
 */
class ExpectAll implements ExpectInterface
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function doAssert(\Hamcrest\Matcher $matcher, $message = null)
    {
        if (!empty($message)) {
            \Hamcrest\MatcherAssert::assertThat(
                $message,
                $this->value,
                \Hamcrest\Core\Every::everyItem($matcher)
            );
        } else {
            \Hamcrest\MatcherAssert::assertThat(
                $this->value,
                \Hamcrest\Core\Every::everyItem($matcher)
            );
        }
    }
}
