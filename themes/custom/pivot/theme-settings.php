<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function pivot_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['st_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Pivot Theme Settings'),
        '#collapsible' => true,
        '#collapsed' => true,
    );
  
  // Color
  $form['st_settings']['tabs']['them_color_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('Color setting'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['st_settings']['tabs']['them_color_config']['theme_color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => theme_get_setting('theme_color'),
    '#options'  => array(
        'default'           => t('Default'),
        'aquatica'              => t('Aquatica'),
        'aspirin'             => t('Aspirin'),
        'blues'           => t('Blues'),
        'buddha'       => t('Buddha'),
        'campfire'            => t('Campfire'),
        'cobalt'            => t('Cobalt'),
        'dusk'             => t('Dusk'),
        'eco'           => t('Eco'),
        'matte'           => t('Matte'),
        'mustang'           => t('Mustang'),
        'rocklobster'           => t('Rocklobster'),
        'sunset'           => t('Sunset'),
        'tronic'           => t('Tronic'),
        'zest'           => t('Zest')
    ),
  );
  
}

