<?php
global $questions_db_version;
$questions_db_version = '1.0';

function my_tables()
{
  global $wpdb;
  global $questions_db_version;

  $charset_collate = $wpdb->get_charset_collate();

  $questions_table_name = $wpdb->prefix . 'questions';

  $questions_sql = "CREATE TABLE $questions_table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    text text NOT NULL,
    PRIMARY KEY  (id)
  ) $charset_collate;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($questions_sql);
  add_option('questions_db_version', $questions_db_version);
}

function my_tables_data()
{
  global $wpdb;

  $welcome_text = 'Congratz, you installed my shitty tables!';

  $questions_table_name = $wpdb->prefix . 'questions';

  $wpdb->insert(
    $questions_table_name,
    array(
      'text' => $welcome_text,
    )
  );
}

function my_tables_uninstall()
{
  global $wpdb;
  global $questions_db_version;

  $questions_table_name = $wpdb->prefix . 'questions';

  $sql = "DROP TABLE IF EXISTS $questions_table_name";

  $wpdb->query($sql);
  delete_option($questions_db_version);
}
