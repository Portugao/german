<?xml version="1.0" encoding="iso-8859-1"?>

<!-- $Id$ -->


<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<!-- ====================================================================== -->
<!-- admonitions (caution, note, warning, important, tip)                   -->
<!-- ====================================================================== -->

<!-- Use graphics in admonitions?                                           -->
<!-- applies to: all                                                        -->
<!-- value: 0: use textual description for admonitions                      -->
<!-- value: 1: use graphical symbols for admonitions                        -->
<xsl:param name="admon.graphics">1</xsl:param>

<!-- Extension for admonition graphics                                      -->
<!-- If we used .png, we'd need to install jini (see Apache FOP FAQ)        -->
<xsl:param name="admon.graphics.extension">.gif</xsl:param>

<!-- Path to admonition graphics                                            -->
<xsl:param name="admon.graphics.path">images/</xsl:param>

<!-- Use text label in admonitions?                                         -->
<xsl:param name="admon.textlabel">1</xsl:param>


<!-- ====================================================================== -->
<!-- ToC/LoT/Index Generation                                               -->
<!-- ====================================================================== -->

<!-- Create an index                                                        -->
<!-- The document must contain an <index> tag pair where the index is       -->
<!-- supposed to appear in the document and <indexterm> tags that mark the  -->
<!-- terms that are supposed to appear in the index.                        -->
<!-- Value: 0: do not create an index                                       -->
<!-- Value: 1: create an index                                              -->
<xsl:param name="generate.index">1</xsl:param>

<!-- Number of levels displayed in a table of contents (<sect1> - <sect5>)  -->
<!-- This controls the table of contents depth, not where they are created. -->
<!-- Value: number                                                          -->
<xsl:param name="toc.section.depth">2</xsl:param>

<!-- Section level to display a table of contents for (<sect1> - <sect5>)   -->
<!-- This controls where to display a table of contents, not the depth.     -->
<!-- If 0, <sect1> has no table of contents, resulting in no table of       -->
<!-- contents (articles), or a table of contents for each chapter (books)   -->
<xsl:param name="generate.section.toc.level">3</xsl:param>

<!-- add reference purpose and reference entry to toc                       -->
<xsl:param name="annotate.toc">1</xsl:param>

<!-- indentation in table of contents                                       -->
<!-- value is in points, used by fop processors that don't support          -->
<!-- extensions and can´t calculate it                                      -->
<xsl:param name="toc.indent.width">20</xsl:param>


<!-- ====================================================================== -->
<!-- Automatic labelling                                                    -->
<!-- ====================================================================== -->

<!-- Enumerate appendices (<appendix>)                                      -->
<!-- Enumerates appendices as if it were a chapter                          -->
<!-- value: 0: appendices are unnumbered                                    -->
<!-- value: 1: appendices are numbered                                      -->
<xsl:param name="appendix.autolabel">1</xsl:param>

<!-- Enumerate chapters (<chapter>)                                         -->
<!-- value: 0: chapters are unnumbered                                      -->
<!-- value: 1: chapters are numbered (with arabic numbers)                  -->
<xsl:param name="chapter.autolabel">1</xsl:param>

<!-- Enumerate parts (<part>)                                               -->
<!-- value: 0: parts are unnumbered                                         -->
<!-- value: 1: parts are numbered (with roman numbers)                      -->
<xsl:param name="part.autolabel">1</xsl:param>

<!-- Enumerate the preface (<preface>)                                      -->
<!-- Enumerates the preface as if it were a chapter                         -->
<!-- value: 0: preface is unnumbered                                        -->
<!-- value: 1: preface is numbered                                          -->
<xsl:param name="preface.autolabel">0</xsl:param>

<!-- Enumerate sections                                                     -->
<!-- value: 0: sections are unnumbered                                      -->
<!-- value: 1: sections are automatically numbered (with arabic numbers)    -->
<xsl:param name="section.autolabel">1</xsl:param>

<!-- add part/chapter label to section label                                -->
<!-- value: 0: regular section labels                                       -->
<!-- value: 1: add part/chapter labels to section label                     -->
<xsl:param name="section.label.includes.component.label">1</xsl:param>

<!-- Reset the chapter numbers for each part                                -->
<!-- applies to: all output formats (book only)                             -->
<!-- value: 0: chapters are numbered sequentiall thoughout the book         -->
<!-- value: 1: chapters numbers start with 1 for each part                  -->
<xsl:param name="label.from.part">0</xsl:param>


<!-- ====================================================================== -->
<!-- QAndASet                                                               -->
<!-- ====================================================================== -->

<!-- Enumerate FAQ list entries                                             -->
<!-- Value: 0: FAQ list entries are unnumbered                              -->
<!-- Value: 1: FAQ list entries are numbered with arabic numbers            -->
<xsl:param name="qandadiv.autolabel">0</xsl:param>


<!-- ====================================================================== -->
<!-- XSLT Processing                                                        -->
<!-- ====================================================================== -->

<!-- Display navigation header on each page above the document body         -->
<!-- The navigation consists of the next, previous, up and home links       -->
<!-- applies to: html output only                                           -->
<!-- value: 0: show navigation header                                       -->
<!-- value: 1: hide navigation header                                       -->
<xsl:param name="suppress.header.navigation">0</xsl:param>

<!-- Display ruler between navigation header and body                       -->
<!-- applies to: html output only                                           -->
<!-- value: 0: show ruler between navigation header and body                -->
<!-- value: 1: hide ruler between navigation header and body                -->
<xsl:param name="header.rule">1</xsl:param>

<!-- Display navigation footer on each page below the document body         -->
<!-- The navigation consists of the next, previous, up and home links       -->
<!-- applies to: html output only                                           -->
<!-- value: 0: show navigation footer                                       -->
<!-- value: 1: hide navigation footer                                       -->
<xsl:param name="suppress.footer.navigation">0</xsl:param>

<!-- Display ruler between body and navigation footer                       -->
<!-- applies to: html output only                                           -->
<!-- value: 0: hide ruler between body and navigation footer                -->
<!-- value: 1: show ruler between body and navigation footer                -->
<xsl:param name="footer.rule">1</xsl:param>


<!-- ====================================================================== -->
<!-- Chunking                                                               -->
<!-- ====================================================================== -->

<!-- create new page for top-level units                                    -->
<!-- effectively creates an extra page for each table of contents           -->
<!-- value: 0: first section on same page as toc                            -->
<!-- value: 1: first section new page (toc on individual page)              -->
<xsl:param name="chunk.first.sections">1</xsl:param>

<!-- Section level to create individual pages (chunks) for                  -->
<!-- Note that for chapters always an individual page is created            -->
<!-- applies to: html chunked output only                                   -->
<!-- value: number: section level                                           -->
<xsl:param name="chunk.section.depth">3</xsl:param>

<!-- Use character entities instead of numeric entities where possible      -->
<!-- This character representation is used in files generated by chunking   --> 
<!-- stylesheet.                                                            -->
<!-- value: native:  suppress entity references for characters with direct  -->
<!--                 representation                                         -->
<!-- value: decimal:                                                        -->
<xsl:param name="saxon.character.representation">native</xsl:param>

<!-- show graphical page navigation                                         -->
<xsl:param name="navig.graphics">0</xsl:param>
<xsl:param name="navig.graphics.extension">.png</xsl:param>
<xsl:param name="navig.graphics.path">images/</xsl:param>

<!-- show doc titles for next and prev link                                 -->
<xsl:param name="navig.showtitles" select="1"/>

<!-- Indent generated html                                                  -->
<!-- Not supported by all XSLT processors.                                  -->
<xsl:param name="chunker.output.indent">yes</xsl:param>

<!-- Use element id as HTML filename                                        -->
<xsl:param name="use.id.as.filename">1</xsl:param>


<!-- ====================================================================== -->
<!-- Miscellaneous                                                          -->
<!-- ====================================================================== -->

<!-- where to place titles for certain elements                             -->
<!-- do not quote element names and parameters                              -->
<!-- applies to: all                                                        -->
<!-- value: "elementname" before                                            -->
<!-- value: "elementname" after                                             -->
<xsl:param name="formal.title.placement">
figure after
example before
equation after
table after
procedure after
</xsl:param>

<!-- separator displayes between subsequent menu choices                    -->
<!-- this refers to <guimenu> and <guimenuitem> or <guisubmenu> tag         -->
<!-- applies to: html, fo                                                   -->
<!-- value: html string                                                     -->
<xsl:param name="menuchoice.menu.separator">-&gt;</xsl:param>
<xsl:param name="menuchoice.separator">-&gt;</xsl:param>

<!-- render segmented list as html table                                    -->
<xsl:param name="segmentedlist.as.table">0</xsl:param>

<!-- render variable list as html table                                     -->
<xsl:param name="variablelist.as.table">0</xsl:param>

<!-- format variable list as blocks (fop)                                   -->
<xsl:param name="variablelist.as.blocks">0</xsl:param>

<!-- display link target url after link name                                -->
<!-- applies to: fo output only                                             -->
<!-- 0: display url name only, suppress url target                          -->
<!-- 1: display url name and url target in brackets                         -->
<xsl:param name="ulink.show">1</xsl:param>


<!-- ====================================================================== -->
<!-- Pagination and General Styles                                          -->
<!-- ====================================================================== -->

<!-- display headers on blank page                                          -->
<!-- applies to: html, fo                                                   -->
<!-- value: 0: hide headers on blank pages                                  -->
<!-- value: 1: show headers on blank pages                                  -->
<xsl:param name="headers.on.blank.pages">0</xsl:param>


<!-- ====================================================================== -->
<!-- Glossary                                                               -->
<!-- ====================================================================== -->

<!-- create glossary links for first terms only                             -->
<!-- first term is special markup for terms occuring the first time         -->
<!-- probably no effect when no firstterm tag is used? - or no link         -->
<!-- because no firstterm                                                   -->
<xsl:param name="firstterm.only.link">0</xsl:param>

<!-- glossterm auto link                                                    -->
<xsl:param name="glossterm.auto.link">1</xsl:param>




<!-- ====================================================================== -->
<!-- HTML                                                                   -->
<!-- ====================================================================== -->

<!-- Enable CSS decoration of elements                                      -->
<xsl:param name="css.decoration">1</xsl:param>

<!-- create link to description (textobjects) for mediaobjects              -->
<!-- value: 0: no link                                                      -->
<!-- value: 1: a link                                                       -->
<xsl:param name="html.longdesc">1</xsl:param>

<!-- draft watermark graphic                                                -->
<xsl:param name="draft.watermark.image">images/draft.png</xsl:param>

<!-- create empty paragraphs for formatting o create a more pleasing visual -->
<!-- appearance in many browsers.                                           -->
<!-- value: 0: no empty paragraphs                                          -->
<!-- value: 1: create empty paragraphs                                      -->
<xsl:param name="spacing.paras">1</xsl:param>

<!-- CSS stylesheet to format the generated HTML                            -->
<!-- Note: the stylesheet url is relative to the location of the html page. -->
<!-- To change the html formatting, you can create custom CSS stylesheets for-->
<!-- article and book and/or custom CSS stylesheets for individual documents.-->
<xsl:param name="html.stylesheet">style.css</xsl:param>

<!-- Generate valid HTML                                                    -->
<!-- Avoids creation of nested html paragraphs (<p>) from nested <para> tags-->
<!-- (in strict HTML, nested paragraphs are not allowed).                   -->
<xsl:param name="make.valid.html">1</xsl:param>

<!-- Clean up HTML                                                          -->
<!-- Try to create "better" HTML by transforming the result HTML. Does not  -->
<!-- work with all XSLT processors.                                         -->
<xsl:param name="html.cleanup">1</xsl:param>

<!-- inherit the keywords to meta data?                                     -->
<xsl:param name="inherit.keywords">1</xsl:param>

<!-- Generate META description?                                             -->
<xsl:param name="generate.meta.abstract">1</xsl:param>


<!-- ====================================================================== -->
<!-- Graphics                                                               -->
<!-- ====================================================================== -->

<!-- if no file extension given for graphics, use this                      -->
<xsl:param name="graphic.default.extension">.png</xsl:param>


<!-- ====================================================================== -->
<!-- Tables                                                                 -->
<!-- ====================================================================== -->

<!-- create css formatted tables                                            -->
<xsl:param name="table.borders.with.css">1</xsl:param>


<!-- ====================================================================== -->
<!-- Pagination and General Styles                                          -->
<!-- ====================================================================== -->

<!-- title indentation/left margin                                          -->
<xsl:param name="title.margin.left">0.0in</xsl:param>

<!-- Paper format                                                           -->
<!-- All DIN A, B and C sizes are understood. (A5, USletter)                -->
<xsl:param name="paper.type">A4</xsl:param>

<!-- Margins                                                                -->
<xsl:param name="page.margin.inner">1in</xsl:param>
<xsl:param name="page.margin.outer">1in</xsl:param>

<!-- Paper orientation                                                      -->
<!-- value: portrait: portrait paper orientation (short edge horizontal)    -->
<!-- value: landscape: landscape paper orientation (short edge vertical)    -->
<xsl:param name="page.orientation">portrait</xsl:param>

<!-- page sided layout                                                      -->
<!-- 0: single-sided-layout (page numbers are centered)                     -->
<!-- 1: double-sided layout (page numbers alternate at left and right)      -->
<xsl:param name="double.sided">0</xsl:param>

<!-- text alignment                                                         -->
<!-- left, right, justify                                                   -->
<xsl:param name="alignment">justify</xsl:param>

<!-- Number of columns in text body                                         -->
<!-- Value: number                                                          -->
<xsl:param name="column.count.body">1</xsl:param>

<!-- Number of columns on index pages                                       -->
<!-- Value: number                                                          -->
<xsl:param name="column.count.index">2</xsl:param>

<!-- hyphenation                                                            -->
<!-- a language attribute ("lang") must be defined for top level element    -->
<!-- the most common languages are supported (see c:\docbook\fop\hyph)      -->
<!-- applies to: fo                                                         -->
<!-- false: words are not hyphenated                                        -->
<!-- true: words are hyphenated                                             -->
<xsl:param name="hyphenate">true</xsl:param>


<!-- ====================================================================== -->
<!-- Font Families                                                          -->
<!-- ====================================================================== -->

<!-- default font for body text                                             -->
<xsl:param name="body.font.family">Times</xsl:param>

<!-- default font for titles c                                              -->
<xsl:param name="title.font.family">Helvetica</xsl:param>


<!-- ====================================================================== -->
<!-- Cross References                                                       -->
<!-- ====================================================================== -->

<!-- add page number to cross references                                    -->
<xsl:param name="insert.xref.page.number">yes</xsl:param>


<!-- ====================================================================== -->
<!-- Extensions                                                             -->
<!-- ====================================================================== -->

<!-- Use XSLT processor extensions                                          -->
<!-- Enables extensions that offer functionality beyond regular XML proessor-->
<!-- capabilities.-->
<xsl:param name="use.extensions">1</xsl:param>

<!-- Enable FOP extensions                                                  -->
<!-- Allows creation of PDF bookmarks to ease browsing of PDF documents.    -->
<xsl:param name="fop.extensions">1</xsl:param>

<!-- Use Tablecolumns extensions                                            -->
<!-- Improves HTML table display                                            -->
<xsl:param name="tablecolumns.extensions">1</xsl:param>

<!-- Use Graphicsize extensions                                             -->
<!-- Allows XSLT processor to retrieve the size from graphics. Does not work-->
<!-- with all XSLT processors.                                              -->
<xsl:param name="graphicsize.extensions">1</xsl:param>

<!-- Use Textinsert extensions                                              -->
<!-- Allows inserting text files directly into the XML source.              -->
<xsl:param name="textinsert.extensions">0</xsl:param>



<!-- ====================================================================== -->
<!-- Customized templates                                                   -->
<!-- ====================================================================== -->


<!-- add a custom header to every html page                                  -->
<!-- applies to: html output only                                            -->
<xsl:template name="user.header.navigation">
<div id="customheader">
<xsl:apply-templates select="/" mode="object.title.markup"/>
</div>
</xsl:template>

<!-- Include the date into the header                                        -->
<!-- see http://www.sagehill.net/docbookxsl/HtmlHead.html                    -->
<xsl:template name="user.head.content">  
  <meta name="date">  
    <xsl:attribute name="content">  
      <xsl:call-template name="datetime.format">  
        <xsl:with-param name="date" select="date:date-time()"/>  
        <xsl:with-param name="format" select="'d.b.Y'"/>
      </xsl:call-template>
    </xsl:attribute>
  </meta>
</xsl:template>

</xsl:stylesheet>
