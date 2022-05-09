<?php 

/*
 * (c) YOUR NAME <your@email.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

// If you don't to add a custom vendor folder, then use the simple class
// namespace HelloComposer;
// https://ourcodeworld.com/articles/read/342/how-to-create-with-github-your-first-psr-4-composer-packagist-package-and-publish-it-in-packagist
namespace ourcodeworld\HelloComposer;

class Hello
{
    public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}