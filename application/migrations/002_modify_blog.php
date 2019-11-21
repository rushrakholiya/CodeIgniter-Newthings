<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_modify_blog extends CI_Migration {

        public function up()
        {
                $fields = array(
                        'blog_title' => array(
                                'name' => 'blog_title1',
                                'type' => 'TEXT',
                        ),
                );
                $this->dbforge->modify_column('blog', $fields);
        }

        public function down()
        {
                $fields = array(
                        'blog_title1' => array(
                                'name' => 'blog_title',
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                );                
                $this->dbforge->modify_column('blog', $fields);
        }
}
?>