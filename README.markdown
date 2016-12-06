Repository of the German Zikula Community

The master branch contains all the german translation for Zikula (extensions & core). Just check the folders.
You can find the translations for the respective extension/core translation in its dedicated sub-folder. 

## Important info
There is major refactoring going on. Please contact @MrMontesa in case you have any questions.

### Process/Workflow
__all__ extensions are moved to the ./legacy folder. The process to re-activate them is:
- move extension folder up to main folder again
- add a tag folder for the version you're going to translate
- add the translated (.po & .mo) files (__NOT__ the .pot file) into newly created tag folder including proper file structure (locale/de/LC_MESSAGES/)


## Recent Updates:
Module | Used Version
------- | -------
Profile | 2.0.1
PostCalendar | 8.0.3
Formicula | 3.1.2
News | 3.1.1
Dizkus | 4.0.0
