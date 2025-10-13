<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" rel="stylesheet" href="{{ asset('resources/sheet.css') }}">
    <style type="text/css">        
        html{
            overflow: auto;
        }
        .ritz .waffle a {
            color: inherit;
        }

        .ritz .waffle .s75 {
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

        .ritz .waffle .s117 {
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
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

        .ritz .waffle .s58 {
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

        .ritz .waffle .s133 {
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

        .ritz .waffle .s131 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: center;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s103 {
            border-right: none;
            border-bottom: 1px SOLID transparent;
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
            font-size: 10pt;
            vertical-align: bottom;
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
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s30 {
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

        .ritz .waffle .s49 {
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

        .ritz .waffle .s62 {
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

        .ritz .waffle .s85 {
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

        .ritz .waffle .s60 {
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

        .ritz .waffle .s95 {
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

        .ritz .waffle .s101 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s105 {
            border-left: none;
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s111 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s119 {
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s87 {
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

        .ritz .waffle .s118 {
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s122 {
            border-bottom: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s84 {
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

        .ritz .waffle .s113 {
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

        .ritz .waffle .s126 {
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

        .ritz .waffle .s56 {
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

        .ritz .waffle .s5 {
            background-color: #ffffff;
            text-align: center;
            font-weight: bold;
            color: #000000;
            font-family: Arial;
            font-size: 7pt;
            vertical-align: bottom;
            white-space: normal;
            overflow: hidden;
            word-wrap: break-word;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s6 {
            background-color: #ffffff;
            text-align: center;
            font-weight: bold;
            color: #000000;
            font-family: Arial;
            font-size: 24pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s50 {
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

        .ritz .waffle .s14 {
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

        .ritz .waffle .s120 {
            border-left: none;
            border-right: none;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s135 {
            border-right: none;
            background-color: #ffffff;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: top;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s130 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s20 {
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

        .ritz .waffle .s47 {
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

        .ritz .waffle .s98 {
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

        .ritz .waffle .s4 {
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

        .ritz .waffle .s31 {
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

        .ritz .waffle .s97 {
            border-bottom: 1px SOLID #000000;
            background-color: #ffffff;
        }

        .ritz .waffle .s82 {
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

        .ritz .waffle .s92 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #b7b7b7;
            text-align: center;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s99 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s21 {
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

        .ritz .waffle .s53 {
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

        .ritz .waffle .s61 {
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

        .ritz .waffle .s142 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #efefef;
            text-align: left;
            font-weight: bold;
            color: #000000;
            font-family: Arial;
            font-size: 10pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s79 {
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

        .ritz .waffle .s86 {
            border-left: none;
            border-right: none;
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

        .ritz .waffle .s89 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID transparent;
            background-color: #d8d8d8;
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

        .ritz .waffle .s43 {
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

        .ritz .waffle .s51 {
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

        .ritz .waffle .s88 {
            border-left: none;
            border-right: none;
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

        .ritz .waffle .s96 {
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

        .ritz .waffle .s136 {
            border-left: none;
            border-right: none;
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

        .ritz .waffle .s145 {
            border-left: none;
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

        .ritz .waffle .s11 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #000000;
            text-align: center;
            font-style: italic;
            color: #ffffff;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s38 {
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

        .ritz .waffle .s36 {
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

        .ritz .waffle .s73 {
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

        .ritz .waffle .s74 {
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

        .ritz .waffle .s78 {
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

        .ritz .waffle .s81 {
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

        .ritz .waffle .s102 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s39 {
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

        .ritz .waffle .s112 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s93 {
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

        .ritz .waffle .s124 {
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

        .ritz .waffle .s146 {
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

        .ritz .waffle .s125 {
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

        .ritz .waffle .s40 {
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

        .ritz .waffle .s28 {
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

        .ritz .waffle .s13 {
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

        .ritz .waffle .s106 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s48 {
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

        .ritz .waffle .s149 {
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

        .ritz .waffle .s67 {
            border-right: 1px SOLID #000000;
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

        .ritz .waffle .s70 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s141 {
            background-color: #ffffff;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 9pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s144 {
            border-left: none;
            border-right: none;
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

        .ritz .waffle .s148 {
            background-color: #efefef;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 10pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s107 {
            border-left: none;
            border-right: none;
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s42 {
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

        .ritz .waffle .s27 {
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

        .ritz .waffle .s115 {
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

        .ritz .waffle .s35 {
            border-left: none;
            background-color: #ffffff;
        }

        .ritz .waffle .s8 {
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

        .ritz .waffle .s15 {
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

        .ritz .waffle .s2 {
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

        .ritz .waffle .s90 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #d8d8d8;
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

        .ritz .waffle .s23 {
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

        .ritz .waffle .s91 {
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

        .ritz .waffle .s72 {
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

        .ritz .waffle .s68 {
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

        .ritz .waffle .s77 {
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

        .ritz .waffle .s100 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s138 {
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

        .ritz .waffle .s46 {
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

        .ritz .waffle .s116 {
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

        .ritz .waffle .s9 {
            border-bottom: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
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

        .ritz .waffle .s52 {
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

        .ritz .waffle .s18 {
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

        .ritz .waffle .s22 {
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

        .ritz .waffle .s129 {
            background-color: #efefef;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s132 {
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

        .ritz .waffle .s1 {
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

        .ritz .waffle .s147 {
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

        .ritz .waffle .s7 {
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

        .ritz .waffle .s69 {
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

        .ritz .waffle .s32 {
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

        .ritz .waffle .s108 {
            border-left: none;
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s76 {
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

        .ritz .waffle .s137 {
            border-left: none;
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

        .ritz .waffle .s26 {
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

        .ritz .waffle .s152 {
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

        .ritz .waffle .s83 {
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

        .ritz .waffle .s109 {
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s44 {
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

        .ritz .waffle .s25 {
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

        .ritz .waffle .s10 {
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

        .ritz .waffle .s71 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
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

        .ritz .waffle .s134 {
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

        .ritz .waffle .s19 {
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

        .ritz .waffle .s128 {
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

        .ritz .waffle .s24 {
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

        .ritz .waffle .s57 {
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
            border-bottom: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-style: italic;
            color: #000000;
            font-family: Arial;
            font-size: 10pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s151 {
            border-left: none;
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

        .ritz .waffle .s54 {
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

        .ritz .waffle .s16 {
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

        .ritz .waffle .s143 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID transparent;
            background-color: #d9d9d9;
            text-align: center;
            font-weight: bold;
            color: #666666;
            font-family: Arial;
            font-size: 8pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s37 {
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

        .ritz .waffle .s0 {
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

        .ritz .waffle .s41 {
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

        .ritz .waffle .s121 {
            border-left: none;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s55 {
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

        .ritz .waffle .s114 {
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

        .ritz .waffle .s45 {
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

        .ritz .waffle .s94 {
            border-left: none;
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

        .ritz .waffle .s139 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
        }

        .ritz .waffle .s29 {
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

        .ritz .waffle .s110 {
            border-bottom: 1px SOLID transparent;
            background-color: #ffffff;
        }

        .ritz .waffle .s3 {
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

        .ritz .waffle .s140 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s123 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
            color: #ff0000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s34 {
            border-left: none;
            border-right: none;
            background-color: #ffffff;
        }

        .ritz .waffle .s65 {
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

        .ritz .waffle .s127 {
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

        .ritz .waffle .s150 {
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

        .ritz .waffle .s66 {
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

        .ritz .waffle .s33 {
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

        .ritz .waffle .s104 {
            border-left: none;
            border-bottom: 1px SOLID transparent;
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

        .ritz .waffle .s17 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #b7b7b7;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 10pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }
    </style>
</head>

<body>
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
    @php
        $data = \App\Models\F3patientsurveillanceform::with([
            'f3cancerdiagnoseoutcomes', 
            'f3cancertreatmenthistories', 
            'f3treatmenthistory2s', 
            'f3financialsupports'])->where('id', Request::query('id'))->first();
    @endphp
    {{-- <div style="padding: 20px">{{ json_encode([ 'data' => $data ]) }}</div> --}}
    <div class="ritz grid-container" dir="ltr">
        <table class="waffle no-grid" cellspacing="0" cellpadding="0" style="width: 1050px; margin: 0 auto; border: 1px solid black">
            <tbody>
                <tr style="height: 19px">
                    <td class="s0"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
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
                    <td class="s4"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s3"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                </tr>
                <tr style="height: 59px">
                    
                    <td class="s5" colspan="40"><span
                            style="font-size:9pt;font-family:Arial;font-weight:bold;color:#000000;">Republic of the
                            Philippines<br>Department of Health<br></span><span
                            style="font-size:12pt;font-family:Arial;font-weight:bold;color:#000000;">Philippine Cancer
                            Center</span></td>
                </tr>
                <tr style="height: 59px">
                    
                    <td class="s6" colspan="40">HOSPITAL-BASED CANCER REGISTRY (HBCR)</td>
                </tr>
                <tr style="height: 39px">
                    
                    <td class="s7" colspan="6">General Instruction:</td>
                    <td class="s8" dir="ltr" colspan="25">a. Place a check (✔) in the appropriate tick
                        box.<br>b. Optional variables will be labeled with the word <span
                            style="font-weight:bold;font-style:italic;">“Optional.”</span></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                    <td class="s9"></td>
                </tr>
                <tr style="height: 34px">
                    
                    <td class="s10" colspan="40">FORM 3: PATIENT SURVEILLANCE FORM</td>
                </tr>
                <tr style="height: 19px">
                    
                    <td class="s11" colspan="40">(After Completion of Therapy during Each Follow-up Care for 2,3,
                        5 or more years)</td>
                </tr>
                <tr style="height: 9px">
                    
                    <td class="s12" colspan="40"></td>
                </tr>
                @php
                    $psf_date = str_split(str_replace("-", "", $data->date));
                @endphp
                <tr style="height: 24px">
                    <td class="s13" dir="ltr">102</td>
                    <td class="s14" colspan="7">Date</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[0] }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[1] }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[2] }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[3] }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[4] }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[5] }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[6] }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $psf_date[7] }}</td>
                    <td class="s17" colspan="22"></td>
                </tr>
                @php
                    $name = $data->name ?? [];
                @endphp
                <tr style="height: 24px">
                    <td class="s13" dir="ltr">103</td>
                    <td class="s14" colspan="7">Name of Patient</td>
                    <td class="s18" dir="ltr" colspan="10" style="color: black">{{ $name['firstname'] ?? '' }}</td>
                    <td class="s18" dir="ltr" colspan="10" style="color: black">{{ $name['middlename'] ?? 'N/A' }}</td>
                    <td class="s18" dir="ltr" colspan="9" style="color: black">{{ $name['lastname'] ?? '' }}</td>
                    <td class="s15" dir="ltr" colspan="3" style="color: black">{{ $name['suffix'] ?? 'N/A' }}</td>
                </tr>
                @php
                    $pcs = $data->primary_cancer_site ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="20">104</td>
                    <td class="s14" colspan="7" rowspan="20">Primary Cancer Site</td>
                    <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Adrenal', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Adrenal</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Kaposi Sarcoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">21</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Kaposi Sarcoma</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s29"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Renal Pelvis/Ureters', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">41</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Renal Pelvis/Ureters</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Anus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Anus</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Salivary Glands', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">22</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Kidney</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Biliary Tract', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">42</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Salivary Glands</div>
                    </td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td></td>
                    <td></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Biliary Tract', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Biliary Tract</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s37"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Larynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">23</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Larynx</div>
                    </td>
                    <td class="s36"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Skin', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">43</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Skin</div>
                    </td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Acute Lymphocytic Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Acute Lymphocytic Leukemia</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s30"></td>
                    <td class="s40" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Leukemia</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s29"></td>
                    <td class="s42"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Small Bowel', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">44</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Small Bowel</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s42"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Acute Myelogenous Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Acute Myelogenous Leukemia</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s30"></td>
                    <td class="s40" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Lip/Oral Cavity', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">25</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Lip/Oral Cavity</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Soft Tissue Sarcoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">45</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Soft Tissue Sarcoma</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s27"></td>
                    <td class="s29"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Chronic Lymphocytic Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:231px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Chronic Lymphocytic Leukemia</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Liver', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">26</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Liver</div>
                    </td>
                    <td class="s36"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Spinal Cord', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">46</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Spinal Cord</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s30"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Chronic Myelogenous Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:231px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Chronic Myelogenous Leukemia</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Lung', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">27</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Lung</div>
                    </td>
                    <td class="s36"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Stomach', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">47</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stomach</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Myelodysplastiv Syndromes', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Myelodysplastiv Syndromes</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s30"></td>
                    <td class="s40" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Melanoma of Skin', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">28</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Melanoma of Skin</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s29"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Testis', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">48</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Testis</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Blood - Plasma Cell Disorders', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:206px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Plasma Cell Disorders</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s40"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Mesothelioma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">29</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Mesothelioma</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Thymus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">49</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Thymus</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Bone', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Bone</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Multiple Myeloma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">30</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Multiple Myeloma</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s29"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Thyroid', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">50</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Thyroid</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Brain (CNS)', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brain (CNS)</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Nasopharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">31</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Nasopharynx</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Unknown Primary (Occult Primary)', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">51</td>
                    <td class="s44" colspan="9">Unknown Primary (Occult Primary)</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Breast', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Breast</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Non-Hodgkin Lymphoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">32</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Non-Hodgkin Lymphoma</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s29"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Urinary Bladder', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">52</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Urinary Bladder</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s30"></td>
                    <td class="s36"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Cervix', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Cervix</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Oral Cavity', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">33</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Oral Cavity</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s29"></td>
                    <td class="s42"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Uterus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">53</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Uterus</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Colon', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Colon</div>
                    </td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Oropharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">34</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Oropharynx</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Vagina', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">54</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Vagina</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Esophagus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Esophagus</div>
                    </td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s47"></td>
                    <td class="s36"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Ovary', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">35</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Ovary</div>
                    </td>
                    <td class="s36"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Vulva', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">55</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Vulva</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s23"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s38"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Eyes and Orbit', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">16</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Eyes and Orbit</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s36"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Pancreas', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">36</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Pancreas</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s29"></td>
                    <td class="s42"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Others', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">56</td>
                    <td class="s32" dir="ltr" colspan="5">Others, specify:</td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s44" dir="ltr"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Gallbladder', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">17</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Gallbladder</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s36"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Paranasal Sinus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">37</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Paranasal Sinus</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s27"></td>
                    <td class="s28"></td>
                    <td class="s29"></td>
                    <td class="s29"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s19" dir="ltr"></td>
                    <td></td>
                    <td class="s48" colspan="8" rowspan="2">{{ $data->primary_cancer_site_other }}</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Gastroesophageal Junction', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">18</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Gastroesophageal Junction</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s26"></td>
                    <td class="s28"></td>
                    <td class="s27"></td>
                    <td class="s42"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Peritoneal', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">38</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Peritoneal</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s29"></td>
                    <td class="s42"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s49"></td>
                    <td class="s50"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Hodgkin Lymphoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">19</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Hodgkin Lymphoma</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s26"></td>
                    <td class="s42"></td>
                    <td class="s29"></td>
                    <td class="s24"></td>
                    <td class="s4"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Prostate', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">39</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Prostate </div>
                    </td>
                    <td class="s40"></td>
                    <td class="s29"></td>
                    <td class="s42"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Hypopharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">20</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Hypopharynx</div>
                    </td>
                    <td class="s54"></td>
                    <td class="s54"></td>
                    <td class="s55" dir="ltr"></td>
                    <td class="s56" dir="ltr"></td>
                    <td class="s57" dir="ltr"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Rectum', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">40</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Rectum</div>
                    </td>
                    <td class="s59"></td>
                    <td class="s60"></td>
                    <td class="s61" dir="ltr"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
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
                @php
                    $laterality = $data->laterality;
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="2">105</td>
                    <td class="s14" colspan="7" rowspan="2">Laterality</td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $laterality == 'Left' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Left</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $laterality == 'Not applicable' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Not applicable</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s40" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $laterality == 'Bilateral' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Bilateral</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s66" dir="ltr" rowspan="2">106</td>
                    <td class="s14" colspan="6" rowspan="2">ICD-10</td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s67"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $laterality == 'Right' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Right</div>
                    </td>
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $laterality == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">5</td>
                    <td class="s58" colspan="4">Unknown</td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s58"></td>
                    <td class="s69"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 49px">
                    
                    <td class="s72" dir="ltr">107</td>
                    <td class="s73" colspan="7">Histologic<span
                            style="font-size:8pt;font-family:Arial;font-weight:bold;color:#000000;"> </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">Diagnosis</span>
                    </td>
                    <td class="s74" colspan="32">{{ $data->histologic_diagnosis ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s75" colspan="40">C l i n i c a l S t a g e</td>
                </tr>
                @php
                    $stage = $data->clinical_stage ?? null;
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="2">108</td>
                    <td class="s14" colspan="10" rowspan="2">Group Clinical Stage <span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                    </td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $stage == 'Stage 0' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage 0</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $stage == 'Stage II' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage II</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $stage == 'Stage IV' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage IV</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $stage == 'Stage I' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage I</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ $stage == 'Stage III' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage III</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#unchecked-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
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
                @php
                    $tumor = $data->stage;
                @endphp
                <tr style="height: 26px">
                    
                    <td class="s65" dir="ltr">109</td>
                    <td class="s73" colspan="10">T (Tumor)<span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)</span></td>
                    <td class="s78" colspan="9">{{ $tumor['t_stage'] ?? '' }}</td>
                    <td class="s65" dir="ltr">111</td>
                    <td class="s73" colspan="10">M (Metastasis)<span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)</span></td>
                    <td class="s78" colspan="9">{{ $tumor['m_stage'] ?? '' }}</td>
                </tr>
                <tr style="height: 26px">
                    
                    <td class="s65" dir="ltr">110</td>
                    <td class="s73" colspan="10">N (Nodes)<span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)</span></td>
                    <td class="s78" colspan="9">{{ $tumor['n_stage'] ?? '' }}</td>
                    <td class="s65" dir="ltr">112</td>
                    <td class="s73" colspan="10">S (Staging) <span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                    </td>
                    <td class="s79" colspan="9">{{ $tumor['s_stage'] ?? '' }}</td>
                </tr>
                @php
                    $other_staging = $data->other_staging ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="11">113</td>
                    <td class="s73" colspan="10" rowspan="11">Other Staging Used <span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                    </td>
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('FIGO Staging System (International Federation of Gynecology and Obstetrics)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="27">FIGO Staging System (International Federation of Gynecology
                        and Obstetrics)</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Ann Arbor Staging System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s32" colspan="12">Ann Arbor Staging System</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Breslow Thickness and Clark Level (for Skin Cancer)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s2" colspan="21">Breslow Thickness and Clark Level (for Skin Cancer)</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Durie-Salmon Staging System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s2" colspan="13">Durie-Salmon Staging System</td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Biomarker/Hormone Receptor Status', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s32" colspan="19">Biomarker/Hormone Receptor Status</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('The Child-Pugh Score (for Liver Cancer)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s2" colspan="12">The Child-Pugh Score (for Liver Cancer)</td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Enneking Classification', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s32" colspan="16">Enneking Classification</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Musculoskeletal Tumor Society (MSTS)
                        classification', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:362px;left:-1px">Musculoskeletal Tumor Society
                            (MSTS) classification</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s21"></td>
                    <td class="s36"></td>
                    <td class="s22"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s20" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Nottingham Grading System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Nottingham Grading System</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                   <td class="s50" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                        style="display:inline;">
                        <use href="#{{ in_array('Not Applicable', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                    </svg></td>
                    <td class="s52" dir="ltr">10</td>
                    <td class="s57" colspan="12">Not Applicable</td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                </tr>
                <tr style="height: 34px">
                    
                    <td class="s14" dir="ltr" colspan="5">Other Remarks</td>
                    <td class="s84" colspan="24">{{ $data->other_remarks ?? '' }}</td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s85" colspan="40">C A N C E R D I A G N O S I S O U T C O M E</td>
                </tr>
                @php
                    $f3cancerdiagnoseoutcomes = $data->f3cancerdiagnoseoutcomes ?? [];
                    $diagnosis_outcome = $f3cancerdiagnoseoutcomes['diagnosis_outcome'] ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="6">114</td>
                    <td class="s14" colspan="11" rowspan="6">Diagnosis Outcome</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Stable Disease', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Stable Disease </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Death (treatment related)', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Death (treatment related) </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s87"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Complete Remission', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Complete Remission </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Death (other Cause/Non-Cancer Related)', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Death (other Cause/Non-Cancer Related) </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s87"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Partial Response', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Partial Response </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ongoing evaluation', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing evaluation </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s87"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Disease Progression', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Disease Progression </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ongoing treatment', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing treatment </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s87"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Recurrent Disease', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Recurrent Disease </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Completed treatment', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Completed treatment </div>
                    </td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s86"></td>
                    <td class="s45"></td>
                    <td class="s45"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s87"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Death (Cancer related)', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Death (Cancer related) </div>
                    </td>
                    <td class="s88"></td>
                    <td class="s88"></td>
                    <td class="s88"></td>
                    <td class="s88"></td>
                    <td class="s88"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Undetermined', $diagnosis_outcome) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">12</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Undetermined</div>
                    </td>
                    <td class="s88"></td>
                    <td class="s88"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s74"></td>
                </tr>
                @php

                    $dod = str_split(str_replace("-", "", $data->f3cancerdiagnoseoutcomes['diagnosis_outcome_date'] ?? null));
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s13" dir="ltr">115</td>
                    <td class="s14" colspan="11">Date of Diagnosis Outcome</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[0] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[1] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[2] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[3] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[4] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[5] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[6] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dod[7] ?? '' }}</td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s90"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s13" dir="ltr" rowspan="4">116</td>
                    <td class="s14" colspan="11" rowspan="4">Cause of Death</td>
                    <td class="s91" colspan="8">Immediate Cause</td>
                    <td class="s74" colspan="20">{{ $f3cancerdiagnoseoutcomes['cause_immediate'] ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s91" colspan="8">Antecedent Cause</td>
                    <td class="s74" colspan="20">{{ $f3cancerdiagnoseoutcomes['cause_antecedent'] ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s91" colspan="8">Underlying Cause</td>
                    <td class="s74" colspan="20">{{ $f3cancerdiagnoseoutcomes['cause_underlying'] ?? '' }}</td>
                </tr>
                <tr style="height: 39px">
                    
                    <td class="s74" colspan="8">Other significant condition directly leading to death:</td>
                    <td class="s74" colspan="20">{{ $f3cancerdiagnoseoutcomes['cause_other'] ?? '' }}</td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s85" colspan="40">C A N C E R T R E A T M E N T H I S T O R Y</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s75" colspan="40">S u r g e r y</td>
                </tr>
                @php
                    $f3cancertreatmenthistories = $data->f3cancertreatmenthistories ?? [];
                    $first_surgery = $data->f3cancertreatmenthistories['first_surgery'] == "Yes" ? true : false;
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s13" dir="ltr" rowspan="6">117</td>
                    <td class="s14" dir="ltr" colspan="7" rowspan="6">Surgery Done?</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                    <td class="s14" dir="ltr" colspan="9">What surgery type <span
                            style="font-size:10pt;font-weight:normal;font-style:italic;">(RVS Code) </span></td>
                    <td class="s62" colspan="19">{{ $f3cancertreatmenthistories['first_surgery_code'] ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr"></td>
                    <td class="s1" dir="ltr"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s14" dir="ltr" colspan="9">What surgery type <span
                            style="font-size:10pt;font-weight:normal;font-style:italic;">(description)</span></td>
                    <td class="s62" colspan="19">{{ $f3cancertreatmenthistories['first_surgery_desc'] ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $first_surgery ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    @php
                        $fsdate = str_split(str_replace("-", "", $f3cancertreatmenthistories['first_surgery_date']));
                    @endphp
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s14" colspan="9">Surgery Date</td>
                    <td class="s15" dir="ltr">{{ $fsdate[0] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $fsdate[1] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $fsdate[2] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $fsdate[3] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $fsdate[4] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $fsdate[5] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $fsdate[6] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $fsdate[7] ?? '' }}</td>
                    <td class="s92" colspan="9"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ !$first_surgery ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Goal <span
                            style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                            be multiple) </span></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Diagnostic', $f3cancertreatmenthistories['first_goal'] ?? []) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Diagnostic</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Curative', $f3cancertreatmenthistories['first_goal'] ?? []) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="3">Curative</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Palliative', $f3cancertreatmenthistories['first_goal'] ?? []) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="3">Palliative</td>
                    <td class="s83" colspan="3"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $f3cancertreatmenthistories['first_adverse_event'] == "None" ? 'checked' : 'unchecked'}}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $f3cancertreatmenthistories['first_adverse_event'] == "Major" ? 'checked' : 'unchecked'}}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $f3cancertreatmenthistories['first_adverse_event'] == "Unknown" ? 'checked' : 'unchecked'}}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $f3cancertreatmenthistories['first_adverse_event'] == "Minor" ? 'checked' : 'unchecked'}}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $f3cancertreatmenthistories['first_adverse_event'] == "Serious" ? 'checked' : 'unchecked'}}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>
                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];
                    $hasSecond = ($f3['second_surgery'] ?? '') === 'Yes';

                    $s2code = $f3['second_surgery_code'] ?? '';
                    $s2desc = $f3['second_surgery_desc'] ?? '';

                    $s2dateParts = str_split(str_replace('-', '', $f3['second_surgery_date'] ?? '')); // YYYYMMDD -> 8 chars
                    $s2goals = $f3['second_goal'] ?? []; // array: ['Diagnostic','Curative','Palliative']
                    $s2adverse = $f3['second_adverse_event'] ?? ''; // array any of: None, Minor, Major, Serious, Unknown
                @endphp

                <tr style="height: 24px">
                    <td class="s65" dir="ltr" rowspan="6">118</td>
                    <td class="s73" colspan="7" rowspan="6">Second Surgery</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(RVS Code) </span>
                    </td>
                    {{-- keep exact cell structure: put value in the first s62, leave the rest empty for layout --}}
                    <td class="s62">{{ $s2code }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr"></td>
                    <td class="s1" dir="ltr"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(description)</span>
                    </td>
                    {{-- same pattern: description in first s62 cell only --}}
                    <td class="s62">{{ $s2desc }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $hasSecond ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s14" colspan="9">Surgery Date</td>
                    {{-- YYYY-MM-DD with dashes in exact columns --}}
                    <td class="s15" dir="ltr">{{ $s2dateParts[0] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[1] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[2] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[3] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[4] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[5] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[6] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s2dateParts[7] ?? '' }}</td>
                    <td class="s92" colspan="9"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$hasSecond ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">
                        Goal <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can be multiple) </span>
                    </td>

                    {{-- Diagnostic --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Diagnostic', $s2goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Diagnostic</td>

                    {{-- Curative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Curative', $s2goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="3">Curative</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $s2goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="3">Palliative</td>

                    <td class="s83" colspan="3"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?</td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s2adverse == 'None' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s2adverse == 'Major' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s2adverse == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s83"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s2adverse == 'Minor' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s2adverse == 'Serious' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>

                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];
                    $hasThird = ($f3['third_surgery'] ?? '') === 'Yes';

                    $s3code = $f3['third_surgery_code'] ?? '';
                    $s3desc = $f3['third_surgery_desc'] ?? '';

                    $s3dateParts = str_split(str_replace('-', '', $f3['third_surgery_date'] ?? '')); // YYYYMMDD -> 8 chars
                    $s3goals = $f3['third_goal'] ?? []; // ['Diagnostic','Curative','Palliative']
                    $s3adverse = (array) ($f3['third_adverse_event'] ?? []); // ['None','Minor','Major','Serious','Unknown']
                @endphp

                <tr style="height: 24px">
                    <td class="s65" dir="ltr" rowspan="6">119</td>
                    <td class="s73" colspan="7" rowspan="6">Third Surgery</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(RVS Code) </span>
                    </td>
                    {{-- Put value in first s62, keep rest for layout --}}
                    <td class="s62">{{ $s3code }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr"></td>
                    <td class="s1" dir="ltr"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(description)</span>
                    </td>
                    {{-- Description in first s62 only --}}
                    <td class="s62">{{ $s3desc }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $hasThird ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s14" colspan="9">Surgery Date</td>
                    {{-- YYYY-MM-DD digits into cells, with fixed dash cells --}}
                    <td class="s15" dir="ltr">{{ $s3dateParts[0] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[1] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[2] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[3] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[4] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[5] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[6] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s3dateParts[7] ?? '' }}</td>
                    <td class="s92" colspan="9"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$hasThird ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">
                        Goal <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                        be multiple) </span>
                    </td>

                    {{-- Diagnostic --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Diagnostic', $s3goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Diagnostic</td>

                    {{-- Curative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Curative', $s3goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="3">Curative</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $s3goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="3">Palliative</td>

                    <td class="s83" colspan="3"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s3adverse == 'None' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s3adverse == 'Major' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s3adverse == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s83"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s3adverse == 'Minor'  ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s3adverse == 'Serious' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>

                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];
                    $hasFourth = ($f3['fourth_surgery'] ?? '') === 'Yes';

                    $s4code = $f3['fourth_surgery_code'] ?? '';
                    $s4desc = $f3['fourth_surgery_desc'] ?? '';

                    $s4dateParts = str_split(str_replace('-', '', $f3['fourth_surgery_date'] ?? '')); // YYYYMMDD -> 8 chars
                    $s4goals = $f3['fourth_goal'] ?? []; // ['Diagnostic','Curative','Palliative']
                    $s4adverse = (array) ($f3['fourth_adverse_event'] ?? []); // ['None','Minor','Major','Serious','Unknown']
                @endphp

                <tr style="height: 24px">
                    <td class="s99" dir="ltr" rowspan="6">120</td>
                    <td class="s100" colspan="7" rowspan="6">Fourth Surgery</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s80"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(RVS Code) </span>
                    </td>
                    {{-- Put value in first s62, keep remaining cells for layout --}}
                    <td class="s62">{{ $s4code }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr"></td>
                    <td class="s1" dir="ltr"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s14" dir="ltr" colspan="9">
                        What surgery type <span style="font-size:10pt;font-weight:normal;font-style:italic;">(description)</span>
                    </td>
                    {{-- Description in first s62 only --}}
                    <td class="s62">{{ $s4desc }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $hasFourth ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s14" colspan="9">Surgery Date</td>
                    {{-- YYYY-MM-DD digits into cells, with fixed dash cells --}}
                    <td class="s15" dir="ltr">{{ $s4dateParts[0] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[1] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[2] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[3] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[4] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[5] ?? '' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[6] ?? '' }}</td>
                    <td class="s15" dir="ltr">{{ $s4dateParts[7] ?? '' }}</td>
                    <td class="s92" colspan="9"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$hasFourth ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">
                        Goal <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                        be multiple) </span>
                    </td>

                    {{-- Diagnostic --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Diagnostic', $s4goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Diagnostic</td>

                    {{-- Curative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Curative', $s4goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="3">Curative</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $s4goals) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="3">Palliative</td>

                    <td class="s83" colspan="3"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s4adverse == 'None' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s4adverse == 'Major' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s4adverse == 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s83"></td>

                    {{-- Minor (note: different classes here vs earlier rows; preserved) --}}
                    <td class="s101" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{  $s4adverse == 'Minor' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s102" dir="ltr">2</td>
                    <td class="s103 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s104"></td>
                    <td class="s105"></td>
                    <td class="s106"></td>

                    {{-- Serious --}}
                    <td class="s101" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $s4adverse == 'Serious' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s102" dir="ltr">4</td>
                    <td class="s103 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s107"></td>
                    <td class="s104"></td>
                    <td class="s108"></td>
                    <td class="s106"></td>
                    <td class="s106"></td>
                    <td class="s109"></td>
                    <td class="s110"></td>
                    <td class="s109"></td>
                    <td class="s109"></td>
                    <td class="s111"></td>
                </tr>

                <tr style="height: 24px">
                    
                    <td class="s75" colspan="40">A n t i - C a n c e r D r u g</td>
                </tr>


                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];

                    $drugGiven = ($f3['first_drug'] ?? '') === 'Yes';

                    // Purpose of administration can be a single string or an array; normalize to array.
                    $purpose = $f3['first_purpose_administration'] ?? [];
                    if (!is_array($purpose) && !is_null($purpose)) {
                        $purpose = [$purpose];
                    }

                    // Drug types (can be multiple)
                    $types = $f3['first_drug_type'] ?? [];
                    if (!is_array($types) && !is_null($types)) {
                        $types = [$types];
                    }

                    $regimen  = $f3['first_drug_regimen']  ?? '';
                    $response = $f3['first_drug_response'] ?? '';

                    // Adverse events (None, Minor, Major, Serious, Unknown)
                    $adverse = $f3['first_drug_adverse'] ?? [];
                    if (!is_array($adverse) && !is_null($adverse)) {
                        $adverse = [$adverse];
                    }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="7">121</td>
                    <td class="s73" colspan="7" rowspan="7">Anti-cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>

                    {{-- Neoadjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Neoadjuvant', $purpose) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>

                    {{-- Adjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Adjuvant', $purpose) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $purpose) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s64"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">
                        Drug Type/s <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can be multiple)</span>
                    </td>

                    {{-- Cytotoxic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytotoxic', $types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>

                    {{-- Immunologic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Immunologic', $types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>

                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td></td>
                    <td></td>
                    <td class="s31"></td>

                    {{-- Hormonal --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hormonal', $types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>

                    {{-- Targeted --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Targeted', $types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>

                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>

                <tr style="height: 29px">
                    {{-- YES (Drug/s Regimen) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $drugGiven ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19">{{ $regimen }}</td>
                </tr>

                <tr style="height: 29px">
                    {{-- NO (Drug Response) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$drugGiven ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19">{{ $response }}</td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $adverse) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $adverse) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $adverse) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $adverse) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $adverse) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr>






                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="7">122</td>
                    <td class="s73" colspan="7" rowspan="7">Second Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s <span
                            style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                            be multiple)</span></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr> --}}

                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];

                    $drugGiven2 = ($f3['second_drug'] ?? '') === 'Yes';

                    // Purpose of administration (can be single string or array)
                    $purpose2 = $f3['second_purpose_administration'] ?? [];
                    if (!is_array($purpose2) && !is_null($purpose2)) {
                        $purpose2 = [$purpose2];
                    }

                    // Drug types (can be multiple)
                    $types2 = $f3['second_drug_type'] ?? [];
                    if (!is_array($types2) && !is_null($types2)) {
                        $types2 = [$types2];
                    }

                    $regimen2  = $f3['second_drug_regimen']  ?? '';
                    $response2 = $f3['second_drug_response'] ?? '';

                    // Adverse events (None, Minor, Major, Serious, Unknown) — can be single or array
                    $adverse2 = $f3['second_drug_adverse'] ?? [];
                    if (!is_array($adverse2) && !is_null($adverse2)) {
                        $adverse2 = [$adverse2];
                    }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="7">122</td>
                    <td class="s73" colspan="7" rowspan="7">Second Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>

                    {{-- Neoadjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Neoadjuvant', $purpose2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>

                    {{-- Adjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Adjuvant', $purpose2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $purpose2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s64"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s
                        <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can be multiple)</span>
                    </td>

                    {{-- Cytotoxic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytotoxic', $types2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>

                    {{-- Immunologic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Immunologic', $types2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>

                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- Keep structure exactly as provided --}}
                    <td class="s19" dir="ltr">
                        {{-- This leading checkbox is in your template; use it to reflect "Yes" for second_drug --}}
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $drugGiven2 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>

                    {{-- Hormonal --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hormonal', $types2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>

                    {{-- Targeted --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Targeted', $types2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>

                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>

                <tr style="height: 29px">
                    {{-- "No" row and Drug/s Regimen field (kept as in your template) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$drugGiven2 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19">{{ $regimen2 }}</td>
                </tr>

                <tr style="height: 29px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19">{{ $response2 }}</td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $adverse2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $adverse2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $adverse2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $adverse2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $adverse2) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr>




                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="7">123</td>
                    <td class="s73" colspan="7" rowspan="7">Third Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s <span
                            style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                            be multiple)</span></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr> --}}


                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];

                    $drugGiven3 = ($f3['third_drug'] ?? '') === 'Yes';

                    // Purpose (single string or array)
                    $purpose3 = $f3['third_purpose_administration'] ?? [];
                    if (!is_array($purpose3) && !is_null($purpose3)) {
                        $purpose3 = [$purpose3];
                    }

                    // Drug types (can be multiple)
                    $types3 = $f3['third_drug_type'] ?? [];
                    if (!is_array($types3) && !is_null($types3)) {
                        $types3 = [$types3];
                    }

                    $regimen3  = $f3['third_drug_regimen']  ?? '';
                    $response3 = $f3['third_drug_response'] ?? '';

                    // Adverse events (can be single or array)
                    $adverse3 = $f3['third_drug_adverse'] ?? [];
                    if (!is_array($adverse3) && !is_null($adverse3)) {
                        $adverse3 = [$adverse3];
                    }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="7">123</td>
                    <td class="s73" colspan="7" rowspan="7">Third Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>

                    {{-- Neoadjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Neoadjuvant', $purpose3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>

                    {{-- Adjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Adjuvant', $purpose3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $purpose3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s64"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s
                        <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can be multiple)</span>
                    </td>

                    {{-- Cytotoxic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytotoxic', $types3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>

                    {{-- Immunologic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Immunologic', $types3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>

                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- Leading checkbox block as in your template; ties to third_drug (Yes) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $drugGiven3 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>

                    {{-- Hormonal --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hormonal', $types3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>

                    {{-- Targeted --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Targeted', $types3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>

                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>

                <tr style="height: 29px">
                    {{-- "No" row and Drug/s Regimen --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$drugGiven3 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19">{{ $regimen3 }}</td>
                </tr>

                <tr style="height: 29px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19">{{ $response3 }}</td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $adverse3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $adverse3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $adverse3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $adverse3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $adverse3) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr>







                {{-- <tr style="height: 21px">
                    
                    <td class="s99" dir="ltr" rowspan="7">124</td>
                    <td class="s100" colspan="7" rowspan="7">Fourth Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s <span
                            style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                            be multiple)</span></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr> --}}



                @php
                    $f3 = $data->f3cancertreatmenthistories ?? [];

                    $drugGiven4 = ($f3['fourth_drug'] ?? '') === 'Yes';

                    // Purpose of administration (single string or array)
                    $purpose4 = $f3['fourth_purpose_administration'] ?? [];
                    if (!is_array($purpose4) && !is_null($purpose4)) {
                        $purpose4 = [$purpose4];
                    }

                    // Drug types (can be multiple)
                    $types4 = $f3['fourth_drug_type'] ?? [];
                    if (!is_array($types4) && !is_null($types4)) {
                        $types4 = [$types4];
                    }

                    $regimen4  = $f3['fourth_drug_regimen']  ?? '';
                    $response4 = $f3['fourth_drug_response'] ?? '';

                    // Adverse events (can be single or array)
                    $adverse4 = $f3['fourth_drug_adverse'] ?? [];
                    if (!is_array($adverse4) && !is_null($adverse4)) {
                        $adverse4 = [$adverse4];
                    }
                @endphp

                <tr style="height: 21px">
                    <td class="s99" dir="ltr" rowspan="7">124</td>
                    <td class="s100" colspan="7" rowspan="7">Fourth Line: Anti-Cancer Drug</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9">Purpose of Drug Administration</td>

                    {{-- Neoadjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Neoadjuvant', $purpose4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Neoadjuvant</td>

                    {{-- Adjuvant --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Adjuvant', $purpose4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Adjuvant</td>

                    {{-- Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Palliative', $purpose4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s64"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Drug Type/s
                        <span style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can be multiple)</span>
                    </td>

                    {{-- Cytotoxic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytotoxic', $types4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s32" colspan="4">Cytotoxic</td>

                    {{-- Immunologic --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Immunologic', $types4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s32" colspan="6">Immunologic</td>

                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s32"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- Leading Yes checkbox (keep structure) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $drugGiven4 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>

                    {{-- Hormonal --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hormonal', $types4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Hormonal</td>

                    {{-- Targeted --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Targeted', $types4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s57" colspan="6">Targeted</td>

                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s57"></td>
                    <td class="s64"></td>
                </tr>

                <tr style="height: 29px">
                    {{-- "No" row and Drug/s Regimen --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$drugGiven4 ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s73" colspan="9">Drug/s Regimen</td>
                    <td class="s112" colspan="19">{{ $regimen4 }}</td>
                </tr>

                <tr style="height: 29px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9">Drug Response</td>
                    <td class="s112" colspan="19">{{ $response4 }}</td>
                </tr>

                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $adverse4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $adverse4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $adverse4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>

                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s36"></td>
                    <td class="s31"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s98"></td>

                    {{-- Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $adverse4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $adverse4) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s82"></td>
                    <td class="s64"></td>
                </tr>






                <tr style="height: 24px">
                    
                    <td class="s75" colspan="40">R a d i o t h e r a p y</td>
                </tr>


                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="10">125</td>
                    <td class="s73" colspan="7" rowspan="10">Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If
                        </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}


                @php
                    $t = $data->f3treatmenthistory2s ?? [];

                    // Yes/No for first course of radiotherapy
                    $rt1Yes = ($t['first_radio'] ?? '') === 'Yes';

                    // Types can be single string or array
                    $rt1Types = $t['first_radio_type'] ?? [];
                    if (!is_array($rt1Types) && !is_null($rt1Types)) { $rt1Types = [$rt1Types]; }

                    $rt1TypeOther = $t['first_radio_type_other'] ?? '';

                    // Sequence: "Concurrent ChemoRT" or "Sequential"
                    $rt1Seq = $t['first_sequence'] ?? '';

                    // Treatment Goal: "Definitive" or "Palliative"
                    $rt1Goal = $t['first_treatment_goal'] ?? '';

                    // Adverse events can be single or array: None / Minor / Major / Serious / Unknown
                    $rt1AE = $t['first_radio_adverse'] ?? [];
                    if (!is_array($rt1AE) && !is_null($rt1AE)) { $rt1AE = [$rt1AE]; }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="10">125</td>
                    <td class="s73" colspan="7" rowspan="10">Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>

                    {{-- 1) 2D conventional --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('2D conventional', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>

                    {{-- 4) IORT --}}
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IORT', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>

                    {{-- 7) SRS/SRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('SRS/SRT', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>

                    {{-- 2) 3DCRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('3DCRT', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>

                    {{-- 5) Electron Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Electron Therapy', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>

                    {{-- 8) Proton Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Proton Therapy', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    {{-- Yes row --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $rt1Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>

                    {{-- 3) IMRT/VMAT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IMRT/VMAT', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>

                    {{-- 6) Brachytherapy --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Brachytherapy', $rt1Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>

                    {{-- 9) Others, specify --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ (!empty($rt1TypeOther)) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7">{{ $rt1TypeOther }}</td>
                </tr>
                <tr style="height: 21px">
                    {{-- No row --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$rt1Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>

                    {{-- Sequence: Concurrent ChemoRT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt1Seq === 'Concurrent ChemoRT') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>

                    {{-- Sequence: Sequential --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt1Seq === 'Sequential') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>

                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>

                    {{-- Goal: Definitive --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt1Goal === 'Definitive') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>

                    {{-- Goal: Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt1Goal === 'Palliative') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- AE: None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $rt1AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- AE: Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $rt1AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- AE: Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $rt1AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>

                    {{-- AE: Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $rt1AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- AE: Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $rt1AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>





                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="10">126</td>
                    <td class="s73" colspan="7" rowspan="10">Second Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If
                        </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}




                @php
                    $t = $data->f3treatmenthistory2s ?? [];

                    // Yes/No
                    $rt2Yes = ($t['second_radio'] ?? '') === 'Yes';

                    // Types can be string or array
                    $rt2Types = $t['second_radio_type'] ?? [];
                    if (!is_array($rt2Types) && !is_null($rt2Types)) { $rt2Types = [$rt2Types]; }

                    $rt2TypeOther = $t['second_radio_type_other'] ?? '';

                    // Sequence: "Concurrent ChemoRT" or "Sequential"
                    $rt2Seq = $t['second_sequence'] ?? '';

                    // Treatment Goal: "Definitive" or "Palliative"
                    $rt2Goal = $t['second_treatment_goal'] ?? '';

                    // Adverse events can be single or array: None / Minor / Major / Serious / Unknown
                    $rt2AE = $t['second_radio_adverse'] ?? [];
                    if (!is_array($rt2AE) && !is_null($rt2AE)) { $rt2AE = [$rt2AE]; }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="10">126</td>
                    <td class="s73" colspan="7" rowspan="10">Second Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 1) 2D conventional --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('2D conventional', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    {{-- 4) IORT --}}
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IORT', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    {{-- 7) SRS/SRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('SRS/SRT', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 2) 3DCRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('3DCRT', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    {{-- 5) Electron Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Electron Therapy', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    {{-- 8) Proton Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Proton Therapy', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    {{-- 3) IMRT/VMAT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IMRT/VMAT', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    {{-- 6) Brachytherapy --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Brachytherapy', $rt2Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    {{-- 9) Others, specify --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ (!empty($rt2TypeOther)) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7">{{ $rt2TypeOther }}</td>
                </tr>
                <tr style="height: 21px">
                    {{-- Yes row (Second Course done?) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $rt2Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    {{-- No row --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$rt2Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>

                    {{-- Sequence: Concurrent ChemoRT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt2Seq === 'Concurrent ChemoRT') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>

                    {{-- Sequence: Sequential --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt2Seq === 'Sequential') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>

                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>

                    {{-- Goal: Definitive --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt2Goal === 'Definitive') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>

                    {{-- Goal: Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt2Goal === 'Palliative') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- AE: None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $rt2AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- AE: Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $rt2AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- AE: Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $rt2AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>

                    {{-- AE: Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $rt2AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- AE: Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $rt2AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>








                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="10">127</td>
                    <td class="s73" colspan="7" rowspan="10">Third Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If
                        </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}

                @php
                    $t = $data->f3treatmenthistory2s ?? [];

                    // Yes/No
                    $rt3Yes = ($t['third_radio'] ?? '') === 'Yes';

                    // Types can be string or array
                    $rt3Types = $t['third_radio_type'] ?? [];
                    if (!is_array($rt3Types) && !is_null($rt3Types)) { $rt3Types = [$rt3Types]; }

                    $rt3TypeOther = $t['third_radio_type_other'] ?? '';

                    // Sequence: "Concurrent ChemoRT" or "Sequential"
                    $rt3Seq = $t['third_sequence'] ?? '';

                    // Treatment Goal: "Definitive" or "Palliative"
                    $rt3Goal = $t['third_treatment_goal'] ?? '';

                    // Adverse events (array or single): None / Minor / Major / Serious / Unknown
                    $rt3AE = $t['third_radio_adverse'] ?? [];
                    if (!is_array($rt3AE) && !is_null($rt3AE)) { $rt3AE = [$rt3AE]; }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="10">127</td>
                    <td class="s73" colspan="7" rowspan="10">Third Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 1) 2D conventional --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('2D conventional', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    {{-- 4) IORT --}}
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IORT', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    {{-- 7) SRS/SRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('SRS/SRT', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    {{-- 2) 3DCRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('3DCRT', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    {{-- 5) Electron Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Electron Therapy', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    {{-- 8) Proton Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Proton Therapy', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 3) IMRT/VMAT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IMRT/VMAT', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    {{-- 6) Brachytherapy --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Brachytherapy', $rt3Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    {{-- 9) Others, specify --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ (!empty($rt3TypeOther)) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7">{{ $rt3TypeOther }}</td>
                </tr>
                <tr style="height: 21px">
                    {{-- Yes row (Third Course done?) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $rt3Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    {{-- No row --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$rt3Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>

                    {{-- Sequence: Concurrent ChemoRT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt3Seq === 'Concurrent ChemoRT') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>

                    {{-- Sequence: Sequential --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt3Seq === 'Sequential') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>

                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>

                    {{-- Goal: Definitive --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt3Goal === 'Definitive') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>

                    {{-- Goal: Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt3Goal === 'Palliative') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- AE: None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $rt3AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">None</div></td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- AE: Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $rt3AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Major</div></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- AE: Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $rt3AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div></td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>

                    {{-- AE: Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $rt3AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Minor</div></td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- AE: Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $rt3AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Serious</div></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>










                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="10">128</td>
                    <td class="s73" colspan="7" rowspan="10">Fourth Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If
                        </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">IORT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}




                @php
                    $t = $data->f3treatmenthistory2s ?? [];

                    // Yes/No
                    $rt4Yes = ($t['fourth_radio'] ?? '') === 'Yes';

                    // Types (can be string or array)
                    $rt4Types = $t['fourth_radio_type'] ?? [];
                    if (!is_array($rt4Types) && !is_null($rt4Types)) { $rt4Types = [$rt4Types]; }

                    $rt4TypeOther = $t['fourth_radio_type_other'] ?? '';

                    // Sequence: "Concurrent ChemoRT" or "Sequential"
                    $rt4Seq = $t['fourth_sequence'] ?? '';

                    // Treatment Goal: "Definitive" or "Palliative"
                    $rt4Goal = $t['fourth_treatment_goal'] ?? '';

                    // Adverse events (array or single): None / Minor / Major / Serious / Unknown
                    $rt4AE = $t['fourth_radio_adverse'] ?? [];
                    if (!is_array($rt4AE) && !is_null($rt4AE)) { $rt4AE = [$rt4AE]; }
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="10">128</td>
                    <td class="s73" colspan="7" rowspan="10">Fourth Course: Radiotherapy</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    <td class="s49" dir="ltr" colspan="7"><span style="font-weight:normal;">If </span>yes<span style="font-weight:normal;">, indicate</span> type:</td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 1) 2D conventional --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('2D conventional', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:128px;left:-1px">2D conventional</div></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    {{-- 4) IORT --}}
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IORT', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">IORT</div></td>
                    <td class="s22"></td>
                    <td class="s114"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    {{-- 7) SRS/SRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('SRS/SRT', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">SRS/SRT</div></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s81"></td>
                    {{-- 2) 3DCRT --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('3DCRT', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">3DCRT</div></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    {{-- 5) Electron Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Electron Therapy', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:128px;left:-1px">Electron Therapy</div></td>
                    <td class="s21"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    {{-- 8) Proton Therapy --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Proton Therapy', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:128px;left:-1px">Proton Therapy</div></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s3"></td>
                    <td class="s3"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 21px">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s117"></td>
                    {{-- 3) IMRT/VMAT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('IMRT/VMAT', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:102px;left:-1px">IMRT/VMAT</div></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    {{-- 6) Brachytherapy --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Brachytherapy', $rt4Types) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">6</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:102px;left:-1px">Brachytherapy</div></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s96"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    {{-- 9) Others, specify --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ (!empty($rt4TypeOther)) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">9</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s116" colspan="7">{{ $rt4TypeOther }}</td>
                </tr>
                <tr style="height: 21px">
                    {{-- Yes row (Fourth Course done?) --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $rt4Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Sequence:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    {{-- No row --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ !$rt4Yes ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>

                    {{-- Sequence: Concurrent ChemoRT --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt4Seq === 'Concurrent ChemoRT') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="7">Concurrent ChemoRT</td>
                    <td class="s63"></td>

                    {{-- Sequence: Sequential --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt4Seq === 'Sequential') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Sequential</td>

                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                    <td class="s32" colspan="23">Specify <span style="font-size:11pt;font-family:Arial;font-weight:bold;">Treatment Goal:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>

                    {{-- Goal: Definitive --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt4Goal === 'Definitive') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s57" colspan="4">Definitive</td>
                    <td class="s63"></td>

                    {{-- Goal: Palliative --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($rt4Goal === 'Palliative') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="4">Palliative</td>

                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s58" colspan="2"></td>
                    <td class="s57" colspan="4"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s31"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>

                    {{-- AE: None --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $rt4AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">None</div></td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>

                    {{-- AE: Major --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Major', $rt4AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Major</div></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>

                    {{-- AE: Unknown --}}
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Unknown', $rt4AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div></td>
                    <td class="s21"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s82"></td>
                    <td class="s83"></td>

                    {{-- AE: Minor --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Minor', $rt4AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Minor</div></td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>

                    {{-- AE: Serious --}}
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Serious', $rt4AE) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Serious</div></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s97"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>




                <tr style="height: 29px">
                    
                    <td class="s75" colspan="40">T h e r a n o s t i c s</td>
                </tr>




{{--                 
                <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="8">129</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Theranostics</td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)
                        </div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton
                            Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s120"></td>
                    <td class="s120"></td>
                    <td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide
                            Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)
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
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s57"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}


                @php
                    $t = $data->f3treatmenthistory2s ?? [];
                    $first_thera_yes = ($t['first_theranostics'] ?? 'No') === 'Yes';
                    $first_thera_types = $t['first_thera_type'] ?? [];
                    if (!is_array($first_thera_types)) { $first_thera_types = [$first_thera_types]; }

                    $first_thera_goal = $t['first_thera_goal'] ?? null;

                    $first_thera_adverse = $t['first_thera_adverse'] ?? [];
                    if (!is_array($first_thera_adverse)) { $first_thera_adverse = [$first_thera_adverse]; }

                    // Helper closures for checkbox state
                    $cb = fn(bool $on) => $on ? 'checked' : 'unchecked';
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="8">129</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Theranostics</td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Radioactive Iodine Therapy (RAI)', $first_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s36"></td><td class="s36"></td><td class="s23"></td><td class="s23"></td><td class="s23"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Selective Internal Radiaton Therapy (SIRT)', $first_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s21"></td><td class="s21"></td><td class="s120"></td><td class="s120"></td><td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Peptide Receptor Radionuclide Therapy (PRRT)', $first_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Others', $first_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td><td class="s118"></td><td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($first_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('PSMA Radioligand Therapy (PRLT)', $first_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)</div>
                    </td>
                    <td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td>
                    <td class="s68"></td><td class="s68"></td>
                    <td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td>
                    <td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(!$first_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($first_thera_goal === 'Definitive') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td><td class="s77"></td><td class="s77"></td><td class="s57"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($first_thera_goal === 'Palliative') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td><td class="s63"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('None', $first_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Major', $first_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Unknown', $first_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Minor', $first_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Serious', $first_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>














                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="8">130</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Second Line: Theranostics
                    </td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)
                        </div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton
                            Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s120"></td>
                    <td class="s120"></td>
                    <td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide
                            Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)
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
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s57"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}

                @php
                    $t = $data->f3treatmenthistory2s ?? [];
                    $second_thera_yes = ($t['second_theranostics'] ?? 'No') === 'Yes';

                    $second_thera_types = $t['second_thera_type'] ?? [];
                    if (!is_array($second_thera_types)) { $second_thera_types = [$second_thera_types]; }

                    $second_thera_goal = $t['second_thera_goal'] ?? null;

                    $second_thera_adverse = $t['second_thera_adverse'] ?? [];
                    if (!is_array($second_thera_adverse)) { $second_thera_adverse = [$second_thera_adverse]; }

                    $cb = fn(bool $on) => $on ? 'checked' : 'unchecked';
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="8">130</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Second Line: Theranostics</td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Radioactive Iodine Therapy (RAI)', $second_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s36"></td><td class="s36"></td>
                    <td class="s23"></td><td class="s23"></td><td class="s23"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Selective Internal Radiaton Therapy (SIRT)', $second_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s21"></td><td class="s21"></td>
                    <td class="s120"></td><td class="s120"></td><td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Peptide Receptor Radionuclide Therapy (PRRT)', $second_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Others', $second_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td><td class="s118"></td><td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($second_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('PSMA Radioligand Therapy (PRLT)', $second_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)</div>
                    </td>
                    <td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td>
                    <td class="s68"></td><td class="s68"></td>
                    <td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td>
                    <td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(!$second_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($second_thera_goal === 'Definitive') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td><td class="s77"></td><td class="s77"></td><td class="s57"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($second_thera_goal === 'Palliative') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td><td class="s63"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('None', $second_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Major', $second_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Unknown', $second_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Minor', $second_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Serious', $second_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>











                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="8">131</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Third Line: <br>Theranostics
                    </td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)
                        </div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton
                            Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s120"></td>
                    <td class="s120"></td>
                    <td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide
                            Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)
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
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s57"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}

                @php
                    $t = $data->f3treatmenthistory2s ?? [];
                    $third_thera_yes = ($t['third_theranostics'] ?? 'No') === 'Yes';

                    $third_thera_types = $t['third_thera_type'] ?? [];
                    if (!is_array($third_thera_types)) { $third_thera_types = [$third_thera_types]; }

                    // treat "Others" and the exact label text as equivalent
                    $others_labels = ['Others', 'Others plaese specify'];
                    $has_others = count(array_intersect(array_map('strval', $third_thera_types), $others_labels)) > 0;

                    $third_thera_goal = $t['third_thera_goal'] ?? null;

                    $third_thera_adverse = $t['third_thera_adverse'] ?? [];
                    if (!is_array($third_thera_adverse)) { $third_thera_adverse = [$third_thera_adverse]; }

                    $cb = fn(bool $on) => $on ? 'checked' : 'unchecked';
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="8">131</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Third Line: <br>Theranostics</td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23">
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span>
                    </td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Radioactive Iodine Therapy (RAI)', $third_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s36"></td><td class="s36"></td>
                    <td class="s23"></td><td class="s23"></td><td class="s23"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Selective Internal Radiaton Therapy (SIRT)', $third_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s21"></td><td class="s21"></td>
                    <td class="s120"></td><td class="s120"></td><td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Peptide Receptor Radionuclide Therapy (PRRT)', $third_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($has_others) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td><td class="s118"></td><td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($third_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('PSMA Radioligand Therapy (PRLT)', $third_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)</div>
                    </td>
                    <td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td>
                    <td class="s68"></td><td class="s68"></td>
                    <td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td>
                    <td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(!$third_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23">
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span>
                    </td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($third_thera_goal === 'Definitive') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td><td class="s77"></td><td class="s77"></td><td class="s57"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($third_thera_goal === 'Palliative') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td><td class="s63"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?</td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('None', $third_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">None</div></td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Major', $third_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Major</div></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Unknown', $third_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div></td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Minor', $third_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Minor</div></td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Serious', $third_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Serious</div></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>










                {{-- <tr style="height: 21px">
                    
                    <td class="s65" dir="ltr" rowspan="8">132</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Fourth Line: Theranostics
                    </td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)
                        </div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton
                            Therapy (SIRT)</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s120"></td>
                    <td class="s120"></td>
                    <td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide
                            Therapy (PRRT)</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)
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
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23"><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s57"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Major</div>
                    </td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Minor</div>
                    </td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Serious</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr> --}}




                @php
                    $t = $data->f3treatmenthistory2s ?? [];
                    $fourth_thera_yes = ($t['fourth_theranostics'] ?? 'No') === 'Yes';

                    $fourth_thera_types = $t['fourth_thera_type'] ?? [];
                    if (!is_array($fourth_thera_types)) { $fourth_thera_types = [$fourth_thera_types]; }

                    // treat "Others" and the exact label text as equivalent
                    $others_labels = ['Others', 'Others plaese specify'];
                    $has_others = count(array_intersect(array_map('strval', $fourth_thera_types), $others_labels)) > 0;

                    $fourth_thera_goal = $t['fourth_thera_goal'] ?? null;

                    $fourth_thera_adverse = $t['fourth_thera_adverse'] ?? [];
                    if (!is_array($fourth_thera_adverse)) { $fourth_thera_adverse = [$fourth_thera_adverse]; }

                    $cb = fn(bool $on) => $on ? 'checked' : 'unchecked';
                @endphp

                <tr style="height: 21px">
                    <td class="s65" dir="ltr" rowspan="8">132</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="8">Fourth Line: Theranostics</td>
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s49" colspan="23">
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">, indicate type:</span>
                    </td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2" colspan="2"></td>
                    <td class="s44" colspan="2"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Radioactive Iodine Therapy (RAI)', $fourth_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:232px;left:-1px">Radioactive Iodine Therapy (RAI)</div></td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s36"></td><td class="s36"></td>
                    <td class="s23"></td><td class="s23"></td><td class="s23"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Selective Internal Radiaton Therapy (SIRT)', $fourth_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:284px;left:-1px">Selective Internal Radiaton Therapy (SIRT)</div></td>
                    <td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td><td class="s40"></td>
                    <td class="s21"></td><td class="s21"></td>
                    <td class="s120"></td><td class="s120"></td><td class="s121"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Peptide Receptor Radionuclide Therapy (PRRT)', $fourth_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:336px;left:-1px">Peptide Receptor Radionuclide Therapy (PRRT)</div></td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s41" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($has_others) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:154px;left:-1px">Others plaese specify</div></td>
                    <td class="s43"></td><td class="s43"></td><td class="s43"></td><td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s118"></td><td class="s118"></td><td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($fourth_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('PSMA Radioligand Therapy (PRLT)', $fourth_thera_types)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">3</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:258px;left:-1px">PSMA Radioligand Therapy (PRLT)</div></td>
                    <td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td><td class="s54"></td>
                    <td class="s68"></td><td class="s68"></td>
                    <td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td><td class="s58"></td>
                    <td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(!$fourth_thera_yes) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s49" colspan="23">
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">If </span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">, specify the</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:bold;"> goal</span>
                        <span style="font-size:11pt;font-family:Arial;font-weight:normal;">:</span>
                    </td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s119"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($fourth_thera_goal === 'Definitive') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">1</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Definitive</div></td>
                    <td class="s76"></td><td class="s77"></td><td class="s77"></td><td class="s57"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb($fourth_thera_goal === 'Palliative') }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s57" colspan="7">Palliative</td>
                    <td class="s63"></td><td class="s63"></td>
                    <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                    <td class="s122"></td><td class="s122"></td><td class="s123"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s73" colspan="9" rowspan="2">Is there medically confirmed adversed event?</td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('None', $fourth_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">None</div></td>
                    <td class="s22"></td>
                    <td class="s93"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Major', $fourth_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Major</div></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s3"></td>
                    <td class="s19" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Unknown', $fourth_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div></td>
                    <td class="s26"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s80"></td>
                </tr>
                <tr style="height: 21px">
                    <td class="s58"></td>
                    <td class="s82"></td>
                    <td class="s58"></td>
                    <td class="s98"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Minor', $fourth_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">2</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:50px;left:-1px">Minor</div></td>
                    <td class="s77"></td>
                    <td class="s94"></td>
                    <td class="s95"></td>
                    <td class="s51" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $cb(in_array('Serious', $fourth_thera_adverse)) }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge"><div class="softmerge-inner" style="width:76px;left:-1px">Serious</div></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s96"></td>
                    <td class="s95"></td>
                    <td class="s95"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s98"></td>
                </tr>






                <tr style="height: 24px">
                    
                    <td class="s75" colspan="40">O t h e r C a n c e r D i r e c t e d T h e r a p i e s</td>
                </tr>
                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="5">133</td>
                    <td class="s125" colspan="7" rowspan="5">Other Cancer Directed Therapies</td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s126"></td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:336px;left:-1px"> If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span
                                style="font-size:11pt;font-family:Arial;">, specify other cancer-directed
                                therapies:</span></div>
                    </td>
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
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Blood Transfusion</div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Transarterial chemoembolization
                        </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s21"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Cryoablation </div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Transplant</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s128"></td>
                    <td class="s128"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Embolization </div>
                    </td>
                    <td class="s21"></td>
                    <td class="s21"></td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s32" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s129" colspan="9"></td>
                    <td class="s81"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s80"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">4</td>
                    <td class="s53 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Radiofrequency ablation</div>
                    </td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                    <td class="s77"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s130"></td>
                    <td class="s130"></td>
                    <td class="s130"></td>
                    <td class="s130"></td>
                    <td class="s57"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s57"></td>
                    <td class="s83"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s75" dir="ltr" colspan="40">R e m a r k s</td>
                </tr>
                <tr style="height: 39px">
                    
                    <td class="s65" dir="ltr">134</td>
                    <td class="s16" colspan="7">Remarks</td>
                    <td class="s131" colspan="32"></td>
                </tr> --}}




                @php
                    // Source data
                    $t = $data->f3treatmenthistory2s ?? [];

                    // Other Cancer Directed Therapies
                    $other_yes = ($t['other_cancer'] ?? 'No') === 'Yes';
                    $other_types = $t['other_cancer_type'] ?? [];
                    if (!is_array($other_types)) { $other_types = [$other_types]; }

                    $other_specify = $t['cancer_type_other_specify'] ?? null;

                    // Helper closures
                    $cb = fn(bool $on) => $on ? 'checked' : 'unchecked';
                    $has = fn(string $label) => in_array($label, $other_types, true);
                @endphp

                <tr style="height: 21px">
                <td class="s124" dir="ltr" rowspan="5">133</td>
                <td class="s125" colspan="7" rowspan="5">Other Cancer Directed Therapies</td>
                <td class="s23"></td><td class="s23"></td><td class="s23"></td><td class="s126"></td>
                <td class="s20 softmerge">
                    <div class="softmerge-inner" style="width:336px;left:-1px">
                    If <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span><span style="font-size:11pt;font-family:Arial;">, specify other cancer-directed therapies:</span>
                    </div>
                </td>
                <td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td>
                <td class="s22"></td><td class="s22"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td>
                <td class="s4"></td><td class="s4"></td><td class="s4"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s81"></td>
                </tr>

                <!-- Yes / No -->
                <tr style="height: 21px">
                <!-- Yes -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($other_yes) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">1</td>
                <td class="s44" colspan="2">Yes</td>

                <!-- Blood Transfusion -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Blood Transfusion')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">1</td>
                <td class="s20 softmerge">
                    <div class="softmerge-inner" style="width:154px;left:-1px">Blood Transfusion</div>
                </td>

                <td class="s21"></td><td class="s21"></td><td class="s21"></td><td class="s21"></td>
                <td class="s22"></td><td class="s22"></td><td class="s32"></td><td class="s32"></td><td class="s4"></td>

                <!-- Transarterial chemoembolization -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Transarterial chemoembolization')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">5</td>
                <td class="s20 softmerge">
                    <div class="softmerge-inner" style="width:232px;left:-1px">Transarterial chemoembolization</div>
                </td>

                <td class="s127"></td><td class="s127"></td><td class="s127"></td><td class="s127"></td>
                <td class="s21"></td><td class="s26"></td><td class="s26"></td><td class="s30"></td>
                <td class="s22"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td>
                <td class="s81"></td>
                </tr>

                <tr style="height: 21px">
                <!-- No -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb(!$other_yes) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">2</td>
                <td class="s44" colspan="2">No</td>

                <!-- Cryoablation -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Cryoablation')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">2</td>
                <td class="s20 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Cryoablation</div>
                </td>

                <td class="s21"></td><td class="s21"></td><td class="s22"></td><td class="s22"></td>
                <td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td>
                <td class="s4"></td>

                <!-- Transplant -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Transplant')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">6</td>
                <td class="s20 softmerge">
                    <div class="softmerge-inner" style="width:102px;left:-1px">Transplant</div>
                </td>

                <td class="s127"></td><td class="s127"></td><td class="s128"></td><td class="s128"></td>
                <td class="s32"></td><td class="s4"></td><td class="s4"></td><td class="s4"></td>
                <td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td>
                <td class="s81"></td>
                </tr>

                <tr style="height: 21px">
                <!-- Embolization -->
                <td class="s2"></td><td class="s23"></td><td class="s2"></td><td class="s80"></td>
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Embolization')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">3</td>
                <td class="s20 softmerge"><div class="softmerge-inner" style="width:102px;left:-1px">Embolization</div></td>

                <td class="s21"></td><td class="s21"></td><td class="s22"></td><td class="s22"></td>
                <td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td><td class="s32"></td>

                <!-- Others, specify -->
                <td class="s19" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb(!empty($other_specify)) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s1" dir="ltr">7</td>
                <td class="s32" dir="ltr" colspan="4">Others, specify:</td>
                <td class="s129" colspan="9">{{ $other_specify }}</td>
                <td class="s81"></td>
                </tr>

                <tr style="height: 21px">
                <!-- Radiofrequency ablation -->
                <td class="s2"></td><td class="s23"></td><td class="s2"></td><td class="s80"></td>
                <td class="s51" dir="ltr">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                    <use href="#{{ $cb($has('Radiofrequency ablation')) }}-checkbox-id" fill="#000000" />
                    </svg>
                </td>
                <td class="s52" dir="ltr">4</td>
                <td class="s53 softmerge">
                    <div class="softmerge-inner" style="width:180px;left:-1px">Radiofrequency ablation</div>
                </td>

                <td class="s76"></td><td class="s76"></td><td class="s76"></td><td class="s76"></td><td class="s76"></td>
                <td class="s77"></td><td class="s77"></td>
                <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                <td class="s130"></td><td class="s130"></td><td class="s130"></td><td class="s130"></td>
                <td class="s57"></td><td class="s63"></td><td class="s63"></td><td class="s63"></td>
                <td class="s57"></td><td class="s57"></td><td class="s57"></td><td class="s57"></td>
                <td class="s83"></td>
                </tr>

                <!-- Remarks header -->
                <tr style="height: 21px">
                <td class="s75" dir="ltr" colspan="40">R e m a r k s</td>
                </tr>
                <tr style="height: 39px">
                <td class="s65" dir="ltr">134</td>
                <td class="s16" colspan="7">Remarks</td>
                <td class="s131" colspan="32">{{ $t['remarks'] ?? '' }}</td>
                </tr>




                <tr style="height: 29px">
                    
                    <td class="s132" colspan="40">F I N A N C I A L S U P P O R T M E C H A N I S M</td>
                </tr>

                @php
                    $f3financialsupports = $data->f3financialsupports ?? [];
                    $financial_support = $f3financialsupports['financial_support'] == "Yes" ? true : false;
                    $financial_type = $f3financialsupports['financial_type'] ?? [];

                @endphp

                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="17">135</td>
                    <td class="s73" colspan="7" rowspan="17">Did patient avail any financial support
                        mechanism?</td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s31"></td>
                    <td class="s133 softmerge">
                        <div class="softmerge-inner" style="width:440px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, specify
                                financial support mechanism: </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                                be multiple)</span></div>
                    </td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s134"></td>
                    <td class="s93"></td>
                    <td class="s93"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Discounts under Law (e.g. Senior Citizen, PWD)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s20 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:336px;left:-1px">
                            Discounts under Law (e.g. Senior Citizen, PWD)</div>
                    </td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('PhilHealth', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s2" colspan="8">PhilHealth</td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Health Maintenance Organization (HMO)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">
                            Health Maintenance Organization (HMO)</div>
                    </td>
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
                    <td class="s22"></td>
                    <td class="s32"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Philippine Charity Sweepstakes Office (PCSO)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:310px;left:-1px">
                            Philippine Charity Sweepstakes Office (PCSO)</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Assistance to Individuals in Crisis Situations (AICS)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s32" colspan="24">Assistance to Individuals in Crisis Situations (AICS)</td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cancer Assistance Fund (CAF)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s2" colspan="13">Cancer Assistance Fund (CAF)</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s135 softmerge">
                        <div class="softmerge-inner" style="width:544px;left:-1px">
                            Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)</div>
                    </td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s93"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $financial_support ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s44" colspan="2">Yes</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hospital Assistance Funds', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s135 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Hospital Assistance Funds</div>
                    </td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s137"></td>
                    <td class="s137"></td>
                    <td class="s138"></td>
                    <td class="s138"></td>
                    <td class="s138"></td>
                    <td class="s138"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ !$financial_support ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s44" colspan="2">No</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s135 softmerge">
                        <div class="softmerge-inner" style="width:492px;left:-1px">
                            Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)</div>
                    </td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Philippine Amusement and Gaming Corporation (PAGCOR)', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:414px;left:-1px">Philippine Amusement and Gaming Corporation (PAGCOR)</div>
                    </td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s136"></td>
                    <td class="s40"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Non-Government Org. / Civil Society Org.', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Non-Government Org. / Civil Society Org.</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Clinical Trial', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Clinical Trial</div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Charitable Institutions', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s2" colspan="12">Charitable Institutions</td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Private Sector Assistance Program', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">Private Sector Assistance Program
                        </div>
                    </td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s117"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('None', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s20 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s23"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s126"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s139"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $financial_type) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">16</td>
                    <td class="s57" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s140" dir="ltr" colspan="17">{{ $data->f3financialsupports['financial_other'] ?? '' }}</td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s62"></td>
                    <td class="s91"></td>
                </tr>



                @php
                    $cspmap_meds = $data->f3financialsupports['cspmap_meds'] ?? [];
                @endphp
                
                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="31">136</td>
                    <td class="s73" dir="ltr" colspan="7" rowspan="31">If CSPMAP is checked, select
                        the medicines availed under the CSPMAP program. <br><span
                            style="font-weight:normal;font-style:italic;">(can be multiple)</span></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Asparaginase 10,000 IU vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s3" colspan="12">Asparaginase 10,000 IU vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Idarubicin 5 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">32</td>
                    <td class="s3" colspan="13">Idarubicin 5 mg vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bicalutamide 50 mg', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s3" colspan="12">Bicalutamide 50 mg</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ifosfamide 1 g vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">33</td>
                    <td class="s3" colspan="13">Ifosfamide 1 g vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bleomycin (as Sulfate) 15 mg Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s3" colspan="12">Bleomycin (as Sulfate) 15 mg Vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Imatinib 400 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">34</td>
                    <td class="s3" colspan="13">Imatinib 400 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Calcium Folinate (Leucovorin Calcium) 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s3" colspan="12">Calcium Folinate (Leucovorin Calcium) 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Imatinib Mesilate 100 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">35</td>
                    <td class="s3" colspan="13">Imatinib Mesilate 100 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Capecitabine 500 mg Tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s3" colspan="12">Capecitabine 500 mg Tablet</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Irinotecan 40 mg/2 mL vial concentrate vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">36</td>
                    <td class="s3" colspan="13">Irinotecan 40 mg/2 mL vial concentrate vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Carboplatin 150 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s3" colspan="12">Carboplatin 150 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Letrozole 2.5 mg Tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">37</td>
                    <td class="s3" colspan="13">Letrozole 2.5 mg Tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Carboplatin 450 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s3" colspan="12">Carboplatin 450 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Leuproreline Acetate 3.75 mg vial (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">38</td>
                    <td class="s3" colspan="13">Leuproreline Acetate 3.75 mg vial (PFS)</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cisplatin 1 mg/mL, 10 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s3" colspan="12">Cisplatin 1 mg/mL, 10 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Mercaptopurine 50 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">39</td>
                    <td class="s3" colspan="13">Mercaptopurine 50 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cisplatin 1 mg/mL, 50 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s3" colspan="12">Cisplatin 1 mg/mL, 50 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Mesna 100 mg/mL, 4 mL Amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">40</td>
                    <td class="s3" colspan="13">Mesna 100 mg/mL, 4 mL Amp</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cyclophosphamide 500 mg powder vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s3" colspan="12">Cyclophosphamide 500 mg powder vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Methotrexate 2.5 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">41</td>
                    <td class="s3" colspan="13">Methotrexate 2.5 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytarabine 100 mg/mL 1 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s3" colspan="12">Cytarabine 100 mg/mL 1 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Methotrexate 25 mg/mL, 2 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">42</td>
                    <td class="s3" colspan="13">Methotrexate 25 mg/mL, 2 mL vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Cytarabine 100 mg/mL 5 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s3" colspan="12">Cytarabine 100 mg/mL 5 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Metoclopramide 5 mg/mL, 2 mL Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">43</td>
                    <td class="s3" colspan="13">Metoclopramide 5 mg/mL, 2 mL Ampule</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Dacarbazine 200 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s3" colspan="12">Dacarbazine 200 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 10 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">44</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 10 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Dactinomycin (Actinomycin D) 500 mcg powder vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s3" colspan="12">Dactinomycin (Actinomycin D) 500 mcg powder vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">45</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Diazepam 5mg/mL, 2 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s3" colspan="12">Diazepam 5mg/mL, 2 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 30 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">46</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 30 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Diphenhydramine (as Hydrochloride)  50 mg/mL, 1 mL Amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">16</td>
                    <td class="s3" colspan="12">Diphenhydramine (as Hydrochloride)  50 mg/mL, 1 mL Amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Omeprazole 40 mg powder vial + 10 mL solvent Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">47</td>
                    <td class="s3" colspan="13">Omeprazole 40 mg powder vial + 10 mL solvent Ampule</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Docetaxel 20 mg/mL, 1 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">17</td>
                    <td class="s3" colspan="12">Docetaxel 20 mg/mL, 1 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">48</td>
                    <td class="s3" colspan="13">Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Docetaxel 40 mg/mL, 2 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">18</td>
                    <td class="s3" colspan="12">Docetaxel 40 mg/mL, 2 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">49</td>
                    <td class="s3" colspan="13">Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Doxorubicin 10 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">19</td>
                    <td class="s3" colspan="12">Doxorubicin 10 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">50</td>
                    <td class="s3" colspan="13">Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Doxorubicin 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">20</td>
                    <td class="s3" colspan="12">Doxorubicin 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Paclitaxel 6 mg/mL, 16.7 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">51</td>
                    <td class="s3" colspan="13">Paclitaxel 6 mg/mL, 16.7 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Epirubicin 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">21</td>
                    <td class="s3" colspan="12">Epirubicin 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Paclitaxel 6 mg/mL, 25 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">52</td>
                    <td class="s3" colspan="13">Paclitaxel 6 mg/mL, 25 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Etoposide 20 mg/mL, 5 mL amp/vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">22</td>
                    <td class="s3" colspan="12">Etoposide 20 mg/mL, 5 mL amp/vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">53</td>
                    <td class="s39 softmerge">
                        <div class="softmerge-inner" style="width:340px;left:-1px">
                            Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s114"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Fentanyl Citrate 50 mcg/mL, 2 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">23</td>
                    <td class="s3" colspan="12">Fentanyl Citrate 50 mcg/mL, 2 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Rituximab 10 mg/mL, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">54</td>
                    <td class="s3" colspan="13">Rituximab 10 mg/mL, 10 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">24</td>
                    <td class="s141" colspan="14">Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Rituximab 10 mg/mL, 50 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">55</td>
                    <td class="s3" colspan="13">Rituximab 10 mg/mL, 50 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Fluorouracil 50 mg/mL, 10 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">25</td>
                    <td class="s3" colspan="12">Fluorouracil 50 mg/mL, 10 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Tamoxifen 20 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">56</td>
                    <td class="s3" colspan="13">Tamoxifen 20 mg tablet</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Gemcitabine 1 g vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">26</td>
                    <td class="s3" colspan="12">Gemcitabine 1 g vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Trastuzumab 150 mg Lyophilized Powder', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">57</td>
                    <td class="s3" colspan="13">Trastuzumab 150 mg Lyophilized Powder</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Gemcitabine 200 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">27</td>
                    <td class="s3" colspan="12">Gemcitabine 200 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Trastuzumab 600 mg/ 5ml (120mg/ml), 5ml Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">58</td>
                    <td class="s3" colspan="13">Trastuzumab 600 mg/ 5ml (120mg/ml), 5ml Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">28</td>
                    <td class="s3" colspan="14">Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)
                    </td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Vinblastine Sulfate 1 mg/mL, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">59</td>
                    <td class="s3" colspan="13">Vinblastine Sulfate 1 mg/mL, 10 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Haloperidol 5 mg/mL, 1 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">29</td>
                    <td class="s3" colspan="12">Haloperidol 5 mg/mL, 1 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Vincristine (as Sulfate) 1 mg/mL, 1 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">60</td>
                    <td class="s3" colspan="13">Vincristine (as Sulfate) 1 mg/mL, 1 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hydroxyurea 500 mg capsule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">30</td>
                    <td class="s3" colspan="12">Hydroxyurea 500 mg capsule</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Vincristine (as sulfate) 1 mg/mL, 2 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">61</td>
                    <td class="s3" colspan="13">Vincristine (as sulfate) 1 mg/mL, 2 mL Vial</td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s51" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hyoscine (as N-butyl bromide) 20 mg/mL. 1 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">31</td>
                    <td class="s95" colspan="13">Hyoscine (as N-butyl bromide) 20 mg/mL. 1 mL amp</td>
                    <td class="s63"></td>
                    <td class="s51" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">62</td>
                    <td class="s95" dir="ltr" colspan="4">Others, specify: </td>
                    <td class="s142" colspan="10">{{ $data->f3financialsupports['cspmap_other'] ?? '' }}</td>
                </tr>















                @php
                    $other_meds = $data->f3financialsupports['other_meds'] ?? [];
                @endphp

                <tr style="height: 21px">
                    
                    <td class="s143" dir="ltr" rowspan="8">137</td>
                    <td class="s73" colspan="7" rowspan="8">Other Medicines Availed</td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('All-trans Retinoic Acid (ATRA)', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:180px;left:-1px">All-trans Retinoic Acid (ATRA)
                        </div>
                    </td>
                    <td class="s115"></td>
                    <td class="s144"></td>
                    <td class="s144"></td>
                    <td class="s144"></td>
                    <td class="s144"></td>
                    <td class="s145"></td>
                    <td class="s41" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Lenvatinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Lenvatinib</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Arsenic', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Arsenic</div>
                    </td>
                    <td class="s114"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Osimertinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Osimertinib</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Atezolizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Atezolizumab</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s144"></td>
                    <td class="s145"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Pegylated Asparaginase', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Pegylated Asparaginase</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Bevacizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Bevacizumab</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s144"></td>
                    <td class="s145"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Pembrolizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Pembrolizumab</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Blinatumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Blinatumab</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s145"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Procarbazine', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Procarbazine</div>
                    </td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Bortezomib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Bortezomib</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s145"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('None', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s30"></td>
                    <td class="s30"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Dasatinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s39 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Dasatinib</div>
                    </td>
                    <td class="s115"></td>
                    <td class="s145"></td>
                    <td class="s145"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s19" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s4" colspan="4">Others, specify:</td>
                    <td class="s148" colspan="12">{{ $data->f3financialsupports['other_med_other'] ?? '' }}</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s31"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s51" dir="ltr"><svg width="16px" height="16px"
                            viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Erlotinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s52" dir="ltr">8</td>
                    <td class="s149 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Erlotinib</div>
                    </td>
                    <td class="s150"></td>
                    <td class="s151"></td>
                    <td class="s151"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
                    <td class="s152"></td>
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
                    <td class="s64"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
