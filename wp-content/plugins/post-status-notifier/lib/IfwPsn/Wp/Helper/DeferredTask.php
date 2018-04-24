<?php
/**
 *
 *
 * @author    Timo Reith <timo@ifeelweb.de>
 * @copyright Copyright (c) 2014 ifeelweb.de
 * @version   $Id: DeferredTask.php 557 2017-06-25 21:26:13Z timoreithde $
 * @package
 */
abstract class IfwPsn_Wp_Helper_DeferredTask
{
    /**
     * @var string
     */
    protected $_id;

    /**
     * @var int
     */
    protected $_maxInterval;

    /**
     * @var null|string
     */
    protected $_action;

    /**
     * IfwPsn_Wp_Helper_DeferredTask constructor.
     *
     * @param string $id
     * @param int $maxInterval in seconds
     * @param null|string $action
     */
    public function __construct($id, $maxInterval = 3600, $action = null)
    {
        $this->_id = $id;
        $this->_maxInterval = $maxInterval;
        if ($action !== null) {
            $this->_action = $action;
        }

        if ($this->_action !== null) {
            add_action($this->_action, array($this, 'init'));
        } else {
            $this->init();
        }
    }

    /**
     * Executes the task if no transient data was found
     */
    public function init()
    {
        $result = get_transient($this->_id);
        if (empty($result)) {
            $this->_execute();
            set_transient($this->_id, true, $this->_maxInterval);
        }
    }

    abstract protected function _execute();
}
