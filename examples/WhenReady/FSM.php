<?php namespace Examples\WhenReady;

use FSM\Machine;

class FSM extends Machine
{
    /**
     * @var array
     */
    protected $constraints = [
        'first' => false,
        'second' => false,
        'third' => false
    ];

    /**
     * @return bool
     */
    public function checkReady()
    {
        return count(array_keys($this->constraints, true)) === count($this->constraints);
    }

    /**
     * @param $state
     */
    public function unGuard($state)
    {
        $this->constraints[$state] = true;
    }
}