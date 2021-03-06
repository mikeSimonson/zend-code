<?php

namespace ZendTest\Code\TestAsset;

use Closure;

class ClassTypeHintedClass
{
    public function selfParameter(self $foo)
    {
    }

    public function classParameter(ClassTypeHintedClass $foo)
    {
    }

    public function otherClassParameter(InternalHintsClass $foo)
    {
    }

    public function closureParameter(\Closure $foo)
    {
    }

    public function importedClosureParameter(Closure $foo)
    {
    }
}
