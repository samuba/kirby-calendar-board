<?php if(!defined('KIRBY')) exit ?>

title: day
pages: false
files: false
deletable: false
fields:
  title:
    label: Day
    type:  text
    readonly: true
  events:
    label: Job meetings
    type: structure
    fields:
      hour:
        label: Time
        type: time 
      topic:
        label: Topic
        type: text 
      associates:
        label: Associates
        type: text 
  
