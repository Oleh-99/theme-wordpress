import {RichText} from "@wordpress/block-editor/build/components";
import { __ } from '@wordpress/i18n';

const Edit = ( { className, attributes, setAttributes } ) => {
	const content = attributes;

	return (
		<div className="merak-icon-heading">
			<span className="merak-icon-heading_heading"/>
			<RichText
				tagName   = "h4"
				className = { className }
				value     = { content }
				onChange  = { ( content ) => setAttributes( content ) }
				placeholder = { __( 'Heading...', 'merak' ) }
			/>
		</div>
	);
}

export default Edit
