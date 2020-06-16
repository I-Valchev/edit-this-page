<?php

namespace IvoValchev\EditThisPageExtension;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Edit This Page Extension';
    }

    public function initialize(): void
    {
        $this->addWidget(new EditPageWidget());
    }
}