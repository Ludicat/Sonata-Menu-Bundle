<?php

namespace Prodigious\Sonata\MenuBundle;

use Prodigious\Sonata\MenuBundle\DependencyInjection\Compiler\DoctrineResolveTargetEntityPass;
use Prodigious\Sonata\MenuBundle\DependencyInjection\Compiler\DoctrineAddEntityPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;

class ProdigiousSonataMenuBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new DoctrineResolveTargetEntityPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 1000);
    }
}
