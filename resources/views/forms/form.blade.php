<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="{{ asset('resources/sheet.css') }}">

<style type="text/css">
    .ritz .waffle a {
        color: inherit;
    }
    html{
        overflow: auto;
    }

    .ritz .waffle .s120 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s83 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
    }

    .ritz .waffle .s97 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #7f7f7f;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s64 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s75 {
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: docs-Barlow, Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s90 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s134 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s27 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s43 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s140 {
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        text-decoration: underline;
        text-decoration-skip-ink: none;
        -webkit-text-decoration-skip: none;
        color: #000000;
        font-family: Arial;
        font-size: 20pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s128 {
        border-bottom: 1px SOLID #000000;
        background-color: #efefef;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s60 {
        border-left: none;
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s79 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s101 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s23 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #000000;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 14pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s102 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s157 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s61 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s170 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s66 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID transparent;
        background-color: #b7b7b7;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s137 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s63 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s69 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s91 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s132 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s141 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #000000;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 18pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s136 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s92 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s37 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s130 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: right;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s168 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s174 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s107 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s17 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s117 {
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s155 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s7 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s154 {
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s25 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s108 {
        background-color: #ffffff;
        text-align: center;
        color: #a5a5a5;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s20 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 18pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s21 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 18pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s53 {
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s139 {
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        text-decoration: underline;
        text-decoration-skip-ink: none;
        -webkit-text-decoration-skip: none;
        color: #000000;
        font-family: Arial;
        font-size: 20pt;
        vertical-align: bottom;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s2 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s127 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s78 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s18 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s51 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s52 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s70 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s54 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s58 {
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s156 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #666666;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s98 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: docs-Barlow, Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s72 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s76 {
        border-left: none;
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s81 {
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s49 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s161 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s103 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s32 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s171 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s71 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s115 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s151 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s85 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s28 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s50 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s6 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s160 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s42 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s45 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s165 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s87 {
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s9 {
        background-color: #ffffff;
        text-align: right;
        color: #7f7f7f;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s105 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s162 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s10 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s84 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s148 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s24 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID transparent;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #666666;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s153 {
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s118 {
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 6pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s47 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #cccccc;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s131 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s109 {
        background-color: #ffffff;
        text-align: center;
        color: #a5a5a5;
        font-family: Arial;
        font-size: 6pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s152 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s88 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s112 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s56 {
        border-left: none;
        background-color: #ffffff;
    }

    .ritz .waffle .s16 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s123 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #d9d9d9;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s40 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s57 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s133 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s29 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s159 {
        border-bottom: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        color: #666666;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s129 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #a5a5a5;
        font-family: Arial;
        font-size: 6pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s74 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s119 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s3 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s126 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s169 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s33 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s48 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #d9d9d9;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s55 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s145 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        font-style: italic;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s67 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #000000;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 14pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s5 {
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s26 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s31 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #b7b7b7;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s39 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s163 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s164 {
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s135 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s167 {
        border-bottom: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #595959;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s15 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s34 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s95 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s1 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 25pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s41 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s59 {
        border-left: none;
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s142 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #000000;
        text-align: center;
        font-style: italic;
        color: #ffffff;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s100 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s44 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s13 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s36 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s116 {
        border-left: none;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s82 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s80 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s4 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s147 {
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s19 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #000000;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 20pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s121 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: docs-Barlow, Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s104 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s38 {
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s122 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #7f7f7f;
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s176 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s14 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: bottom;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s146 {
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s11 {
        background-color: #ffffff;
        text-align: center;
        color: #7f7f7f;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s46 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #b7b7b7;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s166 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s35 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s12 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s114 {
        border-left: none;
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s22 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 18pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s30 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s77 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s124 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #d9d9d9;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s138 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s150 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s89 {
        border-left: none;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s62 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s111 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s125 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s96 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
    }

    .ritz .waffle .s149 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s0 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 7pt;
        vertical-align: top;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s93 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s73 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s143 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-style: italic;
        color: #ffffff;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: top;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s68 {
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s86 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
    }

    .ritz .waffle .s65 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 12pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s144 {
        border-bottom: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #666666;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s172 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s175 {
        border-left: none;
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s113 {
        border-left: none;
        border-right: none;
        border-bottom: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s99 {
        border-right: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s94 {
        border-bottom: 1px SOLID #000000;
        border-right: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s158 {
        border-left: none;
        border-bottom: 1px SOLID #000000;
        background-color: #d9d9d9;
        text-align: left;
        font-weight: bold;
        color: #666666;
        font-family: Arial;
        font-size: 8pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s106 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s8 {
        border-right: 1px SOLID #000000;
        background-color: #ffffff;
        text-align: left;
        text-decoration: underline;
        text-decoration-skip-ink: none;
        -webkit-text-decoration-skip: none;
        color: #000000;
        font-family: Arial;
        font-size: 9pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s110 {
        border-left: none;
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: normal;
        overflow: hidden;
        word-wrap: break-word;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s177 {
        background-color: #ffffff;
        text-align: left;
        color: #ff0000;
        font-family: Arial;
        font-size: 11pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

    .ritz .waffle .s173 {
        border-bottom: 1px SOLID #000000;
        background-color: #efefef;
        text-align: left;
        color: #000000;
        font-family: Arial;
        font-size: 10pt;
        vertical-align: middle;
        white-space: nowrap;
        direction: ltr;
        padding: 0px 3px 0px 3px;
    }

</style>
</head>
<body style="max-width: 1100px; margin: 0 auto; padding: 20px 0px;border:1px solid black;">
    <!-- SVG icons used in the spreadsheet -->

<svg style="display:none;" width="16px" height="16px" viewBox="0 0 16 16" version="1.1"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <path id="checked-checkbox-id"
            d="M17,3 L4.75,3 C3.77875,3 3,3.7875 3,4.75 L3,17 C3,17.9625 3.77875,18.75 4.75,18.75 L17,18.75 C17.97125,18.75 18.75,17.9625 18.75,17 L18.75,4.75 C18.75,3.7875 17.97125,3 17,3 L17,3 Z M9.125,15.25 L4.75,10.875 L5.98375,9.64125 L9.125,12.77375 L15.76625,6.1325 L17,7.375 L9.125,15.25 L9.125,15.25 Z"
            transform="translate(-3.000000, -3.000000)"></path>
        <path id="unchecked-checkbox-id"
            d="M17,3.75 L17,16 L4.75,16 L4.75,3.75 L17,3.75 L17,3.75 Z M17,2 L4.75,2 C3.7875,2 3,2.7875 3,3.75 L3,16 C3,16.9625 3.7875,17.75 4.75,17.75 L17,17.75 C17.9625,17.75 18.75,16.9625 18.75,16 L18.75,3.75 C18.75,2.7875 17.9625,2 17,2 L17,2 Z"
            transform="translate(-3.000000, -2.000000)"></path>
    </defs>
</svg>
<div class="ritz grid-container" dir="ltr">
    <table class="waffle no-grid" cellspacing="0" cellpadding="0" style="width: 1100px;">
        <tbody>
            <tr style="height: 52px">
                <!-- <th id="631683479R0" style="height: 52px;">
                    <div class="row-header-wrapper" style="line-height: 52px">1</div>
                </th> -->
                <td class="s0" dir="ltr" colspan="40"><span style="font-size:9pt;">Republic of the
                        Philippines<br>Department of Health<br></span><span style="font-size:12pt;">Philippine Cancer
                        Center</span></td>
            </tr>
            <tr style="height: 52px">
                <!-- <th id="631683479R1" style="height: 52px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 52px">2</div>
                </th> -->
                <td class="s1" colspan="40">HOSPITAL-BASED CANCER REGISTRY (HBCR)</td>
            </tr>
            <tr style="height: 15px">
                <!-- <th id="631683479R2" style="height: 15px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 15px">3</div>
                </th> -->
                <td class="s2" colspan="6">General Instruction:</td>
                <td class="s3" colspan="25">a. Place a check (✔) in the appropriate tick box.<br></td>
                <td class="s4" colspan="9"></td>
            </tr>
            <tr style="height: 14px">
                <!-- <th id="631683479R3" style="height: 14px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 14px">4</div>
                </th> -->
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s3" colspan="25">b. Optional variables will be labeled with the word <span
                        style="font-size:9pt;font-family:Arial;font-weight:bold;font-style:italic;">“Optional.”</span>
                </td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s4"></td>
            </tr>
            <tr style="height: 7px">
                <!-- <th id="631683479R4" style="height: 7px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 7px">5</div>
                </th> -->
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s2"></td>
                <td class="s6"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s3"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s5"></td>
                <td class="s4"></td>
            </tr>
            <tr style="height: 15px">
                <!-- <th id="631683479R5" style="height: 15px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 15px">6</div>
                </th> -->
                <td class="s7"></td>
                <td class="s8" colspan="39">I. Cancer Cases to be encoded (Analytic Case)</td>
            </tr>
            <tr style="height: 16px">
                <!-- <th id="631683479R6" style="height: 16px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 16px">7</div>
                </th> -->
                <td class="s7"></td>
                <td class="s9" dir="ltr">1</td>
                <td class="s7" colspan="37">Diagnosed and treated at this health facility (Note: if the patient is
                    considered to be not treatable, he or she is still included in this category)</td>
                <td class="s10"></td>
            </tr>
            <tr style="height: 16px">
                <!-- <th id="631683479R7" style="height: 16px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 16px">8</div>
                </th> -->
                <td class="s7"></td>
                <td class="s9" dir="ltr">2</td>
                <td class="s7" colspan="37">Diagnosed elsewhere but received all or part of the first course of therapy
                    at this health facility</td>
                <td class="s10"></td>
            </tr>
            <tr style="height: 6px">
                <!-- <th id="631683479R8" style="height: 6px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 6px">9</div>
                </th> -->
                <td class="s7"></td>
                <td class="s11"></td>
                <td class="s11"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s12"></td>
                <td class="s13"></td>
            </tr>
            <tr style="height: 15px">
                <!-- <th id="631683479R9" style="height: 15px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 15px">10</div>
                </th> -->
                <td class="s7"></td>
                <td class="s8" colspan="39">II. Cases may be collected by the facility but not encoded in HBCR Forms
                    (Non-Analytic Case)</td>
            </tr>
            <tr style="height: 16px">
                <!-- <th id="631683479R10" style="height: 16px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 16px">11</div>
                </th> -->
                <td class="s7"></td>
                <td class="s9">1</td>
                <td class="s14" dir="ltr" colspan="37">Patients are seen only in consultation to confirm a diagnosis or
                    to confirm treatment plan,</td>
                <td class="s10"></td>
            </tr>
            <tr style="height: 16px">
                <!-- <th id="631683479R11" style="height: 16px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 16px">12</div>
                </th> -->
                <td class="s7"></td>
                <td class="s9">2</td>
                <td class="s10" colspan="38">Patients who receive transient care to avoid interrupting a course of
                    therapy initiated elsewhere<span
                        style="font-size:9pt;font-family:Arial;font-style:italic;color:#000000;"> (e.g. while on
                        vacation or because of equipment failure at the original hospital)</span></td>
            </tr>
            <tr style="height: 16px">
                <!-- <th id="631683479R12" style="height: 16px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 16px">13</div>
                </th> -->
                <td class="s7"></td>
                <td class="s9">3</td>
                <td class="s7" colspan="37">Patients with a past history of cancer who currently have no evidence of the
                    disease</td>
                <td class="s10"></td>
            </tr>
            <tr style="height: 7px">
                <!-- <th id="631683479R13" style="height: 7px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 7px">14</div>
                </th> -->
                <td class="s15"></td>
                <td class="s15"></td>
                <td class="s15"></td>
                <td class="s15"></td>
                <td class="s15"></td>
                <td class="s15"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s16"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s17"></td>
                <td class="s18"></td>
            </tr>
            <tr style="height: 44px">
                <!-- <th id="631683479R14" style="height: 44px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 44px">15</div>
                </th> -->
                <td class="s19" colspan="40">FORM 1: BASELINE PATIENT INFORMATION </td>
            </tr>
            <tr style="height: 5px">
                <!-- <th id="631683479R15" style="height: 5px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 5px">16</div>
                </th> -->
                <td class="s20"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s21"></td>
                <td class="s22"></td>
            </tr>
            <tr style="height: 29px">
                <!-- <th id="631683479R16" style="height: 29px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 29px">17</div>
                </th> -->
                <td class="s23" colspan="40">H O S P I T A L I N F O R M A T I O N</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R17" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">18</div>
                </th> -->
                <td class="s24">1</td>
                <td class="s25" colspan="10">Health Facility Name</td>
                <td class="s26" dir="ltr" colspan="29">CORAZON LOCSIN MONTELIBANO MEMORIAL REGIONAL HOSPITLA</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R18" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">19</div>
                </th> -->
                <td class="s24">2</td>
                <td class="s25" colspan="10">Health Facility Address</td>
                <td class="s27" dir="ltr" colspan="7">NIR</td>
                <td class="s27" dir="ltr" colspan="7">NEGROS OCCIDENTAL </td>
                <td class="s27" dir="ltr" colspan="8">BACOLOD CITY</td>
                <td class="s27" dir="ltr" colspan="7">BRGY. 18</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R19" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">20</div>
                </th> -->
                <td class="s24">3</td>
                <td class="s25" colspan="10">Health Facility Contact No.</td>
                <td class="s26" dir="ltr" colspan="10">703 1350</td>
                <td class="s24" dir="ltr">4</td>
                <td class="s25" dir="ltr" colspan="9">Health Facility Email Adress</td>
                <td class="s26" dir="ltr" colspan="9">CLMMRHONCOLOGYUNIT@GMAIL.COM</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R20" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">21</div>
                </th> -->
                <td class="s24" dir="ltr">5</td>
                <td class="s28" dir="ltr" colspan="10">PhilHealth Accreditation No.</td>
                <td class="s29" dir="ltr" colspan="29"></td>
            </tr>
            <tr style="height: 29px">
                <!-- <th id="631683479R21" style="height: 29px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 29px">22</div>
                </th> -->
                <td class="s23" colspan="40">D E M O G R A P H I C P R O F I L E O F P A T I E N T</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R22" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">23</div>
                </th> -->
                <td class="s24" dir="ltr">6</td>
                <td class="s25" colspan="10">Date of Patient&#39;s First Encounter</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[0] }}</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[1] }}</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[2] }}</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[3] }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[4] }}</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[5] }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[6] }}</td>
                <td class="s26" dir="ltr">{{ $data->patient_first_encounter[7] }}</td>
                <td class="s24" dir="ltr">7</td>
                <td class="s25" colspan="10">Patient’s Health Facility ID No.</td>
                <td class="s26" dir="ltr" colspan="8">PCC-{{ $data->patient_health_facility_id }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R23" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">24</div>
                </th> -->
                <td class="s24" dir="ltr">8</td>
                <td class="s25" dir="ltr" colspan="10">PhilHealth Identification No. <span
                        style="font-size:10pt;">(PIN)</span></td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[0] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[1] }}</td>
                <td class="s30">-</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[2] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[3] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[4] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[5] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[6] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[7] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[8] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[9] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[10] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[11] }}</td>
                <td class="s30">-</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_id[12] }}</td>
                <td class="s31" colspan="14"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R24" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">25</div>
                </th> -->
                <td class="s24" dir="ltr">9</td>
                <td class="s25" colspan="10">Name of Patient</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data['name']['firstname'] }}</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data['name']['middlename'] }}</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data['name']['lastname'] }}</td>
                <td class="s26" dir="ltr" colspan="2">{{ $data['name']['suffix'] }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R25" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">26</div>
                </th> -->
                <td class="s24" dir="ltr">10</td>
                <td class="s25" colspan="10">If Married, Maiden Name</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->married_maiden_name ? 'unchecked' : 'checked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s34" colspan="2">N/A</td>
                <td class="s27" dir="ltr" colspan="11">{{ $data->married_maiden_name && $data->married_maiden_name }}</td>
                <td class="s24" dir="ltr">11</td>
                <td class="s25" colspan="4">Sex at Birth</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->sex == 'male' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Male</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->sex == 'female' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Female</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R26" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">27</div>
                </th> -->
                <td class="s24" dir="ltr">12</td>
                <td class="s25" colspan="10">Date of Birth</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[0] }}</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[1] }}</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[2] }}</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[3] }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[4] }}</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[5] }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[6] }}</td>
                <td class="s26" dir="ltr">{{ $data->date_of_birth[7] }}</td>
                <td class="s24" dir="ltr">13</td>
                <td class="s25" colspan="5">Nationality</td>
                <td class="s37" dir="ltr" colspan="13">{{ ucwords($data->nationality) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R27" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">28</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">14</td>
                <td class="s25" colspan="10" rowspan="2">Civil Status</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->civil_status == 'Single' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="5">Single </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->civil_status == 'Married' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="9">Common-law/Live-in</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->civil_status == 'Common-law/Live-in' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s42" colspan="9">Widowed</td>
            </tr>
            <tr style="height: 21px">
                    <!-- <th id="631683479R28" style="height: 21px;" class="row-headers-background">
                        <div class="row-header-wrapper" style="line-height: 21px">29</div>
                    </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->civil_status == 'Married' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Married </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->civil_status == 'Divorced' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="9">Divorced/Separated/Annulled</td>
                <td class="s44"></td>
                <td class="s44" dir="ltr"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s44"></td>
                <td class="s45"></td>
            </tr>
            <tr style="height: 28px">
                <!-- <th id="631683479R29" style="height: 28px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 28px">30</div>
                </th> -->
                <td class="s24" dir="ltr">15</td>
                <td class="s25" colspan="10">Permanent Address</td>
                <td class="s27" dir="ltr" colspan="7" style="text-transform:capitalize;">{{ $data['permanent']['province'] }}</td>
                <td class="s27" dir="ltr" colspan="7" style="text-transform:capitalize;">{{ $data['permanent']['city'] }}</td>
                <td class="s27" dir="ltr" colspan="8" style="text-transform:capitalize;">{{ $data['permanent']['barangay'] }}</td>
                <td class="s27" dir="ltr" colspan="7" style="text-transform:capitalize;">{{ $data['permanent']['sitio'] }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R30" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">31</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">16</td>
                <td class="s25" colspan="10" rowspan="2">Current Address</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->same_as_address == "on" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s34" colspan="27">Same as Permanent Address <span
                        style="font-size:9pt;font-family:Arial;font-style:italic;">(If not, please complete the fields
                        below)</span></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R31" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">32</div>
                </th> -->
                <td class="s46" dir="ltr" colspan="7">
                    {{ $data['current']['province'] ? ucwords($data['current']['province']) : 'N/A' }}
                </td>
                <td class="s46" dir="ltr" colspan="7">
                    {{ $data['current']['city'] ? ucwords($data['current']['city']) : 'N/A' }}
                </td>
                <td class="s47" dir="ltr" colspan="8">
                    {{ $data['current']['barangay'] ? ucwords($data['current']['barangay']) : 'N/A' }}
                </td>
                <td class="s48" dir="ltr" colspan="7">
                    {{ $data['current']['sitio'] ? ucwords($data['current']['sitio']) : 'N/A' }}
                </td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R32" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">33</div>
                </th> -->
                <td class="s24" dir="ltr">17</td>
                <td class="s25" colspan="10">Mobile Contact No.</td>
                <td class="s26" dir="ltr" colspan="11">{{ $data->mobile_number }}</td>
                <td class="s24" dir="ltr">18</td>
                <td class="s25" colspan="5">Email Address</td>
                <td class="s29" dir="ltr" colspan="12">{{ $data->email_address }}</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R33" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">34</div>
                </th> -->
                <td class="s24" dir="ltr">19</td>
                <td class="s28" colspan="10">Nearest Relative / Legal Guardian Permanent Address</td>
                <td class="s27" dir="ltr" colspan="7">{{ $data['relative']['province'] ? ucwords($data['relative']['province']) : 'N/A' }}</td>
                <td class="s27" dir="ltr" colspan="7">{{ $data['relative']['city'] ? ucwords($data['relative']['city']) : 'N/A' }}</td>
                <td class="s27" dir="ltr" colspan="8">{{ $data['relative']['barangay'] ? ucwords($data['relative']['barangay']) : 'N/A' }}</td>
                <td class="s27" dir="ltr" colspan="7">{{ $data['relative']['sitio'] ? ucwords($data['relative']['sitio']) : 'N/A' }}</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R34" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">35</div>
                </th> -->
                <td class="s24" dir="ltr">20</td>
                <td class="s28" colspan="10">Nearest Relative / Legal Guardian Mobile Contact No.</td>
                <td class="s29" dir="ltr" colspan="9">{{ $data->relative_phone_number }}</td>
                <td class="s24" dir="ltr">21</td>
                <td class="s49" dir="ltr" colspan="9">Nearest Relative / Legal Guardian Email Address<span
                        style="font-weight:normal;"> </span><span
                        style="font-weight:normal;font-style:italic;">(optional)</span></td>
                <td class="s50" dir="ltr" colspan="10">{{ $data->relative_email }}</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R35" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">36</div>
                </th> -->
                <td class="s24" dir="ltr">22</td>
                <td class="s28" colspan="10">Highest Level of Educational Attainment</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->highest_education == "Elementary" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="4">Elementary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Secondary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->highest_education == "Secondary" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Tertiary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->highest_education == "Tertiary" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s43" colspan="4">Adult School </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->highest_education == "Adult School" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">5</td>
                <td class="s34" colspan="4">No Education</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R36" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">37</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="6">23</td>
                <td class="s25" colspan="10" rowspan="6">Occupation</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Managers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="9">Managers</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Craft and Related Trades Workers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s40" colspan="11">Craft and Related Trades Workers </td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R37" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">38</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Professionals" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="9">Professionals</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Plant and Machine Operators and Assemblers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:314px;left:-1px">Plant and Machine Operators and
                        Assemblers </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R38" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">39</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Technicians and Associate Professionals" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:284px;left:-1px">Technicians and Associate Professionals
                    </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s56"></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Elementary Occupations" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s41" colspan="8">Elementary Occupations</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R39" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">40</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Clerical Support Workers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s41" colspan="9">Clerical Support Workers</td>
                <td class="s40"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Armed Forces Occupations" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s40" colspan="8">Armed Forces Occupations</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R40" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">41</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Service and Sales Workers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" colspan="11">Service and Sales Workers</td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Unemployed/Retired" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s40" colspan="8">Unemployed/Retired</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R41" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">42</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Skilled Agricultural, Forestry and Fishery Workers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:336px;left:-1px">Skilled Agricultural, Forestry and
                        Fishery Workers</div>
                </td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s60"></td>
                <td class="s61"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data->occupation == "Craft and Related Trades Workers" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">12</td>
                <td class="s43" colspan="8">N/A</td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R42" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">43</div>
                </th> -->
                <td class="s24" dir="ltr">24</td>
                <td class="s25" colspan="10">Number of Years in Occupation</td>
                <td class="s65" dir="ltr" colspan="4">{{ $data->number_of_years_in_occupation }}</td>
                <td class="s66" colspan="25"></td>
            </tr>
            <tr style="height: 29px">
                <!-- <th id="631683479R43" style="height: 29px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 29px">44</div>
                </th> -->
                <td class="s67" colspan="40">R I S K F A C T O R P R O F I L E O F P A T I E N T</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R44" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">45</div>
                </th> -->
                <td class="s24" dir="ltr">25</td>
                <td class="s25" colspan="10">Tobacco use</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['tobacco_use'] == "Current Smoker" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="5">Current Smoker</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['tobacco_use'] == "Previous Smoker" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Previous Smoker</td>
                <td class="s43"></td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['tobacco_use'] == "Non-smoker" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="5">Non-smoker</td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s69"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R45" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">46</div>
                </th> -->
                <td class="s24" dir="ltr">26</td>
                <td class="s25" colspan="10">Second-Hand Smoke Exposure</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['second_hand_smoke'] == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['second_hand_smoke'] == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="2">No</td>
                <td class="s70"></td>
                <td class="s71">29a</td>
                <td class="s71"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s73"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R46" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">47</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">27</td>
                <td class="s25" colspan="10" rowspan="2">Harmful use of Alcohol</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['alcohol_use'] == "With current harmful use of alcohol" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="12">With current harmful use of alcohol</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['alcohol_use'] == "No history of harmful use of alcohol" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s42" colspan="13">No history of harmful use of alcohol</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R47" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">48</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['alcohol_use'] == 'With previous harmful use of alcohol' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="12">With previous harmful use of alcohol</td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s68"></td>
                <td class="s69"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R48" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">49</div>
                </th> -->
                <td class="s24" dir="ltr">28</td>
                <td class="s25" colspan="10">Physical Activity</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['physical_activity'] == 'Usually Inactive' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="5">Usually Inactive</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['physical_activity'] == 'Moderately Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Moderately Active </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['physical_activity'] == 'Very Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Very Active</div>
                </td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R49" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">50</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="4">29</td>
                <td class="s25" colspan="10" rowspan="4">Healthy Diet</td>
                <td class="s75 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Fat-meat</div>
                </td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s77"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['fatmeat'] == 'high' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['fatmeat'] == 'moderate' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['fatmeat'] == 'low' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Low</td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s34"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R50" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">51</div>
                </th> -->
                <td class="s75 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Vegetables</div>
                </td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['vegetables'] == 'high' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['vegetables'] == 'moderate' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['vegetables'] == 'low' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Low</td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s34"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R51" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">52</div>
                </th> -->
                <td class="s75 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Sodium/Salt</div>
                </td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['sodium_salt'] == 'high' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['sodium_salt'] == 'moderate' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['healtydiet']['sodium_salt'] == 'low' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Low</td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s34"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R52" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">53</div>
                </th> -->
                <td class="s75 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Sugar</div>
                </td>
                <td class="s77"></td>
                <td class="s77"></td>
                <td class="s78"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Low</td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s34"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R53" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">54</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="5">30</td>
                <td class="s25" colspan="10" rowspan="5">Occupational Exposure</td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
                <td class="s80" colspan="25">If <span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                        style="font-size:11pt;font-family:Arial;color:#000000;">, specify: </span><span
                        style="font-size:11pt;font-family:Arial;font-style:italic;color:#000000;">(can be
                        multiple)</span></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R54" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">55</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['occupational_exposure'] == 'yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('cement', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="5">Cement dust</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('metal', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Metal</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('smoke', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Smoke</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R55" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">56</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['occupational_exposure'] == 'no' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('cotton', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="5">Cotton</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('paper', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Paper</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($data['riskfactors']->occupation_specify_others) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s41" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R56" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">57</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('chemfumes', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="5">Chemical Fumes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('radiation', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s41" colspan="4">Radiation</td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s81" dir="ltr" colspan="10">{{ ucwords($data['riskfactors']->occupation_specify_others) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R57" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">58</div>
                </th> -->
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('grains', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="4">Grains</td>
                <td class="s35"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('silica', $data['riskfactors']['occupation_specify']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">8</td>
                <td class="s35" colspan="5">Silica</td>
                <td class="s43"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R58" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">59</div>
                </th> -->
                <td class="s24" dir="ltr">31</td>
                <td class="s25" colspan="10">Outdoor Air Pollution Exposure</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['air_pollution'] == 'yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['air_pollution'] == 'no' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="2">No</td>
                <td class="s70"></td>
                <td class="s71">29a</td>
                <td class="s71"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s72"></td>
                <td class="s73"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R59" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">60</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="30">32</td>
                <td class="s28" colspan="10" rowspan="30">Family History of Cancer<br><span
                        style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;">(Up to 3rd degree
                        of Consaguinity)</span></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s82" colspan="2">37a</td>
                <td class="s52"></td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:310px;left:-1px">If <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                            style="font-size:11pt;font-family:Arial;color:#000000;">, what cancer site/s? </span><span
                            style="font-size:11pt;font-family:Arial;font-style:italic;color:#000000;">(can be
                            multiple)</span></div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R60" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">61</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Adrenal', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Adrenal</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Multiple Myeloma', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">30</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Multiple Myeloma</div>
                </td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R61" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">62</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Anus', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Anus</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Nasopharynx', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">31</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Nasopharynx</div>
                </td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td></td>
                <td></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R62" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">63</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Biliary Tract', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Biliary Tract</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Non-Hodgkin Lymphoma', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">32</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Non-Hodgkin Lymphoma</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R63" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">64</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Acute Lymphocytic Leukemia', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Acute Lymphocytic Leukemia</div>
                </td>
                <td class="s88"></td>
                <td class="s88"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Oral Cavity', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">33</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Oral Cavity</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R64" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">65</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Acute Myelogenous Leukemia', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Acute Myelogenous Leukemia</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Oropharynx', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">34</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Oropharynx</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R65" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">66</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Chronic Lymphocytic Leukemia', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:231px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Chronic Lymphocytic Leukemia</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Ovary', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">35</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Ovary</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R66" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">67</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Chronic Myelogenous Leukemia', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:231px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Chronic Myelogenous Leukemia</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Pancreas', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">36</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Pancreas</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R67" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">68</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Myelodysplastic Syndromes', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Myelodysplastiv Syndromes</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">37</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Paranasal Sinus</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R68" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">69</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Blood - Plasma Cell Disorders', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:206px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Plasma Cell Disorders</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Peritoneal', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">38</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Peritoneal</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R69" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">70</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Bone', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Bone</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Prostate', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">39</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Prostate </div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R70" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">71</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Brain - Central Nervous System', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Brain - <span
                            style="font-size:10pt;font-family:Arial;color:#000000;">Central Nervous System</span></div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Rectum', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">40</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Rectum</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R71" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">72</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Breast', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">12</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Breast</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Renal Pelvis/Ureters', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">41</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Renal Pelvis/Ureters</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R72" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">73</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Cervix', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Cervix</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Cervix', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">42</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Salivary Glands</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R73" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">74</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Colon', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">14</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Colon</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Skin', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">43</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Skin</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R74" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">75</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Esophagus', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">15</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Esophagus</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Small Bowel', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">44</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Small Bowel</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R75" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">76</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Eyes and Orbit', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">16</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Eyes and Orbit</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Soft Tissue Sarcoma', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">45</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Soft Tissue Sarcoma</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R76" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">77</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['family_history'] == "yes" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="3">Yes</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Gallbladder', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">17</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Gallbladder</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Spinal Cord', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">46</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Spinal Cord</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R77" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">78</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['family_history'] == "no" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s40" colspan="3">No</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Gastroesophageal Junction', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">18</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Gastroesophageal Junction</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Stomach', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">47</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stomach</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s90"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R78" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">79</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['family_history'] == "unknown" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s40" colspan="3">Unknown</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hodgkin Lymphoma', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">19</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hodgkin Lymphoma</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Testis', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">48</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Testis</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R79" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">80</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']['family_history'] == "no_genetic" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s91" colspan="6" rowspan="3">No known genetic disposition to Cancer </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hypopharynx', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">20</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Hypopharynx</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Thymus', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">49</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Thymus</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R80" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">81</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Kaposi Sarcoma', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">21</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Kaposi Sarcoma</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Thyroid', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">50</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Thyroid</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R81" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">82</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Kidney', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">22</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Kidney</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Unknown Primary (Occult Primary)', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">51</td>
                <td class="s87 softmerge">
                    <div class="softmerge-inner" style="width:200px;left:-1px">Unknown Primary (Occult Primary)</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R82" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">83</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Larynx', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">23</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Larynx</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Urinary Bladder', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">52</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Urinary Bladder</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R83" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">84</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Leukemia', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">24</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Leukemia</div>
                </td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Uterus', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">53</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Uterus</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R84" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">85</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Lip/Oral Cavity', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">25</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Lip/Oral Cavity</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Vagina', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">54</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Vagina</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R85" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">86</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Liver', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">26</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Liver</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Vulva', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">55</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Vulva</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R86" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">87</div>
                </th> -->
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Lung', $data['riskfactors']['cancer_sites']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">27</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Lung</div>
                </td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($data['riskfactors']->cancer_sites_other_value) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">56</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Others, specify:</div>
                </td>
                <td class="s54" dir="ltr"></td>
                <td class="s54" dir="ltr"></td>
                <td class="s54" dir="ltr"></td>
                <td class="s55" dir="ltr"></td>
                <td class="s55" dir="ltr"></td>
                <td class="s41" dir="ltr"></td>
                <td class="s42" dir="ltr"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R87" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">88</div>
                </th> -->
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s92"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">28</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Melanoma of Skin</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"></td>
                <td class="s94" dir="ltr" colspan="9" rowspan="2">{{ ucwords($data['riskfactors']->cancer_sites_other_value) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R88" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">89</div>
                </th> -->
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s95"></td>
                <td class="s95"></td>
                <td class="s95"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s96"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">29</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Mesothelioma</div>
                </td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s77"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"></td>
                <td class="s63"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R89" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">90</div>
                </th> -->
                <td class="s97" colspan="40">M e d i c a l H i s t o r y</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R90" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">91</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="9">33</td>
                <td class="s98" colspan="7" rowspan="9">Has the patient ever been diagnosed or tested positive for any
                    of the following infections?</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hepatitis B (Hep B)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s99 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hepatitis B (Hep B)</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s102"></td>
                <td class="s102"></td>
                <td class="s102"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Merkel Cell Polyomavirus (MCPV)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Merkel Cell Polyomavirus (MCPV)</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s104"></td>
                <td class="s104"></td>
                <td class="s104"></td>
                <td class="s104"></td>
                <td class="s104"></td>
                <td class="s105"></td>
                <td class="s105"></td>
                <td class="s102"></td>
                <td class="s102"></td>
                <td class="s106"></td>
                <td class="s107"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R91" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">92</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hepatitis C (Hep C)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s99 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hepatitis C (Hep C)</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Helicobacter Pylori (H Pylori)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Helicobacter Pylori (H Pylori)</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R92" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">93</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hepatitis D (Hep D)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s99 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hepatitis D (Hep D)</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Chlamydia Trachomatis', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">12</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Chlamydia Trachomatis</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R93" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">94</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hepatitis E (Hep E)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s99 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hepatitis E (Hep E)</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Schistosoma Hematobium', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Schistosoma Hematobium</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R94" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">95</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Human Papillomavirus (HPV)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Human Papillomavirus (HPV)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Opisthorchis Viverrini', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">14</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Opisthorchis Viverrini</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R95" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">96</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Human Immunodeficiency Virus (HIV)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:258px;left:-1px">Human Immunodeficiency Virus (HIV)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s111"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Clonorchis Sinensis', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">15</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Clonorchis Sinensis</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R96" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">97</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Epstein–Barr Virus (EBV)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Epstein–Barr Virus (EBV)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('None', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">16</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R97" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">98</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Kaposi Sarcoma Herpesvirus (KSHV or HHV-8)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:336px;left:-1px">Kaposi Sarcoma Herpesvirus (KSHV or
                        HHV-8)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s112"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Unknown', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">17</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s108"></td>
                <td class="s109"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R98" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">99</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Human T-lymphotropic Virus Type 1 (HTLV-1)', $data['riskfactors']['infections']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">9</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:336px;left:-1px">Human T-lymphotropic Virus Type 1
                        (HTLV-1)</div>
                </td>
                <td class="s60"></td>
                <td class="s60"></td>
                <td class="s60"></td>
                <td class="s60"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s113"></td>
                <td class="s114"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($data['riskfactors']->infections_other_content) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">18</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s115" dir="ltr" colspan="10">{{ ucwords($data['riskfactors']->infections_other_content) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R99" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">100</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="4">34</td>
                <td class="s98" colspan="7" rowspan="4">Has the patient been diagnosed with any of the following
                    comorbidities?</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Cardiovascular disease', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" dir="ltr" colspan="7">Cardiovascular disease</td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Hypertension', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" dir="ltr" colspan="7">Hypertension</td>
                <td class="s41" dir="ltr"></td>
                <td class="s41" dir="ltr"></td>
                <td class="s38" dir="ltr"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Tuberculosis', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Tuberculosis</div>
                </td>
                <td class="s103" dir="ltr"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s116"></td>
                <td class="s117"></td>
                <td class="s118"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R100" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">101</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Chronic respiratory disease', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" dir="ltr" colspan="7">Chronic respiratory disease</td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Immunosuppression/Immunodeficiency', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s41" dir="ltr" colspan="10">Immunosuppression/Immunodeficiency</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('None', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s117"></td>
                <td class="s117"></td>
                <td class="s118"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R101" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">102</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Chronic kidney disease', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Chronic kidney disease</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s56"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Liver disease', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Liver disease</div>
                </td>
                <td class="s54"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Unknown', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s117"></td>
                <td class="s117"></td>
                <td class="s118"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R102" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">103</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Diabetes mellitus', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s58 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Diabetes mellitus</div>
                </td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s35"></td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Obesity', $data['riskfactors']['comorbidities']) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">8</td>
                <td class="s58 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Obesity</div>
                </td>
                <td class="s114"></td>
                <td class="s119"></td>
                <td class="s119"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s35"></td>
                <td class="s43"></td>
                <td class="s35"></td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->comorbidities_others == "yes" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">11</td>
                <td class="s58 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:101px;left:-1px">Others, Specify:</div>
                </td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s119"></td>
                <td class="s120" dir="ltr" colspan="4">{{ ucwords($data['riskfactors']->comorbidities_others_content) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R103" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">104</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="59">35</td>
                <td class="s121" colspan="7" rowspan="59">Cancer</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s42" colspan="27">If <span
                        style="font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                        style="font-family:Arial;color:#000000;">, specify the cancer site(s), year of diagnosis, and
                        status for each selected site. </span><span
                        style="font-family:Arial;font-style:italic;color:#000000;">(can be multiple)</span></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R104" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">105</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"></td>
                <td class="s39" dir="ltr"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s83"></td>
                <td class="s122" dir="ltr" colspan="4">Y e a r</td>
                <td class="s122" dir="ltr" colspan="10">S t a t u s</td>
                <td class="s52"></td>
            </tr>

            @php
                $cancerSites = [
                    "Adrenal","Anus","Biliary Tract","Blood - Acute Lymphocytic Leukemia",
                    "Blood - Acute Myelogenous Leukemia","Blood - Chronic Lymphocytic Leukemia",
                    "Blood - Chronic Myelogenous Leukemia","Blood - Myelodysplastic Syndromes",
                    "Blood - Plasma Cell Disorders","Bone","Brain (CNS)","Breast","Cervix",
                    "Colon","Esophagus","Eyes and Orbit","Gallbladder","Gastroesophageal Junction",
                    "Hodgkin Lymphoma","Hypopharynx","Kaposi Sarcoma","Kidney"
                ];
                $diagnosed = array_keys($data['riskfactors']['patient_diagnosed_w_cancer'] ?? []);
                $var = $data['riskfactors']['patient_diagnosed_w_cancer'];
            @endphp
            @foreach($cancerSites as $key => $value)
                <tr style="height: 24px">
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s52"></td>
                    <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array($value, $diagnosed) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s39" dir="ltr">{{ $key + 1 }}</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width: 270px">{{ $value }}</div>
                    </td>
                    <td class="s55"></td>
                    <td class="s55"></td>
                    <td class="s41"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57" colspan="2"></td>
                    <td class="s83"></td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$value]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$value]['year'][0]) ? $var[$value]['year'][0] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$value]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$value]['year'][1]) ? $var[$value]['year'][1] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$value]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$value]['year'][2]) ? $var[$value]['year'][2] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$value]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$value]['year'][3]) ? $var[$value]['year'][3] : 'Y' }}
                    </td>
                    <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ isset($var[$value]['status']) && $var[$value]['status'] === 'Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s33" dir="ltr">1</td>
                    <td class="s35" dir="ltr" colspan="2">Active</td>
                    <td class="s63"></td>
                    <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ isset($var[$value]['status']) && $var[$value]['status'] !== 'Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s33" dir="ltr">2</td>
                    <td class="s36" dir="ltr" colspan="3">Remission</td>
                    <td class="s52"></td>
                </tr>
            @endforeach

            @php
                $otherSites = [
                    "Larynx","Leukemia",
                    "Lip/Oral Cavity","Liver","Lung","Melanoma of Skin","Mesothelioma","Multiple Myeloma",
                    "Nasopharynx","Non-Hodgkin Lymphoma","Oral Cavity","Oropharynx","Ovary","Pancreas",
                    "Paranasal Sinus","Peritoneal","Prostate","Rectum","Renal Pelvis/Ureters","Salivary Glands",
                    "Skin","Small Bowel","Soft Tissue Sarcoma","Spinal Cord","Stomach","Testis","Thymus","Thyroid",
                    "Unknown Primary (Occult Primary)","Urinary Bladder","Uterus","Vagina","Vulva", "others"
                ];

            @endphp
            @foreach ($otherSites as $index => $site)
                <tr style="height: 23px">
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td class="s52"></td>
                    <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array($site, $diagnosed) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s39" dir="ltr">{{ $index + 23 }}</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:276px;left:-1px">{{ $site }}</div>
                    </td>
                    <td class="s103"></td>
                    <td class="s110"></td>
                    <td class="s110"></td>
                    <td class="s51"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57" colspan="2"></td>
                    <td class="s83"></td>

                    <td class="s123" dir="ltr" style="{{ isset($var[$site]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$site]['year'][0]) ? $var[$site]['year'][0] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$site]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$site]['year'][1]) ? $var[$site]['year'][1] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$site]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$site]['year'][2]) ? $var[$site]['year'][2] : 'Y' }}
                    </td>
                    <td class="s123" dir="ltr" style="{{ isset($var[$site]['year'][0]) ? 'color: black' : 'Y' }}">
                        {{ isset($var[$site]['year'][3]) ? $var[$site]['year'][3] : 'Y' }}
                    </td>

                    <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ isset($var[$site]['status']) && $var[$site]['status'] === 'Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s33" dir="ltr">1</td>
                    <td class="s35" dir="ltr" colspan="2">Active</td>
                    <td class="s63"></td>
                    <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ isset($var[$site]['status']) && $var[$site]['status'] !== 'Active' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s33" dir="ltr">2</td>
                    <td class="s36" dir="ltr" colspan="3">Remission</td>
                    <td class="s52"></td>
                </tr>
            @endforeach

            <tr style="height: 23px">
                <!-- <th id="631683479R161" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">162</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s128" colspan="9"></td>
                <td class="s129"></td>
                <td class="s129"></td>
                <td class="s129"></td>
                <td class="s129"></td>
                <td class="s130" colspan="3"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s131"></td>
                <td class="s37"></td>
            </tr>
            <tr style="height: 64px">
                <!-- <th id="631683479R162" style="height: 64px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 64px">163</div>
                </th> -->
                <td class="s24" dir="ltr">36</td>
                <td class="s28" dir="ltr" colspan="7">Other Significant <br>Medical History:</td>
                <td class="s29" dir="ltr" colspan="32">{{ ucwords($data['riskfactors']->other_significant_medical_history) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R163" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">164</div>
                </th> -->
                <td class="s97" colspan="40">S e x u a l H i s t o r y</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R164" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">165</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">37</td>
                <td class="s25" dir="ltr" colspan="10" rowspan="2">Sexual Orientation <span
                        style="font-weight:normal;font-style:italic;">(optional)</span></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation === 'Heterosexual' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="5">Heterosexual</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation === 'Bisexual' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="4">Bisexual</td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation === 'Pansexual' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Pansexual</div>
                </td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R165" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">166</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation === 'Homosexual' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Homosexual</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation === 'Asexual' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="4">Asexual</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->sexual_orientation_other != null ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s132" dir="ltr" colspan="9">
                    {{ $data['riskfactors']->sexual_orientation_other != null ? ucwords($data['riskfactors']->sexual_orientation_other) : '' }}
                </td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R166" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">167</div>
                </th> -->
                <td class="s24" dir="ltr">38</td>
                <td class="s28" colspan="10">Number of Sexual Partner/s</td>
                <td class="s26" dir="ltr" colspan="4">{{ $data['riskfactors']->sexual_partners }}</td>
                <td class="s24" dir="ltr">39</td>
                <td class="s28" colspan="10">Age of First Sexual Intercourse</td>
                <td class="s26" dir="ltr" colspan="4">{{ $data['riskfactors']->age_first_intercourse }}</td>
                <td class="s66" colspan="10"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R167" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">168</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="3">40</td>
                <td class="s28" colspan="5" rowspan="3"><span
                        style="font-family:Arial;font-weight:bold;color:#000000;">Use of</span><span
                        style="font-family:Arial;font-weight:bold;color:#000000;"> Contraceptives</span><span
                        style="font-family:Arial;font-weight:bold;color:#000000;">?</span></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->contraceptives_use == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="2">Yes</td>
                <td class="s52"></td>
                <td class="s80" colspan="29">If <span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                        style="font-size:11pt;font-family:Arial;">, specify type:</span><span
                        style="font-size:10pt;font-family:Arial;"> </span><span
                        style="font-size:10pt;font-family:Arial;font-style:italic;">(can be multiple)</span></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R168" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">169</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->contraceptives_use == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s40" colspan="2">No</td>
                <td class="s52"></td>
                @php
                    $contraceptives_types = $data['riskfactors']['contraceptive_types'];
                    $contraceptives_use = $data['riskfactors']->contraceptives_use;
                @endphp

                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $contraceptives_use == "Yes" && in_array('Hormonal', $contraceptives_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="7">Hormonal Contraceptives</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $contraceptives_use == "Yes" && in_array('Permanent', $contraceptives_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s40" colspan="8">Permanent Methods</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $contraceptives_use == "Yes" && in_array('Behavioral', $contraceptives_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s42" colspan="8">Behavioral Methods</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R169" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">170</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="7">Barrier Methods</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $contraceptives_use == "Yes" && in_array('Barrier', $contraceptives_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="8">Intrauterine Devices (IUDs)</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->contraceptive_types_other ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s36" colspan="8">Others:  {{ ucwords($data['riskfactors']->contraceptive_types_other) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R170" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">171</div>
                </th> -->
                <td class="s97" colspan="40">C a n c e r S c r e e n i n g a n d V a c c i n a t i o n H i s t o r y o f
                    P a t i e n t</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R171" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">172</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="7">41</td>
                <td class="s28" colspan="10" rowspan="7">Types of Cancer Screening Received</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Clinical Breast Examination', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Clinical Breast Examination</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('FIT', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s99 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:284px;left:-1px">Stool Fecal Immunochemical Test (FIT)
                    </div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s80"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R172" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">173</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Breast Ultrasound', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Breast Ultrasound</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Colonoscopy', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Colonoscopy</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R173" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">174</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Mammography', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Mammography</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Low-dose chest CT Scan', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Low-dose chest CT Scan</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R174" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">175</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('VIA', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:284px;left:-1px">Visual Inspection with Acetic Acid (VIA)
                    </div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('None', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:206px;left:-1px">No cancer screening received</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s80"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R175" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">176</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Cytology/Pap Smear', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Cytology/Pap Smear</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Unknown', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">12</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R176" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">177</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('HPV Testing', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">HPV Testing</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->cancer_screening_other ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s133" colspan="9" rowspan="2">{{ ucwords($data['riskfactors']->cancer_screening_other) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R177" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">178</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ in_array('Clinical Breast Examination', $data['riskfactors']->cancer_screening) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">7</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Fecal Occult Blood Test (FOBT)</div>
                </td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s119"></td>
                <td class="s119"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s32" dir="ltr"></td>
                <td class="s33" dir="ltr"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R178" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">179</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="5">42</td>
                <td class="s25" colspan="10" rowspan="5">Types of Vaccines Received</td>
                <td class="s28" colspan="8" rowspan="2">Human Papillomavirus Vaccine (HPV)</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hpv == "Fully Vaccinated" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="6">Yes, fully vaccinated </td>
                <td class="s134"></td>
                <td class="s51"></td>
                <td class="s134"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hpv == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="3">No </td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s135"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R179" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">180</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hpv == "Partially Vaccinated" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="7">Yes, partially vaccinated</td>
                <td class="s63"></td>
                <td class="s136"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hpv == "Unknown" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="3">Unknown</td>
                <td class="s137"></td>
                <td class="s136"></td>
                <td class="s136"></td>
                <td class="s136"></td>
                <td class="s138"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R180" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">181</div>
                </th> -->
                <td class="s28" colspan="8" rowspan="2">Hepatitis B Vaccine</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hepb == "Yes, fully vaccinated" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="6">Yes, fully vaccinated </td>
                <td class="s134"></td>
                <td class="s51"></td>
                <td class="s134"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hepb == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="3">No </td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s134"></td>
                <td class="s135"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R181" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">182</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hepb == "Yes, partially vaccinated" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="7">Yes, partially vaccinated</td>
                <td class="s63"></td>
                <td class="s136"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $data['riskfactors']->vaccine_hepb == "Unknown" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="3">Unknown</td>
                <td class="s137"></td>
                <td class="s136"></td>
                <td class="s136"></td>
                <td class="s136"></td>
                <td class="s138"></td>
            </tr>
            <tr style="height: 38px">
                <!-- <th id="631683479R182" style="height: 38px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 38px">183</div>
                </th> -->
                <td class="s28" colspan="8">Other vaccines, specify:</td>
                <td class="s27" colspan="21">{{ ucwords($data['riskfactors']->other_vaccines) }}</td>
            </tr>
            <tr style="height: 103px">
                <!-- <th id="631683479R183" style="height: 103px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 103px">184</div>
                </th> -->
                <td class="s139" colspan="40">Proceed to accomplish the &quot;Profile of Cancer Diagnosis of Patient
                    form&quot;</td>
            </tr>
            <tr style="height: 103px">
                <!-- <th id="631683479R184" style="height: 103px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 103px">185</div>
                </th> -->
                <td class="s140" colspan="40">for each Primary Cancer Site ➜</td>
            </tr>
            <tr style="height: 11px">
                <!-- <th id="631683479R185" style="height: 11px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 11px">186</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
            </tr>
            <tr style="height: 41px">
                <!-- <th id="631683479R186" style="height: 41px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 41px">187</div>
                </th> -->
                <td class="s141" colspan="40">PROFILE OF CANCER DIAGNOSIS OF PATIENT FORM</td>
            </tr>
            <tr style="height: 19px">
                <!-- <th id="631683479R187" style="height: 19px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 19px">188</div>
                </th> -->
                <td class="s142" colspan="40">( P a r t o f H B C R F O R M 1 )</td>
            </tr>
            <tr style="height: 7px">
                <!-- <th id="631683479R188" style="height: 7px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 7px">189</div>
                </th> -->
                <td class="s143" colspan="40"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R189" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">190</div>
                </th> -->
                <td class="s144" dir="ltr">43</td>
                <td class="s25" colspan="14">Are there more than 1 active Primary Cancer Site/s?</td>

                @php
                    $cancerdiagnoses = $data['cancerdiagnoses'];
                    $IsYes = isset($cancerdiagnoses['multiple_sites']) && $cancerdiagnoses['multiple_sites'] == 'yes' ? true : false;
                @endphp

                <td class="s43" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses['multiple_sites'] == "yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s43" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses['multiple_sites'] == "no" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s34" colspan="2">No</td>
                <td class="s145" colspan="17" rowspan="2">Note: If <span
                        style="font-size:10pt;font-family:Arial;font-weight:bold;font-style:italic;color:#000000;">Yes</span><span
                        style="font-size:10pt;font-family:Arial;font-style:italic;color:#000000;">, record each primary
                        cancer site individually with this form.</span></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R190" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">191</div>
                </th> -->
                <td class="s144" dir="ltr">44</td>
                <td class="s25" colspan="14">Primary Cancer Site Number </td>
                <td class="s65" dir="ltr" colspan="8">{{ $cancerdiagnoses->primary_site_number }}</td>
            </tr>
            <tr style="height: 29px">
                <!-- <th id="631683479R191" style="height: 29px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 29px">192</div>
                </th> -->
                <td class="s23" colspan="40">P R I M A R Y C A N C E R S I T E</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R192" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">193</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="20">45</td>
                <td class="s25" colspan="6" rowspan="20">Site</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Adrenal", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Adrenal</div>
                </td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Kaposi Sarcoma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">21</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Kaposi Sarcoma</div>
                </td>
                <td class="s100"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s149"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Renal Pelvis/Ureters", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">41</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Renal Pelvis/Ureters</div>
                </td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R193" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">194</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Anus", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Anus</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Kidney", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">22</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Kidney</div>
                </td>
                <td class="s110"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Salivary Glands", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">42</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Salivary Glands</div>
                </td>
                <td class="s86"></td>
                <td class="s86"></td>
                <td class="s86"></td>
                <td class="s56"></td>
                <td class="s56"></td>
                <td></td>
                <td></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R194" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">195</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Biliary Tract", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Biliary Tract</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s85"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s150"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Larynx", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">23</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Larynx</div>
                </td>
                <td class="s85"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Skin", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">43</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Skin</div>
                </td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R195" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">196</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Acute Lymphocytic Leukemia", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Acute Lymphocytic Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s101"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Leukemia", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">24</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Leukemia</div>
                </td>
                <td class="s84"></td>
                <td class="s149"></td>
                <td class="s152"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Small Bowel", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">44</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Small Bowel</div>
                </td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s152"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R196" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">197</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Acute Myelogenous Leukemia", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Acute Myelogenous Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s101"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Lip/Oral Cavity", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">25</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Lip/Oral Cavity</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Soft Tissue Sarcoma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">45</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Soft Tissue Sarcoma</div>
                </td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s88"></td>
                <td class="s149"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R197" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">198</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Chronic Lymphocytic Leukemia", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:231px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Chronic Lymphocytic Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Liver", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">26</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Liver</div>
                </td>
                <td class="s85"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Spinal Cord", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">46</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Spinal Cord</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R198" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">199</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Chronic Myelogenous Leukemia", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:231px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Chronic Myelogenous Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Lung", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">27</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Lung</div>
                </td>
                <td class="s85"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Stomach", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">47</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stomach</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R199" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">200</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Myelodysplastiv Syndromes", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:232px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Myelodysplastiv Syndromes</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s101"></td>
                <td class="s89" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Melanoma of Skin", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">28</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Melanoma of Skin</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s149"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Testis", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">48</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Testis</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R200" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">201</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Blood - Plasma Cell Disorders", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s87 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:206px;left:-1px"><span
                            style="font-size:11pt;">Blood</span> - Plasma Cell Disorders</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Mesothelioma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">29</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Mesothelioma</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Thymus", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">49</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Thymus</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R201" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">202</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Bone", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Bone</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Multiple Myeloma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">30</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Multiple Myeloma</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s149"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Thyroid", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">50</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Thyroid</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R202" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">203</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Brain (CNS)", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Brain (CNS)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s85"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Nasopharynx", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">31</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Nasopharynx</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Unknown Primary (Occult Primary)", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">51</td>
                <td class="s80" colspan="9">Unknown Primary (Occult Primary)</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R203" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">204</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Breast", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">12</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Breast</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Non-Hodgkin Lymphoma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">32</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Non-Hodgkin Lymphoma</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s88"></td>
                <td class="s149"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Urinary Bladder", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">52</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Urinary Bladder</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R204" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">205</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Cervix", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Cervix</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Oral Cavity", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">33</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Oral Cavity</div>
                </td>
                <td class="s84"></td>
                <td class="s149"></td>
                <td class="s152"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Uterus", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">53</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Uterus</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R205" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">206</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Colon", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">14</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Colon</div>
                </td>
                <td class="s125"></td>
                <td class="s125"></td>
                <td class="s39"></td>
                <td class="s57"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Oropharynx", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">34</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Oropharynx</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Vagina", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">54</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Vagina</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R206" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">207</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Esophagus", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">15</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Esophagus</div>
                </td>
                <td class="s126"></td>
                <td class="s126"></td>
                <td class="s127"></td>
                <td class="s85"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Ovary", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">35</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Ovary</div>
                </td>
                <td class="s85"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Vulva", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">55</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Vulva</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s151"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R207" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">208</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Eyes and Orbit", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">16</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Eyes and Orbit</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s85"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Pancreas", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">36</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Pancreas</div>
                </td>
                <td class="s84"></td>
                <td class="s149"></td>
                <td class="s152"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->cancer_site_other) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">56</td>
                <td class="s41" dir="ltr" colspan="5">Others, specify:</td>
                <td class="s40" dir="ltr"></td>
                <td class="s40" dir="ltr"></td>
                <td class="s40" dir="ltr"></td>
                <td class="s80" dir="ltr"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R208" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">209</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Gallbladder", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">17</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Gallbladder</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s85"></td>
                <td class="s146"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Paranasal Sinus", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">37</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Paranasal Sinus</div>
                </td>
                <td class="s84"></td>
                <td class="s88"></td>
                <td class="s148"></td>
                <td class="s149"></td>
                <td class="s149"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s146"></td>
                <td class="s38" dir="ltr"></td>
                <td></td>
                <td class="s153" colspan="9" rowspan="2">{{ ucwords($cancerdiagnoses->cancer_site_other) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R209" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">210</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Gastroesophageal Junction", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">18</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Gastroesophageal Junction</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s148"></td>
                <td class="s88"></td>
                <td class="s152"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Peritoneal", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">38</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Peritoneal</div>
                </td>
                <td class="s84"></td>
                <td class="s149"></td>
                <td class="s152"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s146"></td>
                <td class="s102"></td>
                <td class="s154"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R210" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">211</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Hodgkin Lymphoma", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">19</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hodgkin Lymphoma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s152"></td>
                <td class="s149"></td>
                <td class="s146"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Prostate", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">39</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Prostate </div>
                </td>
                <td class="s84"></td>
                <td class="s149"></td>
                <td class="s152"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s147"></td>
                <td class="s146"></td>
                <td class="s146"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R211" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">212</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Hypopharynx", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">20</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Hypopharynx</div>
                </td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s62" dir="ltr"></td>
                <td class="s155" dir="ltr"></td>
                <td class="s35" dir="ltr"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s43"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $IsYes && in_array("Rectum", $cancerdiagnoses['cancer_sites']) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">40</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Rectum</div>
                </td>
                <td class="s60"></td>
                <td class="s61"></td>
                <td class="s156" dir="ltr"></td>
                <td class="s157"></td>
                <td class="s157"></td>
                <td class="s157"></td>
                <td class="s157"></td>
                <td class="s157"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R212" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">213</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="2">46</td>
                <td class="s25" colspan="6" rowspan="2">Laterality</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->laterality == 'Left' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Left</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->laterality == 'Bilateral' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Bilateral</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->laterality == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s86"></td>
                <td class="s101"></td>
                <td class="s25" style="border-left: 2px solid black;" dir="ltr" rowspan="2">47</td>
                <td class="s25" colspan="6" rowspan="2">ICD-10</td>
                <td class="s27" dir="ltr" colspan="10" rowspan="2">{{ $cancerdiagnoses->icd_10 }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R213" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">214</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->laterality == 'Right' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Right</div>
                </td>
                <td class="s119"></td>
                <td class="s119"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->laterality == 'Not Applicable' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">5</td>
                <td class="s43" dir="ltr" colspan="4">Not Applicable</td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s43"></td>
                <td class="s34"></td>
            </tr>
            <tr style="height: 49px">
                <!-- <th id="631683479R214" style="height: 49px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 49px">215</div>
                </th> -->
                <td class="s159" dir="ltr">48</td>
                <td class="s28" colspan="6">Histologic<span
                        style="font-size:8pt;font-family:Arial;font-weight:bold;color:#000000;"> </span><span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">Diagnosis</span></td>
                <td class="s29" dir="ltr" colspan="33">{{ ucwords($cancerdiagnoses->histologic_diagnosis) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R215" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">216</div>
                </th> -->
                <td class="s97" colspan="40">C l i n i c a l S t a g e</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R216" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">217</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="2">49</td>
                <td class="s25" colspan="10" rowspan="2">Group Clinical Stage <span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Stage 0' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage 0</div>
                </td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Stage II' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage II</div>
                </td>
                <td class="s54"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Stage IV' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage IV</div>
                </td>
                <td class="s54"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R217" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">218</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Stage I' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage I</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Stage III' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage III</div>
                </td>
                <td class="s59"></td>
                <td class="s61"></td>
                <td class="s61"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->clinical_stage) && $cancerdiagnoses->clinical_stage == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s59"></td>
                <td class="s61"></td>
                <td class="s61"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R218" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">219</div>
                </th> -->
                <td class="s144" dir="ltr">50</td>
                <td class="s28" colspan="10">T (Tumor)<span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                        (Optional)</span></td>
                <td class="s160" colspan="9">{{ $cancerdiagnoses->t_stage }}</td>
                <td class="s144" dir="ltr">52</td>
                <td class="s28" colspan="10">M (Metastasis)<span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                        (Optional)</span></td>
                <td class="s160" colspan="9">{{ $cancerdiagnoses->m_stage }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R219" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">220</div>
                </th> -->
                <td class="s144" dir="ltr">51</td>
                <td class="s28" colspan="10">N (Nodes)<span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                        (Optional)</span></td>
                <td class="s160" colspan="9">{{ $cancerdiagnoses->n_stage }}</td>
                <td class="s144" dir="ltr">53</td>
                <td class="s28" colspan="10">S (Staging) <span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                </td>
                <td class="s161" colspan="9">{{ $cancerdiagnoses->s_stage }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R220" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">221</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="11">54</td>
                <td class="s28" colspan="10" rowspan="11">Other Staging Used <span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('FIGO Staging System (International Federation of Gynecology and Obstetrics)', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="27">FIGO Staging System (International Federation of Gynecology and Obstetrics)
                </td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R221" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">222</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Ann Arbor Staging System', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="12">Ann Arbor Staging System</td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R222" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">223</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Breslow Thickness and Clark Level (for Skin Cancer)', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s40" colspan="21">Breslow Thickness and Clark Level (for Skin Cancer)</td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R223" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">224</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Durie-Salmon Staging System', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s40" colspan="13">Durie-Salmon Staging System</td>
                <td class="s57"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R224" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">225</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Biomarker/Hormone Receptor Status', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" colspan="19">Biomarker/Hormone Receptor Status</td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R225" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">226</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('The Child-Pugh Score (for Liver Cancer)', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s40" colspan="12">The Child-Pugh Score (for Liver Cancer)</td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R226" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">227</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Enneking Classification', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s41" colspan="16">Enneking Classification</td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R227" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">228</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Musculoskeletal Tumor Society (MSTS) classification', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:362px;left:-1px">Musculoskeletal Tumor Society (MSTS)
                        classification</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s54"></td>
                <td class="s85"></td>
                <td class="s55"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R228" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">229</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Nottingham Grading System', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Nottingham Grading System</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R229" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">230</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($cancerdiagnoses->other_staging) && in_array('Not Applicable', $cancerdiagnoses->other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">10</td>
                <td class="s35" colspan="12">Not Applicable</td>
                <td class="s35"></td>
                <td class="s70"></td>
                <td class="s35"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R230" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">231</div>
                </th> -->
                <td class="s25" dir="ltr" colspan="5">Other Remarks</td>
                <td class="s37" colspan="24">{{ ucwords($cancerdiagnoses->other_remarks) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R231" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">232</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="3">55</td>
                <td class="s28" colspan="10" rowspan="3">Current Status of the Cancer</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->cancer_status == "Newly diagnosed" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Newly diagnosed</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->cancer_status == "Old case, incomplete treatment, now progressive" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:333px;left:-1px">Old case, incomplete treatment, now
                        progressive</div>
                </td>
                <td class="s100"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R232" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">233</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->cancer_status == "Old case, not treated" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Old case, not treated</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->cancer_status == "Old case, unknown treatment" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Old case, unknown treatment</div>
                </td>
                <td class="s86"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R233" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">234</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $cancerdiagnoses->cancer_status == "Old case, completed 1st treatment, now recurrent" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:362px;left:-1px">Old case, completed 1st treatment, now recurrent</div>
                </td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s77"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s78"></td>
            </tr>


            <tr style="height: 29px">
                <!-- <th id="631683479R234" style="height: 29px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 29px">235</div>
                </th> -->
                <td class="s23" colspan="40">T R E A T M E N T P L A N A T D I A G N O S I S</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R235" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">236</div>
                </th> -->
                @php
                    $treatment = $data['treatments'];
                    $Date = str_split(str_replace('-', '', $treatment->date_of_diagnosis));
                @endphp
                <td class="s144" dir="ltr">56</td>
                <td class="s28" colspan="10">Date of Diagnosis</td>
                <td class="s26" dir="ltr">{{ $Date[0] ?? '' }}</td>
                <td class="s26" dir="ltr">{{ $Date[1] ?? '' }}</td>
                <td class="s26" dir="ltr">{{ $Date[2] ?? '' }}</td>
                <td class="s26" dir="ltr">{{ $Date[3] ?? '' }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $Date[4] ?? '' }}</td>
                <td class="s26" dir="ltr">{{ $Date[5] ?? '' }}</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">{{ $Date[6] ?? '' }}</td>
                <td class="s26" dir="ltr">{{ $Date[7] ?? '' }}</td>
                <td class="s66" colspan="19"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R236" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">237</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="7">57</td>
                <td class="s28" colspan="10" rowspan="7">Multidisciplinary Cancer Team Approach Practiced?</td>
                <td class="s162"></td>
                <td class="s162"></td>
                <td class="s162"></td>
                <td class="s163"></td>
                <td class="s42" colspan="25">If <span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                        style="font-size:11pt;font-family:Arial;color:#000000;">, specify all disciplines involved in
                        the treatment approach?</span></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R237" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">238</div>
                </th> -->
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s79"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Surgery", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="7">Surgery</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Nuclear Medicine", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Nuclear Medicine</div>
                </td>
                <td class="s54"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R238" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">239</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Medical Oncology", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="7">Medical Oncology</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Pathology", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Pathology</div>
                </td>
                <td class="s54"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R239" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">240</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Pediatric Oncology", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="7">Pediatric Oncology</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Supportive and Palliative", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Supportive and Palliative</div>
                </td>
                <td class="s54"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s100"></td>
                <td class="s101"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R240" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">241</div>
                </th> -->
                <td class="s51"></td>
                <td></td>
                <td></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Hematology Oncology", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s41" colspan="7">Hematology Oncology</td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Complementary and Alternative", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Complementary and Alternative </div>
                </td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R241" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">242</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->team_approach == "Yes" && in_array("Radiation Oncology", $treatment->disciplines) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Radiation Oncology</div>
                </td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->discipline_other) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s41" dir="ltr" colspan="4">Others, specify: </td>
                <td class="s164" colspan="8">{{ ucwords($treatment->discipline_other) }}</td>
            </tr>

            <tr style="height: 21px">
                <!-- <th id="631683479R242" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">243</div>
                </th> -->
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Gynecologic Oncology</div>
                </td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s76"></td>
                <td class="s77"></td>
                <td class="s77"></td>
                <td class="s70"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s35"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s70"></td>
                <td class="s78"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R243" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">244</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="2">58</td>
                <td class="s28" colspan="10" rowspan="2">Surgery</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->surgery == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s102" colspan="23"><span style="font-size:11pt;font-family:Arial;font-weight:normal;">If
                    </span><span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                        style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the </span><span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;">goal</span><span
                        style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R244" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">245</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->surgery == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s34" colspan="2">No</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->surgery == "Yes" && in_array("Diagnostic", $treatment->surgery_goal) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Diagnostic</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->surgery == "Yes" && in_array("Curative", $treatment->surgery_goal) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->surgery == "Yes" && in_array("Palliative", $treatment->surgery_goal) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s35" colspan="4">Palliative</td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s70"></td>
                <td class="s78"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R245" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">246</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="4">59</td>
                <td class="s28" colspan="10" rowspan="4">Anti-cancer Drug</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s28" colspan="8">Purpose of Drug Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Neoadjuvant</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Neoadjuvant", $treatment->drug_purpose) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Adjuvant</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Adjuvant", $treatment->drug_purpose) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:61px;left:-1px">Palliative</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R246" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">247</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s28" colspan="8" rowspan="3">Drug Type/s <span
                        style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                        be multiple)</span></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Cytotoxic", $treatment->drug_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="4">Cytotoxic</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Targeted", $treatment->drug_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s41" colspan="6">Targeted</td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R247" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">248</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Hormonal", $treatment->drug_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="4">Hormonal</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td></td>
                <td class="s57"></td>
                <td class="s79"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R248" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">249</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->anticancer_drug == "Yes" && in_array("Immunologic", $treatment->drug_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s35" colspan="6">Immunologic</td>
                <td class="s165" colspan="9">{{ ucwords($treatment->drug_types_others) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R249" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">250</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="4">60</td>
                <td class="s28" dir="ltr" colspan="10" rowspan="4">First Line Anti-Cancer Drug</td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->first_drug_regimen) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R250" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">251</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->first_cycles) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R251" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">252</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_treatment_goal == "Curative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_treatment_goal == "Control" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_treatment_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Palliative</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R252" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">253</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s25" colspan="7">Time of Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_time == "Pre-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_time == "Post-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->first_line_drug == "Yes" && $treatment->first_time == "Both" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Both</td>
            </tr>

            <tr style="height: 24px">
                <!-- <th id="631683479R253" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">254</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="4">61</td>
                <td class="s28" dir="ltr" colspan="10" rowspan="4">Second Line Anti-Cancer Drug</td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->second_drug_regimen) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R254" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">255</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->second_cycles) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R255" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">256</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_treatment_goal == "Curative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_treatment_goal == "Control" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_treatment_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Palliative</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R256" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">257</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s25" colspan="7">Time of Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_time == "Pre-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_time == "Post-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->second_line_drug == "Yes" && $treatment->second_time == "Both" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Both</td>
            </tr>

            <tr style="height: 24px">
                <!-- <th id="631683479R253" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">254</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="4">61</td>
                <td class="s28" dir="ltr" colspan="10" rowspan="4">Second Line Anti-Cancer Drug</td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->third_drug_regimen) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R254" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">255</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->third_cycles) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R255" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">256</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_treatment_goal == "Curative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_treatment_goal == "Control" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_treatment_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Palliative</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R256" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">257</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s25" colspan="7">Time of Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_time == "Pre-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_time == "Post-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->third_line_drug == "Yes" && $treatment->third_time == "Both" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Both</td>
            </tr>


            <tr style="height: 24px">
                <!-- <th id="631683479R261" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">262</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="5">63</td>
                <td class="s28" dir="ltr" colspan="10" rowspan="5">Other Subsequent Anti-Cancer Drug</td>
                <td class="s40" colspan="2"></td>
                <td class="s80" colspan="2"></td>
                <td class="s166" colspan="7">If yes, indicate line</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->indicate_line) }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R262" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">263</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->other_subsequent_drug_regimen) }}</td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R263" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">264</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18">{{ ucwords($treatment->other_subsequent_cycles) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R264" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">265</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_treatment_goal == "Curative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_treatment_goal == "Control" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_treatment_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Palliative</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R265" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">266</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s25" colspan="7">Time of Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_time == "Pre-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_time == "Post-operative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_subsequent_line_drug == "Yes" && $treatment->other_subsequent_time == "Both" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Both</td>
            </tr>

            <tr style="height: 21px">
                <!-- <th id="631683479R266" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">267</div>
                </th> -->
                <td class="s167" dir="ltr" rowspan="10">64</td>
                <td class="s28" colspan="10" rowspan="10">Radiotherapy</td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s102" colspan="7"><span style="font-size:11pt;font-family:Arial;font-weight:normal;">If
                    </span><span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                        style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type</span><span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;">:</span></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R267" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">268</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("2D conventional", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("IORT", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s168"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R268" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">269</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("3DCRT", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("Heavy Particles", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Heavy Particles</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s168"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R269" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">270</div>
                </th> -->
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s168"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("Brachytherapy", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("Proton Therapy", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                </td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s111"></td>
                <td class="s111"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s168"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R270" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">271</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("Electron Therapy", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("Stereotactic Radiosurgery / Stereotactic Radiotherapy", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:370px;left:-1px">Stereotactic Radiosurgery / Stereotactic Radiotherapy</div>
                </td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s112"></td>
                <td class="s111"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R271" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">272</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->radiotherapy == "Yes" && in_array("IMRT/VMAT/Helical", $treatment->radiotherapy_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">5</td>
                <td class="s58 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:154px;left:-1px">IMRT/VMAT/Helical</div>
                </td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_types_others) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">10</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s169" colspan="11">{{ ucwords($treatment->radiotherapy_types_others) }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R272" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">273</div>
                </th> -->
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s168"></td>
                <td class="s41" colspan="23">Specify <span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                <td class="s93"></td>
                <td class="s168"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R273" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">274</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_sequence) && $treatment->radiotherapy_sequence == "Concurrent ChemoRT" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="7">Concurrent ChemoRT</td>
                <td class="s170"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_sequence) && $treatment->radiotherapy_sequence == "Sequential" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Sequential</td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R274" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">275</div>
                </th> -->
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
                <td class="s41" colspan="23">Specify <span
                        style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                <td class="s93"></td>
                <td class="s168"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R275" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">276</div>
                </th> -->
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_goal) && $treatment->radiotherapy_goal == "Definitive" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_goal) && $treatment->radiotherapy_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Palliative</div>
                </td>
                <td class="s113"></td>
                <td class="s74"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_goal) && $treatment->radiotherapy_goal == "Adjuvant" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Adjuvant</div>
                </td>
                <td class="s113"></td>
                <td class="s171"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->radiotherapy_goal) && $treatment->radiotherapy_goal == "Neoadjuvant" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Neoadjuvant</div>
                </td>
                <td class="s113"></td>
                <td class="s113"></td>
                <td class="s171"></td>
                <td class="s74"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s172"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R276" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">277</div>
                </th> -->
                <td class="s167" dir="ltr" rowspan="8">65</td>
                <td class="s28" colspan="10" rowspan="8">Theranostics</td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s168"></td>
                <td class="s102" colspan="23"><span style="font-size:11pt;font-family:Arial;font-weight:normal;">If
                    </span><span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                        style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R277" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">278</div>
                </th> -->
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && in_array("RAI", $treatment->theranostics_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R278" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">279</div>
                </th> -->
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && in_array("PRRT", $treatment->theranostics_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide Therapy
                        (PRRT)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R279" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">280</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && in_array("PRLT", $treatment->theranostics_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R280" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">281</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && in_array("SIRT", $treatment->theranostics_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:310px;left:-1px">Selective Internal Radiaton Therapy
                        (SIRT)</div>
                </td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s112"></td>
                <td class="s111"></td>
                <td class="s111"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s93"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R281" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">282</div>
                </th> -->
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s42"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->theranostics_types_others) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">5</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s173" colspan="13">{{ ucwords($treatment->theranostics_types_others) }}</td>
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s35"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R282" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">283</div>
                </th> -->
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s42"></td>
                <td class="s102" dir="ltr" colspan="23"><span style="font-weight:normal;">If </span>yes<span
                        style="font-weight:normal;">, specify the</span> Goal<span style="font-weight:normal;">:</span>
                </td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R283" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">284</div>
                </th> -->
                <td class="s43"></td>
                <td class="s35"></td>
                <td class="s43"></td>
                <td class="s36"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && $treatment->theranostics_goal == "Definitive" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s35"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->theranostics == "Yes" && $treatment->theranostics_goal == "Palliative" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="7">Palliative</td>
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s36"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R284" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">285</div>
                </th> -->
                <td class="s167" dir="ltr" rowspan="5">66</td>
                <td class="s28" colspan="10" rowspan="5">Other Cancer Directed Therapies</td>
                <td class="s102"></td>
                <td class="s102"></td>
                <td class="s102"></td>
                <td class="s174"></td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:492px;left:-1px"> If <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;">, specify other cancer-directed therapies in the
                            treatment plan:</span></div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R285" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">286</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Blood Transfusion", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Blood Transfusion</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Transarterial chemoembolization", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Transarterial chemoembolization </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s175"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R286" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">287</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "No" ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Cryoablation", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Cryoablation </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s93"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Transplant", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Transplant</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s176"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R287" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">288</div>
                </th> -->
                <td class="s40"></td>
                <td class="s41"></td>
                <td class="s40"></td>
                <td class="s42"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Embolization", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Embolization </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ isset($treatment->other_therapies_other) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s41" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s177"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s42"></td>
            </tr>
            <tr style="height: 60px;">
                <!-- <th id="631683479R288" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">289</div>
                </th> -->
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s170"></td>
                <td class="s172"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#{{ $treatment->other_therapies == "Yes" && in_array("Radiofrequency ablation", $treatment->other_therapies_types) ? "checked" : "unchecked" }}-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Radiofrequency ablation</div>
                </td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s35"></td>
                <td class="s35"></td>
                <td class="s32" dir="ltr"></td>
                <td class="s33" dir="ltr"></td>
                <td class="s115" colspan="11">{{ ucwords($treatment->other_therapies_other) }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
