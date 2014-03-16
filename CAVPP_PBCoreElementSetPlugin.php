<?php
/**
 * CAVPP PBCore Element Set plugin
 *
 * Creates a custom element set for 
 * California Audiovisual Preservation Project based on 
 * PBCore (Public Broadcasting Metadata Dictionary),
 * a standard for digitalized documents (see http://pbcore.org).
 *
 * copyright LibraryHost, 2014
 * Based on PBCore Element Set by Pop Up Archive, 2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * The CAVPP PBCore Element Set plugin.
 * @package Omeka\Plugins\CAVPP_PBCoreElementSet
 */
class CAVPP_PBCoreElementSetPlugin extends Omeka_Plugin_AbstractPlugin
{
    private $_elementSetName = 'CAVPP_PBCore';

    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'install',
        'uninstall',
		'after_save_item',
        'public_theme_header',
        // BeamMeUpToInternetArchive hook used to get list of metadata.
        'beamia_set_settings',
    );

    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array(
        'response_contexts',
        'action_contexts',
    );

    /**
     * Install the plugin.
     */
    public function hookInstall()
    {
        $this->_installOptions();

        // Load elements to add.
        require_once('elements.php');

        // Don't install if an element set already exists.
        if ($this->_getElementSet($this->_elementSetName)) {
            throw new Omeka_Plugin_Installer_Exception('An element set by the name "' . $this->_elementSetName . '" already exists. You must delete that element set to install this plugin.');
        }

        insert_element_set($elementSetMetadata, $elements);
    }

    /**
     * Uninstall the plugin.
     */
    public function hookUninstall()
    {
        $this->_deleteElementSet($this->_elementSetName);

        $this->_uninstallOptions();
    }

	/**
	* Saves the metadata
	*/
	public function hookAfterSaveItem($args)
    {
        $post = $args['post'];
        $item = $args['record'];
    }

    /*
	* Output pbcore xml from public view
	*/
    public function hookPublicThemeHeader()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        if ($request->getControllerName() == 'items' && $request->getActionName() == 'show') {
            echo '<link rel="alternate" type="application/rss+xml" href="' . record_url(get_current_record('item')) . '?output=cavpp_pbcore" id="cavpp_pbcore"/>' . PHP_EOL;
        }
        if ($request->getControllerName() == 'items' && $request->getActionName() == 'browse') {
            echo '<link rel="alternate" type="application/rss+xml" href="' . record_url(get_current_record('item')) . '?output=cavpp_pbcore" id="cavpp_pbcore"/>' . PHP_EOL;
        }
    }
	
    /**
     * BeamMeUpToInternetArchive hook used to get list of metadata.
     *
     * Note that default Dublin Core metadata are removed.
     */
    public function hookBeamiaSetSettings($args)
    {
        // Don't use Dublin Core metadata that are created by default.
        $settings = array();
        $record = $args['record'];
        $elementSetName = $this->_elementSetName;

        // Add existing elements.
        $options = array(
            'show_empty_elements' => false,
            'return_type' => 'array',
        );
        if ($elementSetName) {
            $options['show_element_sets'] = $elementSetName;
        }
        $elementTexts = all_element_texts($record, $options);

        // Don't add "Dublin Core" in the header, because this is the standard
        // on Internet Archive.
        $cleanElementSetName = ($elementSetName == 'Dublin Core') ?
            '' :
            preg_replace('#[^a-z0-9]+#', '-', strtolower($elementSetName)) . '-';

        foreach ($elementTexts[$elementSetName] as $element => $texts) {
            // Replace unique or serie of non-alphanumeric character by "-".
            $meta = preg_replace('#[^a-z0-9]+#', '-', strtolower($element));
            foreach ($texts as $key => $text) {
                $base = (count($texts) == 1) ?
                    'x-archive-meta-' :
                    'x-archive-meta' . sprintf('%02d', $key) . '-';
                $settings[] = $base . $cleanElementSetName . $meta . ':' . $text;
            }

            // Add default title if it exists. If none, a generic name will be
            // added automatically.
            if ($element == 'Title') {
                $settings[] = 'x-archive-meta-title:' . $texts[0];
            }
        }

        $args['settings'] = $settings;
    }

    public function filterResponseContexts($contexts)
    {
        $contexts['cavpp_pbcore'] = array(
            'suffix'  => 'cavpp_pbcore',
            'headers' => array('Content-Type' => 'text/xml'),
        );

        return $contexts;
    }

    public function filterActionContexts($contexts, $controller)
    {
        if ($controller['controller'] instanceof ItemsController) {
            $contexts['show'][] = 'cavpp_pbcore';
            $contexts['browse'][] = 'cavpp_pbcore';
        }

        return $contexts;
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
