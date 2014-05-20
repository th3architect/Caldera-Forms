<div class="preview-caldera-config-group">
	{{#unless hide_label}}<lable class="control-label">{{label}}</lable>{{/unless}}
	<div class="preview-caldera-config-field">
		{{#if config/option}}
			{{#each config/option}}
			{{#unless ../config/inline}}
			<div>
			{{/unless}}
			<label style="margin: 0px 10px 0px 0px;"><input type="radio" class="preview-field-config" {{#is default value=true}}checked="checked"{{/is}}> {{label}}</label>
			{{#unless ../config/inline}}
			</div>
			{{/unless}}

			{{/each}}
		{{else}}
			<input type="radio" class="preview-field-config">
		{{/if}}
		<span class="help-block">{{caption}}</span>
	</div>
</div>