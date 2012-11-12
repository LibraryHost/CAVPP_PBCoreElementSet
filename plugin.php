<?php
/**
 * PBCore Element Set plugin
 *
 * Creates element set for PBCore (Public Broadcasting Metadata Dictionary), a 
 * standard for digitalized documents (see http://pbcore.org).
 *
 * @copyright Pop Up Archive, 2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @author 
 * @package PBCore-Element-Set
 **/

class PBCorePlugin extends Omeka_Plugin_Abstract
{
    const ELEMENT_SET_NAME = 'PBCore';

    protected $_hooks = array(
        'install',
        'uninstall',
        'admin_append_to_plugin_uninstall_message',
        'public_theme_header',
    );

    protected $_filters = array(
        'admin_items_form_tabs',
        'define_response_contexts',
        'define_action_contexts',
    );

    public function hookInstall()
    {
        // Load elements to add.
        require_once('elements.php');

        // Don't install if an element set already exists.
        if ($this->_getElementSet(self::ELEMENT_SET_NAME)) {
            throw new Exception('An element set by the name "' . self::ELEMENT_SET_NAME . '" already exists. You must delete that element set to install this plugin.');
        }

        insert_element_set($elementSetMetadata, $elements);
    }

    public function hookUninstall()
    {
        $this->_deleteElementSet(self::ELEMENT_SET_NAME);
    }

    /**
     * Warns before the uninstallation of the plugin.
     */
    public function hookAdminAppendToPluginUninstallMessage()
    {
        echo '<p><strong>' . __('Warning') . '</strong>:'   
            . __('This will remove all the "' . self::ELEMENT_SET_NAME . '" elements added by this plugin and permanently delete all element texts entered in those fields.')
            . '</p>';
    }

    public function hookPublicThemeHeader()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        if ($request->getControllerName() == 'items' && $request->getActionName() == 'show') {
            echo '<link rel="alternate" type="application/rss+xml" href="' . item_uri() . '?output=pbcore" id="pbcore"/>' . "\n";
        }
    }
   
    public function filterAdminItemsFormTabs($tabs, $item)
    {
        unset($tabs['Dublin Core']);
        unset($tabs['Item Type Metadata']);
        return $tabs;
    }

    public function filterDefineResponseContexts($context)
    {
        $context['pbcore'] = array(
            'suffix'  => 'pbcore', 
            'headers' => array('Content-Type' => 'text/xml'),
        );
    
        return $context;
    }
    
    public function filterDefineActionContexts($context)
    {
        if ($controller instanceof ItemsController) {
            $context['show'][] = 'pbcore';
        }
    
        return $context;
    }

    private function _getElementSet($elementSetName)
    {
        return $this->_db
            ->getTable('ElementSet')
            ->findByName($elementSetName);
    }

    private function _deleteElementSet($elementSetName)
    {
        $elementSet = $this->_getElementSet($elementSetName);

        if ($elementSet) {
            $elements = $elementSet->getElements();
            foreach ($elements as $element) {
                $element->delete();
            }
            $elementSet->delete();
        }
    }
}

/** Installation of the plugin. */
$pbcore = new PBCorePlugin();
$pbcore->setUp();
