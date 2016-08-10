<?php
namespace Craft;

class ThemerPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Themer');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getSchemaVersion() {
    return '0.1';
  }

  public function getDescription() {
    return 'Customise the colour and style aesthetics of the Craft CMS.';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-themer';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-themer/master/themer/releases.json';
  }

  protected function defineSettings() {
    return array(
      'header'     => array(AttributeType::String, 'default' => '#333F4D'),
      'background' => array(AttributeType::String, 'default' => '#FFFFFF'),
      'buttons'    => array(AttributeType::String, 'default' => '#DA5A47'),
      'headings'   => array(AttributeType::String, 'default' => '#DA5A47'),
      'links'      => array(AttributeType::String, 'default' => '#0d78f2'),
      'sidebar'    => array(AttributeType::String, 'default' => '#737F8C'),
      'pane'       => array(AttributeType::String, 'default' => '#F4F5F6'),
      'switch'     => array(AttributeType::String, 'default' => '#00B007'),
      'text'       => array(AttributeType::String, 'default' => '#29323d'),
      'help'       => array(AttributeType::String, 'default' => '#9d2dcc'),
      'small'      => array(AttributeType::String, 'default' => '#000000')
    );
  }

  public function getSettingsHtml() {
    return craft()->templates->render('themer/settings', array(
      'settings' => $this->getSettings()
    ));
  }

  public function init() {
    if ( craft()->request->isCpRequest())  {

      return craft()->templates->render('themer/css', array(
        'settings' => $this->getSettings()
      ));

      if( !craft()->userSession->isLoggedIn() ) {
        craft()->templates->includeJs("$('body').addClass('login')");
      }
    }
  }


}
