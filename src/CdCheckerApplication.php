<?php

namespace DataMat\CdChecker;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Extension of Symfony's console application class to allow us to have a single, default command.
 */
final class CdCheckerApplication extends Application
{
    /**
     * Override the default command name logic and return our check command.
     *
     * @param InputInterface $input Input
     *
     * @return string
     */
    protected function getCommandName(InputInterface $input) : string
    {
        return 'check';
    }

    /**
     * Overridden so that the application doesn't expect the command
     * name to be the first argument.
     */
    public function getDefinition() : \Symfony\Component\Console\Input\InputDefinition
    {
        $inputDefinition = parent::getDefinition();
        // clear out the normal first argument, which is the command name
        $inputDefinition->setArguments();

        return $inputDefinition;
    }
}
