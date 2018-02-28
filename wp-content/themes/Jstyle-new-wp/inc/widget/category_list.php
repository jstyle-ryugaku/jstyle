<?php
/**
 * Category list (tcd ver)
 */
class Tcdw_Category_List_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {

		$widget_ops = array( 
			'classname' => 'tcdw_category_list_widget',
			'description' => __( 'Displays designed category list.', 'tcd-w' )
		);

		parent::__construct(
			'tcdw_category_list_widget', // ID
			__( 'Category list (tcd ver)', 'tcd-w' ), // Name
			$widget_ops
		);

	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {

		$title = apply_filters( 'widget_title', $instance['title'] ); // the widget title
		$cat_args = array(
  		'class' => '',
			'exclude'   => $instance['exclude_cat_num'], // category id to exclude
  		'show_count' => 0,
  		'hierarchical' => 0,
  		'echo' => 0
		);
		$categories = get_categories( $cat_args );

   	echo $args['before_widget'];

		if ( $title ) { 
			echo $args['before_title'] . $title . $args['after_title']; 
		}
?>
		<ul class="p-widget-list">
			<?php foreach ( $categories as $category ) : ?>
			<li class="p-widget-list__item">
				<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
 			</li>
			<?php endforeach; ?>
		</ul>
		<?php
   	echo $args['after_widget'];
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['exclude_cat_num'] = strip_tags( $new_instance['exclude_cat_num'] );
		return $instance;
	}

	
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */	
	function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$exclude_cat_num = isset( $instance['exclude_cat_num'] ) ? $instance['exclude_cat_num'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'tcd-w' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>'" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'exclude_cat_num' ); ?>"><?php _e( 'Categories To Exclude:', 'tcd-w' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'exclude_cat_num' ); ?>" name="<?php echo $this->get_field_name( 'exclude_cat_num' ); ?>'" type="text" value="<?php echo esc_attr( $exclude_cat_num ); ?>">
			<span><?php _e( 'Enter a comma-seperated list of category ID numbers, example 2,4,10<br />(Don\'t enter comma for last number).', 'tcd-w' ); ?></span>
		</p>
		<?php
	}
}

// register tcdw_category_list_widget
function register_tcdw_category_list_widget() {
	register_widget( 'Tcdw_Category_List_Widget' );
}
add_action( 'widgets_init', 'register_tcdw_category_list_widget' );
