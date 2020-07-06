<?php
/*
Plugin Name: Quiz-Extension d'Halloween pour Epitech
Plugin URI: localhost:3000/wordpress
Description: Ceci est une extension ou un plugin selon l'interpreteur.
Author: Martim Santos, Victor Fagot, Walid Didoune
Version: 0.1
*/

include_once('quiz_db.php');

register_activation_hook(__FILE__, 'my_tables');
register_activation_hook(__FILE__, 'my_tables_data');
register_deactivation_hook(__FILE__, 'my_tables_uninstall');

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
  add_menu_page('Quiz-Halloween', 'Quiz-Halloween', 'manage_options', 'quiz-extension.php', 'myplugin_admin_page', 'dashicons-tickets');
}

function myplugin_admin_page()
{
?>
  <div class="wrap">
    <h2>Hello World</h2>
  </div>
<?php
}

class widget_form_quiz extends WP_Widget
{
  function __construct()
  {
    parent::__construct(
      'widget_form_quiz',
      esc_html__('Widget Form Quiz Halloween', 'textdomain'),
      array('description' => esc_html__('Widget Form Quiz Halloween', 'textdomain'),)
    );
  }
  public function widget($args, $instance)
  {

    // change to dynamic widget
    echo $args['before_widget'];

    echo "<form id=formulaire method='post'>
    <p><input class='button_un' type='submit' value='Je préfère poser les questions'></p>
    </form>";
    echo "<form method='post'>
    <p><input class='button_deux' type='submit' value='Je préfère donner les réponses'></p>
    </form>";

    echo $args['after_widget'];
  }
}

add_action('widgets_init', 'widget_form_quiz');

function widget_form_quiz()
{
  register_widget('widget_form_quiz');
}