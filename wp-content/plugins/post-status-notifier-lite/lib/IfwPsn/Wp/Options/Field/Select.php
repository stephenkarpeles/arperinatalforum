<?php
/**
 * ifeelweb.de WordPress Plugin Framework
 * For more information see http://www.ifeelweb.de/wp-plugin-framework
 *
 * Options field text
 *
 * @author   Timo Reith <timo@ifeelweb.de>
 * @version  $Id: Select.php 1850577 2018-03-31 19:25:01Z worschtebrot $
 */
require_once dirname(__FILE__) . '/../Field.php';

class IfwPsn_Wp_Options_Field_Select extends IfwPsn_Wp_Options_Field
{
    protected $_html = '<select id="%s" name="%s">';

    public function render(array $params)
    {
        /**
         * @var IfwPsn_Wp_Options
         */
        $options = $params[0];

        $id = $options->getOptionRealId($this->_id);
        $name = $this->_getName($id, $options);

        $selectOptions = $this->_params['options'];
        $selectDefault = $this->_params['optionsDefault'];
        if (!is_array($selectOptions)) {
            $selectOptions = array($selectOptions);
        }

        $html = $this->_getOutputStart($id);
        $html .= sprintf($this->_html, $id, $name);

        $extra = '';
        if (isset($this->_params['size'])) {
            $extra .= sprintf('size="%d" ', htmlentities($this->_params['size']));
        }

        if (!empty($extra)) {
            $html = str_replace('>', ' ' . $extra . ' >', $html);
        }

        foreach ($selectOptions as $k => $v) {
            if ($this->_isDefault($k, $selectDefault)) {
                $selected = ' selected ';
            } else {
                $selected = '';
            }
            $html .= sprintf('<option value="%s"%s>%s</option>', $k, $selected, $v);
        }

        $html .= '</select>';

        if (!empty($this->_description)) {
            $html .= '<br><p class="description"> '  . $this->_description . '</p>';
        }

        $html .= $this->_getOutputEnd();
        echo $html;
    }

    /**
     * @param $id
     * @param $options
     * @return string
     */
    protected function _getName($id, $options)
    {
        return $options->getPageId() . '['. $id .']';
    }

    /**
     * @param $k
     * @param $default
     * @return bool
     */
    protected function _isDefault($k, $default)
    {
        if (is_string($default)) {
            return $k == $default;
        } elseif (is_int($default)) {
            return intval($k) == $default;
        } elseif (is_array($default)) {
            return in_array($k, $default);
        }
        return false;
    }
}
