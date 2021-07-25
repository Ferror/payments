<?php
declare(strict_types=1);

namespace Ferror;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    private function getRoot(string $path): string
    {
        return \dirname(__DIR__) . $path;
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $container->import($this->getRoot('/config/{packages}/*.yaml'));
        $container->import($this->getRoot('/config/{packages}/'.$this->environment.'/*.yaml'));

        if (\is_file($this->getRoot('/config/services.yaml'))) {
            $container->import($this->getRoot('/config/services.yaml'));
            $container->import($this->getRoot('/config/{services}_'.$this->environment.'.yaml'));
        } else {
            $container->import($this->getRoot('/config/{services}.php'));
        }
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import($this->getRoot('/config/{routes}/'.$this->environment.'/*.yaml'));
        $routes->import($this->getRoot('/config/{routes}/*.yaml'));

        if (\is_file($this->getRoot('/config/routes.yaml'))) {
            $routes->import($this->getRoot('/config/routes.yaml'));
        } else {
            $routes->import($this->getRoot('/config/{routes}.php'));
        }
    }
}
