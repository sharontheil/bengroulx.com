<?php if(!defined('KIRBY')) exit ?>

title: Projects

pages:
  template: project

files: false

fields:
    pagetitle-1:
        label: Page Content
        type: headline
    title:
        label: Title & Headline
        type:  text
    textmain:
        label: Text - Main Projects
        type:  textarea
    textmore:
        label: Text - Additonal Projects
        type:  textarea
    textnotshipped:
        label: Text - Non-Shipped Projects
        type:  textarea
    textarchived:
        label: Text - Archived Projects
        type:  textarea
    pagetitle-2:
        label: META Information
        type: headline
    metatitle:
        label: META Title
        type:  text
        icon:  header
    metadesc:
        label: META Description
        type:  textarea
        icon:  file-code-o
