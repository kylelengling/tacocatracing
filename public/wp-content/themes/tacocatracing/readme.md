# tacocatracing Fitness

- blank slate
- acf pro
- acf flexible-content
- custom post types ui

```
add_action('init', 'remove_editor_init');
function remove_editor_init() {
  remove_post_type_support('page', 'editor');
}
```
