<?php

declare(strict_types=1);

namespace IvoValchev\EditThisPageExtension;

use Bolt\Widget\BaseWidget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\Injector\Target;
use Bolt\Widget\StopwatchAwareInterface;
use Bolt\Widget\StopwatchTrait;
use Bolt\Widget\TwigAwareInterface;

class EditPageWidget extends BaseWidget implements TwigAwareInterface, StopwatchAwareInterface
{
    use StopwatchTrait;

    protected $name = 'Edit This Page Widget';
    protected $target = Target::END_OF_BODY;
    protected $priority = 300;
    protected $template = 'edit-button.html.twig';
    protected $zone = RequestZone::FRONTEND;
    protected $cacheDuration = 0;

    public function run(array $params = []): ?string
    {
        $content = isset($this->getTwig()->getGlobals()['record']) ? $this->getTwig()->getGlobals()['record'] : null;
        $config = $this->getExtension()->getConfig();

        return parent::run(['content' => $content, 'config' => $config]);
    }

}
