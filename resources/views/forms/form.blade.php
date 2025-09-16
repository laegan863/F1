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
                <td class="s24" dir="ltr">7</td>
                <td class="s25" colspan="10">Patient’s Health Facility ID No.</td>
                <td class="s26" dir="ltr" colspan="8">PCC-{{ $data->philhealth_facilty_id_number }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R23" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">24</div>
                </th> -->
                <td class="s24" dir="ltr">8</td>
                <td class="s25" dir="ltr" colspan="10">PhilHealth Identification No. <span
                        style="font-size:10pt;">(PIN)</span></td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[0] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[1] }}</td>
                <td class="s30">-</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[2] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[3] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[4] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[5] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[6] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[7] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[8] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[9] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[10] }}</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[11] }}</td>
                <td class="s30">-</td>
                <td class="s26" dir="ltr">{{ $data->philhealth_number[12] }}</td>
                <td class="s31" colspan="14"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R24" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">25</div>
                </th> -->
                <td class="s24" dir="ltr">9</td>
                <td class="s25" colspan="10">Name of Patient</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data->firstname }}</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data->middlename }}</td>
                <td class="s27" dir="ltr" colspan="9">{{ $data->lastname }}</td>
                <td class="s26" dir="ltr" colspan="2">{{ $data->suffix }}</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R25" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">26</div>
                </th> -->
                <td class="s24" dir="ltr">10</td>
                <td class="s25" colspan="10">If Married, Maiden Name</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s34" colspan="2">N/A</td>
                <td class="s27" dir="ltr" colspan="11">DAMES</td>
                <td class="s24" dir="ltr">11</td>
                <td class="s25" colspan="4">Sex at Birth</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Male</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                <td class="s37" dir="ltr" colspan="13">{{ $data->nationality }}</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R27" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">28</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">14</td>
                <td class="s25" colspan="10" rowspan="2">Civil Status</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="5">Single </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="9">Common-law/Live-in</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s42" colspan="9">Widowed</td>
            </tr>
            <tr style="height: 21px">
                    <!-- <th id="631683479R28" style="height: 21px;" class="row-headers-background">
                        <div class="row-header-wrapper" style="line-height: 21px">29</div>
                    </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Married </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s27" dir="ltr" colspan="7">REGION 1</td>
                <td class="s27" dir="ltr" colspan="7">ILOCOS SUR</td>
                <td class="s27" dir="ltr" colspan="8">BANTAY</td>
                <td class="s27" dir="ltr" colspan="7">GUIMOD</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R30" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">31</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="2">16</td>
                <td class="s25" colspan="10" rowspan="2">Current Address</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                <td class="s46" dir="ltr" colspan="7">REGION</td>
                <td class="s46" dir="ltr" colspan="7">PROVINCE</td>
                <td class="s47" dir="ltr" colspan="8">CITY/MUNICIPALITY</td>
                <td class="s48" dir="ltr" colspan="7">BARANGAY</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R32" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">33</div>
                </th> -->
                <td class="s24" dir="ltr">17</td>
                <td class="s25" colspan="10">Mobile Contact No.</td>
                <td class="s26" dir="ltr" colspan="11">09171234567</td>
                <td class="s24" dir="ltr">18</td>
                <td class="s25" colspan="5">Email Address</td>
                <td class="s29" dir="ltr" colspan="12">adcruz@gmail.com</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R33" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">34</div>
                </th> -->
                <td class="s24" dir="ltr">19</td>
                <td class="s28" colspan="10">Nearest Relative / Legal Guardian Permanent Address</td>
                <td class="s27" dir="ltr" colspan="7">REGION 1</td>
                <td class="s27" dir="ltr" colspan="7">ILOCOS SUR</td>
                <td class="s27" dir="ltr" colspan="8">BANTAY</td>
                <td class="s27" dir="ltr" colspan="7">GUIMOD</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R34" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">35</div>
                </th> -->
                <td class="s24" dir="ltr">20</td>
                <td class="s28" colspan="10">Nearest Relative / Legal Guardian Mobile Contact No.</td>
                <td class="s29" dir="ltr" colspan="9">09154432222</td>
                <td class="s24" dir="ltr">21</td>
                <td class="s49" dir="ltr" colspan="9">Nearest Relative / Legal Guardian Email Address<span
                        style="font-weight:normal;"> </span><span
                        style="font-weight:normal;font-style:italic;">(optional)</span></td>
                <td class="s50" dir="ltr" colspan="10">bcc@gmail.com</td>
            </tr>
            <tr style="height: 34px">
                <!-- <th id="631683479R35" style="height: 34px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 34px">36</div>
                </th> -->
                <td class="s24" dir="ltr">22</td>
                <td class="s28" colspan="10">Highest Level of Educational Attainment</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="4">Elementary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Secondary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s43" colspan="3">Tertiary</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s43" colspan="4">Adult School </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="9">Managers</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="9">Professionals</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s41" colspan="9">Clerical Support Workers</td>
                <td class="s40"></td>
                <td class="s57"></td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" colspan="11">Service and Sales Workers</td>
                <td></td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s65" dir="ltr" colspan="4">15</td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="5">Current Smoker</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Previous Smoker</td>
                <td class="s43"></td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="12">With current harmful use of alcohol</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s42" colspan="13">No history of harmful use of alcohol</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R47" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">48</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="5">Usually Inactive</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Moderately Active </td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="3">High</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="4">Moderate</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="5">Cement dust</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Metal</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="5">Cotton</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Paper</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="5">Chemical Fumes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s41" colspan="4">Radiation</td>
                <td class="s41"></td>
                <td class="s41"></td>
                <td class="s81" dir="ltr" colspan="10"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="4">Grains</td>
                <td class="s35"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="3">Yes</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s40" colspan="3">No</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s40" colspan="3">Unknown</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s91" colspan="6" rowspan="3">No known genetic disposition to Cancer </td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s94" dir="ltr" colspan="9" rowspan="2"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">18</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s115" dir="ltr" colspan="10"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R99" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">100</div>
                </th> -->
                <td class="s24" dir="ltr" rowspan="4">34</td>
                <td class="s98" colspan="7" rowspan="4">Has the patient been diagnosed with any of the following
                    comorbidities?</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" dir="ltr" colspan="7">Cardiovascular disease</td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s41" dir="ltr" colspan="7">Hypertension</td>
                <td class="s41" dir="ltr"></td>
                <td class="s41" dir="ltr"></td>
                <td class="s38" dir="ltr"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" dir="ltr" colspan="7">Chronic respiratory disease</td>
                <td></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s41" dir="ltr" colspan="10">Immunosuppression/Immunodeficiency</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">11</td>
                <td class="s58 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:101px;left:-1px">Others, Specify:</div>
                </td>
                <td class="s114"></td>
                <td class="s114"></td>
                <td class="s119"></td>
                <td class="s120" dir="ltr" colspan="4">Cholelithiasis, Renal Cyst</td>
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
            <tr style="height: 24px">
                <!-- <th id="631683479R105" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">106</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Adrenal</div>
                </td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s57"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R106" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">107</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Anus</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R107" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">108</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Biliary Tract</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R108" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">109</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:258px;left:-1px">Blood - Acute Lymphocytic Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s123" style="border-left: 1px solid black;" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R109" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">110</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">5</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:258px;left:-1px">Blood - Acute Myelogenous Leukemia</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s123" style="border-left: 1px solid black;" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R110" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">111</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">6</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:257px;left:-1px">Blood - Chronic Lymphocytic Leukemia
                    </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s123" style="border-left: 1px solid black;" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R111" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">112</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">7</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:257px;left:-1px">Blood - Chronic Myelogenous Leukemia
                    </div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s123" style="border-left: 1px solid black;" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R112" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">113</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">8</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:258px;left:-1px">Blood - Myelodysplastiv Syndromes</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s56"></td>
                <td class="s123" style="border-left: 1px solid black;" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R113" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">114</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:206px;left:-1px">Blood - Plasma Cell Disorders</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R114" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">115</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">10</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Bone</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R115" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">116</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Brain (CNS)</div>
                </td>
                <td class="s54"></td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R116" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">117</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">12</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Breast</div>
                </td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s41"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R117" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">118</div>
                </th> -->
                <td class="s40" colspan="2"></td>
                <td class="s80" colspan="3"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Cervix</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R118" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">119</div>
                </th> -->
                <td class="s40" colspan="2"></td>
                <td class="s80" colspan="3"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">14</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Colon</div>
                </td>
                <td class="s125"></td>
                <td class="s125"></td>
                <td class="s39"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R119" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">120</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">15</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Esophagus</div>
                </td>
                <td class="s126"></td>
                <td class="s126"></td>
                <td class="s127"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R120" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">121</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">16</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Eyes and Orbit</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R121" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">122</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">17</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Gallbladder</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R122" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">123</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">18</td>
                <td class="s87 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Gastroesophageal Junction</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R123" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">124</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">19</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Hodgkin Lymphoma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R124" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">125</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">20</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Hypopharynx</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R125" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">126</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">21</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Kaposi Sarcoma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R126" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">127</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">22</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Kidney</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R127" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">128</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">23</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Larynx</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R128" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">129</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">24</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Leukemia</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R129" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">130</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">25</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Lip/Oral Cavity</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R130" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">131</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">26</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Liver</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R131" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">132</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="3">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">27</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Lung</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R132" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">133</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="3">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">28</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Melanoma of Skin</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R133" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">134</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">29</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Mesothelioma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R134" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">135</div>
                </th> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">30</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Multiple Myeloma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R135" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">136</div>
                </th> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="s83"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">31</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Nasopharynx</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R136" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">137</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">32</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Non-Hodgkin Lymphoma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s84"></td>
                <td class="s85"></td>
                <td class="s85" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R137" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">138</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">33</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Oral Cavity</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R138" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">139</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">34</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Oropharynx</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R139" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">140</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">35</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Ovary</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R140" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">141</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">36</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Pancreas</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R141" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">142</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">37</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Paranasal Sinus</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R142" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">143</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">38</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Peritoneal</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R143" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">144</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">39</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Prostate </div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R144" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">145</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">40</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Rectum</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R145" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">146</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">41</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Renal Pelvis/Ureters</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R146" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">147</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">42</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:128px;left:-1px">Salivary Glands</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s101"></td>
                <td class="s85"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R147" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">148</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">43</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Skin</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R148" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">149</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">44</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Small Bowel</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s101"></td>
                <td class="s57"></td>
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R149" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">150</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">45</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Soft Tissue Sarcoma</div>
                </td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s103"></td>
                <td class="s100"></td>
                <td class="s85"></td>
                <td class="s85"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R150" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">151</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R151" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">152</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R152" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">153</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R153" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">154</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R154" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">155</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R155" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">156</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">51</td>
                <td class="s40" colspan="9">Unknown Primary (Occult Primary)</td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R156" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">157</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R157" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">158</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R158" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">159</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R159" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">160</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s57"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
            <tr style="height: 23px">
                <!-- <th id="631683479R160" style="height: 23px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 23px">161</div>
                </th> -->
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">56</td>
                <td class="s40" colspan="5">Others, specify:</td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s57" colspan="2"></td>
                <td class="s83"></td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s123" dir="ltr">Y</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" dir="ltr" colspan="2">Active</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s36" dir="ltr" colspan="3">Remission</td>
                <td class="s52"></td>
            </tr>
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
                <td class="s29" dir="ltr" colspan="32">N/A</td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="5">Heterosexual</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="4">Bisexual</td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s43" colspan="5">Homosexual</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="4">Asexual</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s132" dir="ltr" colspan="9"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R166" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">167</div>
                </th> -->
                <td class="s24" dir="ltr">38</td>
                <td class="s28" colspan="10">Number of Sexual Partner/s</td>
                <td class="s26" dir="ltr" colspan="4">1</td>
                <td class="s24" dir="ltr">39</td>
                <td class="s28" colspan="10">Age of First Sexual Intercourse</td>
                <td class="s26" dir="ltr" colspan="4">22</td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s40" colspan="2">No</td>
                <td class="s52"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s40" colspan="7">Hormonal Contraceptives</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s40" colspan="8">Permanent Methods</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s35" colspan="8">Intrauterine Devices (IUDs)</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">6</td>
                <td class="s36" colspan="8">Others</td>
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">13</td>
                <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s133" colspan="9" rowspan="2"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R177" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">178</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="6">Yes, fully vaccinated </td>
                <td class="s134"></td>
                <td class="s51"></td>
                <td class="s134"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="7">Yes, partially vaccinated</td>
                <td class="s63"></td>
                <td class="s136"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="6">Yes, fully vaccinated </td>
                <td class="s134"></td>
                <td class="s51"></td>
                <td class="s134"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="7">Yes, partially vaccinated</td>
                <td class="s63"></td>
                <td class="s136"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s27" colspan="21"></td>
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
                <td class="s43" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33">1</td>
                <td class="s43" colspan="2">Yes</td>
                <td class="s43" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                <td class="s65" dir="ltr" colspan="8">1</td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">51</td>
                <td class="s80" colspan="9">Unknown Primary (Occult Primary)</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R203" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">204</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s153" colspan="9" rowspan="2"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R209" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">210</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Left</div>
                </td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Bilateral</div>
                </td>
                <td class="s103"></td>
                <td class="s110"></td>
                <td class="s110"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                </td>
                <td class="s86"></td>
                <td class="s101"></td>
                <td class="s25" style="border-left: 2px solid black;" dir="ltr" rowspan="2">47</td>
                <td class="s25" colspan="6" rowspan="2">ICD-10</td>
                <td class="s27" dir="ltr" colspan="10" rowspan="2">C50.0</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R213" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">214</div>
                </th> -->
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:50px;left:-1px">Right</div>
                </td>
                <td class="s119"></td>
                <td class="s119"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s29" dir="ltr" colspan="33">INVASIVE LOBULAR CARCINOMA</td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage 0</div>
                </td>
                <td class="s54"></td>
                <td class="s55"></td>
                <td class="s55"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage II</div>
                </td>
                <td class="s54"></td>
                <td class="s101"></td>
                <td class="s101"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage I</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s74"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">4</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Stage III</div>
                </td>
                <td class="s59"></td>
                <td class="s61"></td>
                <td class="s61"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                <td class="s160" colspan="9"></td>
                <td class="s144" dir="ltr">52</td>
                <td class="s28" colspan="10">M (Metastasis)<span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                        (Optional)</span></td>
                <td class="s160" colspan="9"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R219" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">220</div>
                </th> -->
                <td class="s144" dir="ltr">51</td>
                <td class="s28" colspan="10">N (Nodes)<span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                        (Optional)</span></td>
                <td class="s160" colspan="9"></td>
                <td class="s144" dir="ltr">53</td>
                <td class="s28" colspan="10">S (Staging) <span
                        style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                </td>
                <td class="s161" colspan="9"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s37" colspan="24"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R231" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">232</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="3">55</td>
                <td class="s28" colspan="10" rowspan="3">Current Status of the Cancer</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:362px;left:-1px">Old case, completed 1st treatment, now
                        recurrent</div>
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
                <td class="s144" dir="ltr">56</td>
                <td class="s28" colspan="10">Date of Diagnosis</td>
                <td class="s26" dir="ltr">2</td>
                <td class="s26" dir="ltr">0</td>
                <td class="s26" dir="ltr">2</td>
                <td class="s26" dir="ltr">2</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">0</td>
                <td class="s26" dir="ltr">7</td>
                <td class="s30" dir="ltr">-</td>
                <td class="s26" dir="ltr">1</td>
                <td class="s26" dir="ltr">8</td>
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="7">Surgery</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s41" colspan="7">Medical Oncology</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">3</td>
                <td class="s41" colspan="7">Pediatric Oncology</td>
                <td class="s51"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">4</td>
                <td class="s41" colspan="7">Hematology Oncology</td>
                <td class="s40"></td>
                <td class="s51"></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">11</td>
                <td class="s41" dir="ltr" colspan="4">Others, specify: </td>
                <td class="s164" colspan="8"></td>
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
                        <use href="#checked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s34" colspan="2">No</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Diagnostic</td>
                <td class="s63"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Neoadjuvant</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Adjuvant</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s28" colspan="8" rowspan="3">Drug Type/s <span
                        style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                        be multiple)</span></td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s41" colspan="4">Cytotoxic</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s35" colspan="6">Immunologic</td>
                <td class="s165" colspan="9"></td>
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
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R250" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">251</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R251" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">252</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R254" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">255</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R255" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">256</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Both</td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R257" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">258</div>
                </th> -->
                <td class="s144" dir="ltr" rowspan="4">62</td>
                <td class="s28" dir="ltr" colspan="10" rowspan="4">Third Line Anti-Cancer Drug</td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s40"></td>
                <td class="s80"></td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R258" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">259</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Intended no. of Cycles</td>
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R259" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">260</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s25" colspan="7">Treatment Goal</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s36" colspan="4">Palliative</td>
            </tr>
            <tr style="height: 21px">
                <!-- <th id="631683479R260" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">261</div>
                </th> -->
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s63"></td>
                <td class="s64"></td>
                <td class="s25" colspan="7">Time of Administration</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s26" colspan="18"></td>
            </tr>
            <tr style="height: 24px">
                <!-- <th id="631683479R262" style="height: 24px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 24px">263</div>
                </th> -->
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s25" dir="ltr" colspan="7">Drug/s Regimen</td>
                <td class="s26" colspan="18"></td>
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
                <td class="s26" colspan="18"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Curative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Control</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="4">Pre-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s35" colspan="4">Post-operative</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">9</td>
                <td class="s53 softmerge" dir="ltr">
                    <div class="softmerge-inner" style="width:370px;left:-1px">Stereotactic Radiosurgery / Stereotactic
                        Radiotherapy</div>
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">10</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s169" colspan="11"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s35" colspan="7">Concurrent ChemoRT</td>
                <td class="s170"></td>
                <td class="s32" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">1</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                </td>
                <td class="s59"></td>
                <td class="s74"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">2</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Palliative</div>
                </td>
                <td class="s113"></td>
                <td class="s74"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">3</td>
                <td class="s58 softmerge">
                    <div class="softmerge-inner" style="width:76px;left:-1px">Adjuvant</div>
                </td>
                <td class="s113"></td>
                <td class="s171"></td>
                <td class="s62" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s33" dir="ltr">5</td>
                <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s173" colspan="13"></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">1</td>
                <td class="s80" colspan="2">Yes</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#checked-checkbox-id" fill="#000000" />
                    </svg></td>
                <td class="s39" dir="ltr">2</td>
                <td class="s80" colspan="2">No</td>
                <td class="s38" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                        <use href="#unchecked-checkbox-id" fill="#000000" />
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
                <td class="s115" colspan="11"></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
