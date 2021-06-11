import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { RichText } from "@wordpress/block-editor/build/components";
import Edit from "./edit";

registerBlockType( 'merak-blocks/heading', {
	apiVersion: 2,
	title: __( 'Heading with icon', 'merak' ),
	icon: 'admin-customizer',
	category: 'merak',
	attributes: {
		option: {
			type: 'string',
			default: 'dos',
		},
		content: {
			type: 'string',
			source: 'html',
			selector: 'h4',
			default: __( 'Dos', 'merak'),
		},
	},
	edit: Edit,
	save( {attributes: { content } } ) {
		return (
			<RichText.Content tagName="h4" value={content}/>
		);
	},
} );
