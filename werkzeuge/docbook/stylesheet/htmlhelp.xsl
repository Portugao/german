<?xml version="1.0" encoding="iso-8859-1"?>
<!-- $Id$ -->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:import href="http://docbook.sourceforge.net/release/xsl/current/htmlhelp/profile-htmlhelp.xsl" />
<xsl:import href="common.xsl" />
<xsl:param name="generate.toc">
appendix  nop
article   toc,title
book      toc,title,figure,table,example,equation
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
</xsl:stylesheet>
