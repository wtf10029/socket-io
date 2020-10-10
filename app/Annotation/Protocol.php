<?php

declare(strict_types=1);

namespace App\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;
/**
 * @Annotation
 * @Target("ALL")
 */
class Protocol extends AbstractAnnotation
{

    public $cmd = '';

    public $data = '';

    public $ext = '';
}
