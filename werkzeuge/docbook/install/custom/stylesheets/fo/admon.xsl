<?xml version="1.0" encoding="iso-8859-1"?>
<!-- $Id$ -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:fo="http://www.w3.org/1999/XSL/Format"
                version='1.0'>

<!-- Use graphics in admonitions -->
<xsl:param name="admon.graphics">1</xsl:param>

<!-- Extension for admonition graphics -->
<xsl:param name="admon.graphics.extension">.gif</xsl:param>

<!-- Path to admonition graphics -->
<xsl:param name="admon.graphics.path">images/</xsl:param>

<!-- Don't Use text label in admonitions -->
<xsl:param name="admon.textlabel">0</xsl:param>

<!-- To set the style for admonitions titles -->
<xsl:attribute-set name="admonition.title.properties">
  <xsl:attribute name="font-size">14pt</xsl:attribute>
  <xsl:attribute name="font-weight">bold</xsl:attribute>
  <xsl:attribute name="hyphenate">false</xsl:attribute>
  <xsl:attribute name="keep-with-next.within-column">always</xsl:attribute>
</xsl:attribute-set>

<!-- To set the style for admonitions. -->
<xsl:attribute-set name="admonition.properties">
  <xsl:attribute name="font-size">9pt</xsl:attribute>
  <xsl:attribute name="font-weight">normal</xsl:attribute>
</xsl:attribute-set>

<!-- Frame them -->
<xsl:attribute-set name="pn.admonition.properties">
  <xsl:attribute name="margin-left">1cm</xsl:attribute>
  <xsl:attribute name="margin-right">1cm</xsl:attribute>
  <xsl:attribute name="padding">1em</xsl:attribute>
  <xsl:attribute name="border-color">#000000</xsl:attribute>
  <xsl:attribute name="border-style">solid</xsl:attribute>
  <xsl:attribute name="background-color">#E0E0E0</xsl:attribute>
  <xsl:attribute name="space-before.minimum">0.8em</xsl:attribute>
  <xsl:attribute name="space-before.optimum">1.0em</xsl:attribute>
  <xsl:attribute name="space-before.maximum">1.2em</xsl:attribute>
</xsl:attribute-set>

<!-- overwrite the template to get the whole box frames, not only the text -->
<xsl:template match="note|important|warning|caution|tip">
  <xsl:choose>
    <xsl:when test="$admon.graphics != 0">
	  <fo:block xsl:use-attribute-sets="pn.admonition.properties">
        <xsl:call-template name="graphical.admonition"/>
      </fo:block>
    </xsl:when>
    <xsl:otherwise>
      <xsl:call-template name="nongraphical.admonition"/>
    </xsl:otherwise>
  </xsl:choose>
</xsl:template>


</xsl:stylesheet>
