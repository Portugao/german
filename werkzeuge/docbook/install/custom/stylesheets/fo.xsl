<?xml version="1.0" encoding="iso-8859-1"?>
<!-- $Id$ -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:fo="http://www.w3.org/1999/XSL/Format"
                version='1.0'>

<!--xsl:import href="../../programs/docbook-xsl-1.65.1/fo/profile-docbook.xsl" /-->

<xsl:import href="http://docbook.sourceforge.net/release/xsl/current/fo/docbook.xsl"/>
<xsl:import href="common.xsl" />
<xsl:import href="fo/admon.xsl" />
<xsl:import href="fo/titlepage.templates.xsl" />

<!-- page sided layout                                                       -->
<!-- 0: single-sided-layout (page numbers are centered)                      -->
<!-- 1: double-sided layout (page numbers alternate at left and right)       -->
<xsl:param name="double.sided">1</xsl:param>


<xsl:param name="generate.toc">
appendix  nop
article   toc,title
book      toc,title
chapter   nop
part      nop
preface   nop
qandadiv  nop
qandaset  nop
reference nop
sect1     nop
sect2     nop
sect3     nop
sect4     nop
sect5     nop
section   nop
set       nop
</xsl:param>

<!-- Größe der Grundschrift -->
<xsl:param name="body.font.master">9</xsl:param>


<!-- The default font family for body text -->
<xsl:param name="body.font.family">Verdana</xsl:param>

<!-- The font family for copyright, quotes, and other symbols -->
<xsl:param name="dingbat.font.family">Verdana</xsl:param>
<xsl:param name="title.font.family">Verdana</xsl:param>


<xsl:attribute-set name="section.title.level1.properties">
  <xsl:attribute name="font-size">
    <xsl:value-of select="$body.font.master * 1.5"/>
    <xsl:text>pt</xsl:text>
  </xsl:attribute>
</xsl:attribute-set>
<xsl:attribute-set name="section.title.level2.properties">
  <xsl:attribute name="font-size">
    <xsl:value-of select="$body.font.master * 1.3"/>
    <xsl:text>pt</xsl:text>
  </xsl:attribute>
</xsl:attribute-set>
<xsl:attribute-set name="section.title.level3.properties">
  <xsl:attribute name="font-size">
    <xsl:value-of select="$body.font.master * 1.1"/>
    <xsl:text>pt</xsl:text>
  </xsl:attribute>
</xsl:attribute-set>


<xsl:param name="sans.font.family">Verdana</xsl:param>


<xsl:param name="ulink.footnotes" select="1"/>
<xsl:param name="ulink.footnote.number.format" select="'1'"/>

</xsl:stylesheet>
