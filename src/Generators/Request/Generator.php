<?php
namespace Exfriend\Robots\Generators\Request;

use Exfriend\Robots\Generators\Generator as BaseGenerator;

class Generator extends BaseGenerator
{
    protected $name;

    public function getNamespace()
    {
        return 'App\\Robots\\' . $this->robot . '\\Requests';
    }

    public function getOutputFilePath()
    {
        return app_path() . '/Robots/' . ucfirst( $this->robot ) . '/Requests/' . $this->name . '.php';
    }


    public function generate( $name, $robot, $bindings )
    {
        $this->name = ucfirst( $name );
        $this->robot = ucfirst( $robot );
        $this->handle( 'request', $bindings );
    }

}