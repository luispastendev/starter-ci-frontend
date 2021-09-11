<?php

namespace CIHispano\Starter\Command;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Starter extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CIHispano Starter';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'starter:init';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Create a new bundler.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'starter:init';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        CLI::print("Bienvenidos a CIHispano Starter Pack\n", 'light_red');
        CLI::print('Esto es un proyecto colaborativo por la comunidad de CIHispano.');
        CLI::newLine();
    }
}
