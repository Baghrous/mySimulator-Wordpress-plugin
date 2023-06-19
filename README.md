# mySimulator WordPress Plugin

This repository contains the source code for the mySimulator WordPress plugin. The plugin allows users to perform calculation projections based on input variables.

## Installation

1. Clone the repository to your local machine using the following command:
git clone https://github.com/Baghrous/mySimulator-Wordpress-plugin.git

2. Copy the `mySimulator` folder to the `wp-content/plugins/` directory of your WordPress installation.

3. Log in to your WordPress admin panel and go to the "Plugins" page.

4. Activate the "mySimulator" plugin.

## Usage

1. Create a new page in WordPress where you want to display the calculator.

2. In the page editor, add the following shortcode to insert the calculator:
[mySimulator]

3. Save the page and view it on the frontend to see the calculator in action.

## Requirements

- WordPress 5.0 or higher
- Contact Form 7 plugin
- Default WordPress theme

## Optional Integration

You have the option to integrate a JavaScript framework such as Vue.js, Angular, or React to enhance the functionality of the plugin. To do this, follow these steps:

1. Install the desired JavaScript framework in your WordPress installation.

2. Modify the `mySimulator` plugin code to incorporate the framework.

3. Make sure to enqueue the necessary JavaScript and CSS files for the framework in the plugin.

## Backend Configuration

The plugin provides a user-friendly backend configuration panel where you can customize the settings and parameters of the calculator. To access the configuration panel, follow these steps:

1. Log in to your WordPress admin panel.

2. Go to the "Settings" section and click on "mySimulator".

3. Adjust the desired settings and save the changes.

## Calculation Details

The plugin performs the following calculations:

- Personnel costs = (total gross wages / 12) * Total project months
- Potential research allowance = (Personnel costs * 0.25) + (Orders to third parties * 0.15)


## License

This project is licensed under the [MIT License](LICENSE).

Please refer to the repository on GitHub ([https://github.com/Baghrous/mySimulator-Wordpress-plugin](https://github.com/Baghrous/mySimulator-Wordpress-plugin)) for more information and detailed instructions on usage, customization, and contribution.

Thank you for using mySimulator WordPress plugin!