## Advanced Custom Fields: Gravity Form Field

A Gravity Forms selection field type for Advanced Custom Fields (ACF), a popular WordPress plugin.

## Details

This field type provides a menu that allows for the selection of (active) forms created with the Gravity Forms plugin. The field will not work if Gravity Forms is not installed.

### Field options include:

#### Output
Return either the form ID or the form itself via the [gravity_form()](https://www.gravityhelp.com/documentation/article/embedding-a-form/) function. Note: When returning the form itself you _may_ need to enqueue Gravity Forms' css and scripts below wp\_head() using [gravity_form_enqueue_scripts()](https://www.gravityhelp.com/documentation/article/gravity_form_enqueue_scripts/).

#### Ajax
Choose whether or not the form will submit via Gravity Forms' ajax

#### Show Title
Choose whether or not the form's title will be displayed

#### Show Description
Choose whether or not the form's description will be displayed

## Compatibility

This ACF field type is compatible with:

* ACF 5

## Installation

1. Copy the 'advanced-custom-fields-code-field' folder into your 'wp-content/plugins' folder
2. Activate the Code Field plugin via the plugins admin page
3. Create a new field via ACF and select the Code Field type
4. Please refer to the description for more info regarding the field type settings

## Changelog

= 1.0.0 =
* Initial Release.