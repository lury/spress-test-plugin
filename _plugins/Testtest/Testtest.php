<?php


use Symfony\Component\EventDispatcher\Event;
use Yosymfony\Spress\Plugin\EventSubscriber;
use Yosymfony\Spress\Plugin\Event\AfterConvertPostsEvent;
use Yosymfony\Spress\Plugin\Event\ConvertEvent;
use Yosymfony\Spress\Plugin\Event\EnvironmentEvent;
use Yosymfony\Spress\Plugin\Event\FinishEvent;
use Yosymfony\Spress\Plugin\Event\RenderEvent;
use Yosymfony\Spress\Plugin\Plugin;

class Testtest extends Plugin
{
    private $io;

    public function initialize(EventSubscriber $subscriber)
    {
        $subscriber->addEventListener('spress.start', 'onStart');
        $subscriber->addEventListener('spress.before_convert', 'onBeforeConvert');
        $subscriber->addEventListener('spress.after_convert', 'onAfterConvert');
        $subscriber->addEventListener('spress.after_convert_posts', 'onAfterConvertPosts');
        $subscriber->addEventListener('spress.before_render', 'onBeforeRender');
        $subscriber->addEventListener('spress.after_render', 'onAfterRender');
        $subscriber->addEventListener('spress.before_render_pagination', 'onBeforeRenderPagination');
        $subscriber->addEventListener('spress.after_render_pagination', 'onAfterRenderPagination');
        $subscriber->addEventListener('spress.finish', 'onFinish');
    }

    public function onStart(EnvironmentEvent $event)
    {
        $this->io = $event->getIO();
        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onBeforeConvert(ConvertEvent $event)
    {

      echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onAfterConvert(ConvertEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onAfterConvertPosts(AfterConvertPostsEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onBeforeRender(RenderEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onAfterRender(RenderEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onBeforeRenderPagination(RenderEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onAfterRenderPagination(RenderEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }

    public function onFinish(FinishEvent $event)
    {

        echo "-+- " . $event->getName() . " -+-" . PHP_EOL;
    }
}
