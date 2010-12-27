{namespace k=Tx_ExtbaseKickstarter_ViewHelpers}<?php
{classObject.docComment}
<f:for each="{classObject.modifierNames}" as="modifierName">{modifierName} </f:for>class {classObject.name} <k:class classObject="{classObject}"  renderElement="parentClass" />  <k:class classObject="{classObject}"  renderElement="interfaces" /> {
<f:for each="{classObject.constants}" as="constant">
	/**
	*<f:for each="{constant.docComment.getDescriptionLines}" as="descriptionLine">
	* {descriptionLine}</f:for>
	*<f:for each="{constant.tags}" as="tag">
	* {tag}</f:for>
	*/
	const {constant.name} = {constant.value};
</f:for>
<f:for each="{classObject.properties}" as="property">
	/**<f:for each="{property.descriptionLines}" as="descriptionLine">
	* {descriptionLine}</f:for>
	*<f:for each="{property.annotations}" as="annotation">
	* @{annotation}</f:for>
	*/
	<f:for each="{property.modifierNames}" as="modifierName">{modifierName} </f:for>${property.name}{property.defaultDeclaration};
</f:for>

<f:for each="{classObject.methods}" as="method">
	/**<f:for each="{method.descriptionLines}" as="descriptionLine">
	* {descriptionLine}</f:for>
	*<f:for each="{method.annotations}" as="annotation">
	* @{annotation}</f:for>
	*/
	<f:for each="{method.modifierNames}" as="modifierName">{modifierName} </f:for>function {method.name}(<k:method methodObject="{method}"  renderElement="parameter" />)<![CDATA[{]]>
{method.body}
	<![CDATA[}]]>
</f:for>
}
{classObject.appendedBlock}?>