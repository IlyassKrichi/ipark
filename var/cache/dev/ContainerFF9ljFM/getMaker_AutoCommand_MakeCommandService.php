<?php

<<<<<<<< HEAD:var/cache/dev/ContainerOhpH17T/getMaker_AutoCommand_MakeCommandService.php
namespace ContainerOhpH17T;

========
namespace ContainerFF9ljFM;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerFF9ljFM/getMaker_AutoCommand_MakeCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeCommand.php';

        $container->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(($container->privates['maker.php_compat_util'] ?? $container->load('getMaker_PhpCompatUtilService'))), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:command');
        $instance->setDescription('Creates a new console command class');

        return $instance;
    }
}
