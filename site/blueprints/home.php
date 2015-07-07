<?php if(!defined('KIRBY')) exit ?>

title: Home

pages: false

fields:
    pagetitle-1:
        label: Page Content
        type: headline
    title:
        label: Title
        type:  text
    h1:
        label: Headline
        type:  text
    introduction:
        label: Introduction
        type:  textarea
        size:  large
    ethics:
        label: Ethics
        type:  textarea
        size:  large
    manifesto:
        label: Manifesto
        type:  textarea
        size:  large
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
