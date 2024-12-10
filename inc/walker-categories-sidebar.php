<?php
/**
 * Taxonomy API: Walker_Category class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */

/**
 * Core class used to create an HTML list of categories.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Custom_Walker_Category extends Walker_Category {

	public $tree_type = 'category';

	public $db_fields = array(
		'parent' => 'parent',
		'id'     => 'term_id',
	);
    public $cat_slug = '';
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
			return;
		}
        $cat_slug = $this->cat_slug;
		$indent  = str_repeat( "\t", $depth );

        if ( $depth === 0 ) {
            $output .= "$indent<ul class='list ps-0'>\n";
        } else {
            $output .= "$indent<div class='collapse' id='$cat_slug-collapse' $depth ><ul class='list ps-0 '>\n";
        }

	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 2.1.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string $output Used to append additional content. Passed by reference.
	 * @param int    $depth  Optional. Depth of category. Used for tab indentation. Default 0.
	 * @param array  $args   Optional. An array of arguments. Will only append content if style argument
	 *                       value is 'list'. See wp_list_categories(). Default empty array.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
			return;
		}

		$indent  = str_repeat( "\t", $depth );


        if ( $depth === 0 ) {
            $output .= "$indent</ul>\n";
        } else {
            $output .= "$indent</ul></div>\n";
        }

	}

	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$category = $data_object;
        if ( $category->slug == 'misc' ) return;
        $this->cat_slug = $category->slug;
		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters( 'list_cats', esc_attr( $category->name ), $category );

		// Don't generate an element if the category name is empty.
		if ( '' === $cat_name ) {
			return;
		}

		$atts         = array();
		$atts['href'] = get_term_link( $category );

		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
			$atts['title'] = strip_tags( apply_filters( 'category_description', $category->description, $category ) );
		}

		$atts = apply_filters( 'category_list_link_attributes', $atts, $category, $depth, $args, $current_object_id );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

        if ( $depth === 0 ) {
            $link = sprintf('<h3 class="text-uppercase d-none">%s</h3>',$cat_name);
        } else if ( $depth === 1 ) {
            $link = '<button class="btn btn-toggle d-inline-flex align-items-center border-0 text-uppercase text-start ps-0 fs-6 collapsed" data-bs-toggle="collapse" data-bs-target="#'.$category->slug.'-collapse" aria-expanded="false">'.$cat_name.'</button>';
        } else {
            $link = sprintf(
                '<a%s>%s</a>',
                $attributes,
                $cat_name
            );
        }

		if ( ! empty( $args['feed_image'] ) || ! empty( $args['feed'] ) ) {
			$link .= ' ';

			if ( empty( $args['feed_image'] ) ) {
				$link .= '(';
			}

			$link .= '<a href="' . esc_url( get_term_feed_link( $category, $category->taxonomy, $args['feed_type'] ) ) . '"';

			if ( empty( $args['feed'] ) ) {
				/* translators: %s: Category name. */
				$alt = ' alt="' . sprintf( __( 'Feed for all posts filed under %s' ), $cat_name ) . '"';
			} else {
				$alt   = ' alt="' . $args['feed'] . '"';
				$name  = $args['feed'];
				$link .= empty( $args['title'] ) ? '' : $args['title'];
			}

			$link .= '>';

			if ( empty( $args['feed_image'] ) ) {
				$link .= $name;
			} else {
				$link .= "<img src='" . esc_url( $args['feed_image'] ) . "'$alt" . ' />';
			}

			$link .= '</a>';

			if ( empty( $args['feed_image'] ) ) {
				$link .= ')';
			}
		}

		if ( ! empty( $args['show_count'] ) ) {
			$link .= ' (' . number_format_i18n( $category->count ) . ')';
		}

		if ( 'list' === $args['style'] ) {

            if ( $depth === 0 ) {

                $output .= $link;
            } else {
			    $output     .= "\t<li";
                $css_classes = array(
                    'cat-item',
                    'cat-item-' . $category->term_id,
                );

                if ( ! empty( $args['current_category'] ) ) {
                    // 'current_category' can be an array, so we use `get_terms()`.
                    $_current_terms = get_terms(
                        array(
                            'taxonomy'   => $category->taxonomy,
                            'include'    => $args['current_category'],
                            'hide_empty' => false,
                        )
                    );

                    foreach ( $_current_terms as $_current_term ) {
                        if ( $category->term_id === $_current_term->term_id ) {
                            $css_classes[] = 'current-cat';
                            $link          = str_replace( '<a', '<a aria-current="page"', $link );
                        } elseif ( $category->term_id === $_current_term->parent ) {
                            $css_classes[] = 'current-cat-parent';
                        }

                        while ( $_current_term->parent ) {
                            if ( $category->term_id === $_current_term->parent ) {
                                $css_classes[] = 'current-cat-ancestor';
                                break;
                            }

                            $_current_term = get_term( $_current_term->parent, $category->taxonomy );
                        }
                    }
                }

                $css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );
                $css_classes = $css_classes ? ' class="' . esc_attr( $css_classes ) . '"' : '';

                $output .= $css_classes;
                $output .= ">$link\n";
            }



		} elseif ( isset( $args['separator'] ) ) {
			$output .= "\t$link" . $args['separator'] . "\n";
		} else {
			$output .= "\t$link<br />\n";
		}
	}

	public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
			return;
		}
        if ( $depth === 0 ) {

            $output .= '';
        } else {
		    $output .= "</li>\n";
        }
	}
}
