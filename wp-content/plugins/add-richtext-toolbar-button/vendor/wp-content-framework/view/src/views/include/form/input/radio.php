<?php
/**
 * WP_Framework_View Views Include Form Input Radio
 *
 * @author Technote
 * @copyright Technote All Rights Reserved
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space
 */

use WP_Framework_Presenter\Interfaces\Presenter;

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	return;
}
/** @var Presenter $instance */
/** @var string $id */
/** @var string $label */
/** @var array $args */
/** @var bool|null $checked */
! empty( $checked ) and $args['attributes']['checked'] = 'checked';
?>
<?php if ( isset( $label ) ): ?>
    <label <?php if ( isset( $id ) ): ?>for="<?php $instance->h( $id ); ?>"<?php endif; ?>>
		<?php $instance->form( 'input', array_merge( $args, [
			'type' => 'radio',
		] ) ); ?>
		<?php $instance->h( $label, true ); ?>
    </label>
<?php else: ?>
	<?php $instance->form( 'input', array_merge( $args, [
		'type' => 'radio',
	] ) ); ?>
<?php endif; ?>
