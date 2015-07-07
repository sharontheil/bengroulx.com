<?php if(!defined('KIRBY')) exit ?>

title: Blog Article

pages: false

files: true

fields:
    pagetitle-1:
        label: Page Content
        type: headline
    title:
        label: Title & Headline
        type:  text
    date:
        label: Date
        type: date
        default: today
        width: 1/2
    audioTime:
        label: Length of audio file
        type:  text
        width: 1/2
    text:
        label: Text
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
