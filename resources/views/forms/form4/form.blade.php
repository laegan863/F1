<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" rel="stylesheet" href="{{ asset('resources/sheet.css') }}">
    <style type="text/css">
        html{
            overflow: auto;
        }
        .ritz .waffle a {
            color: inherit;
        }

        .ritz .waffle .s80 {
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

        .ritz .waffle .s134 {
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
        }

        .ritz .waffle .s71 {
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

        .ritz .waffle .s68 {
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

        .ritz .waffle .s131 {
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

        .ritz .waffle .s99 {
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

        .ritz .waffle .s40 {
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

        .ritz .waffle .s111 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s83 {
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

        .ritz .waffle .s117 {
            border-left: none;
            border-bottom: 1px SOLID #000000;
            background-color: #d9d9d9;
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
            font-size: 10pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s64 {
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

        .ritz .waffle .s70 {
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

        .ritz .waffle .s126 {
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

        .ritz .waffle .s38 {
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

        .ritz .waffle .s118 {
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

        .ritz .waffle .s121 {
            border-left: none;
            border-right: none;
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s36 {
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

        .ritz .waffle .s93 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #efefef;
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

        .ritz .waffle .s128 {
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

        .ritz .waffle .s92 {
            border-bottom: 1px SOLID #000000;
            background-color: #d9d9d9;
            text-align: left;
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

        .ritz .waffle .s104 {
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

        .ritz .waffle .s67 {
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

        .ritz .waffle .s65 {
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

        .ritz .waffle .s119 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #b7b7b7;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 10pt;
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

        .ritz .waffle .s22 {
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

        .ritz .waffle .s62 {
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

        .ritz .waffle .s115 {
            border-right: none;
            border-bottom: 1px SOLID #000000;
            background-color: #d9d9d9;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
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

        .ritz .waffle .s48 {
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

        .ritz .waffle .s84 {
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

        .ritz .waffle .s108 {
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

        .ritz .waffle .s23 {
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

        .ritz .waffle .s32 {
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

        .ritz .waffle .s69 {
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

        .ritz .waffle .s144 {
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

        .ritz .waffle .s113 {
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

        .ritz .waffle .s82 {
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

        .ritz .waffle .s127 {
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

        .ritz .waffle .s58 {
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

        .ritz .waffle .s88 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-style: italic;
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

        .ritz .waffle .s30 {
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

        .ritz .waffle .s129 {
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

        .ritz .waffle .s147 {
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

        .ritz .waffle .s125 {
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

        .ritz .waffle .s94 {
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

        .ritz .waffle .s54 {
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

        .ritz .waffle .s52 {
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

        .ritz .waffle .s20 {
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

        .ritz .waffle .s79 {
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

        .ritz .waffle .s90 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s103 {
            background-color: #ffffff;
            text-align: right;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s81 {
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

        .ritz .waffle .s26 {
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

        .ritz .waffle .s55 {
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

        .ritz .waffle .s130 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID transparent;
            background-color: #b7b7b7;
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

        .ritz .waffle .s133 {
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

        .ritz .waffle .s148 {
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

        .ritz .waffle .s56 {
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

        .ritz .waffle .s45 {
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

        .ritz .waffle .s63 {
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

        .ritz .waffle .s151 {
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

        .ritz .waffle .s73 {
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

        .ritz .waffle .s105 {
            border-bottom: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: right;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s76 {
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

        .ritz .waffle .s89 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #d9d9d9;
            text-align: right;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s143 {
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

        .ritz .waffle .s146 {
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

        .ritz .waffle .s150 {
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

        .ritz .waffle .s123 {
            border-left: none;
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s57 {
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

        .ritz .waffle .s44 {
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

        .ritz .waffle .s141 {
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

        .ritz .waffle .s51 {
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

        .ritz .waffle .s41 {
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

        .ritz .waffle .s122 {
            border-left: none;
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s106 {
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

        .ritz .waffle .s78 {
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

        .ritz .waffle .s34 {
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

        .ritz .waffle .s74 {
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

        .ritz .waffle .s17 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID transparent;
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

        .ritz .waffle .s61 {
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

        .ritz .waffle .s31 {
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

        .ritz .waffle .s24 {
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

        .ritz .waffle .s110 {
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

        .ritz .waffle .s86 {
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

        .ritz .waffle .s107 {
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

        .ritz .waffle .s149 {
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

        .ritz .waffle .s75 {
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

        .ritz .waffle .s25 {
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

        .ritz .waffle .s33 {
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

        .ritz .waffle .s27 {
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

        .ritz .waffle .s154 {
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

        .ritz .waffle .s37 {
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

        .ritz .waffle .s124 {
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s29 {
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

        .ritz .waffle .s59 {
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

        .ritz .waffle .s87 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
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

        .ritz .waffle .s43 {
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

        .ritz .waffle .s77 {
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

        .ritz .waffle .s132 {
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

        .ritz .waffle .s21 {
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

        .ritz .waffle .s109 {
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

        .ritz .waffle .s42 {
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

        .ritz .waffle .s120 {
            border-right: none;
            border-bottom: 1px SOLID #000000;
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

        .ritz .waffle .s153 {
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

        .ritz .waffle .s66 {
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

        .ritz .waffle .s102 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;
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

        .ritz .waffle .s114 {
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

        .ritz .waffle .s145 {
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

        .ritz .waffle .s53 {
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

        .ritz .waffle .s95 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: center;
            color: #999999;
            font-family: Arial;
            font-size: 6pt;
            vertical-align: bottom;
            white-space: nowrap;
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

        .ritz .waffle .s28 {
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

        .ritz .waffle .s39 {
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

        .ritz .waffle .s142 {
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

        .ritz .waffle .s116 {
            border-left: none;
            border-right: none;
            border-bottom: 1px SOLID #000000;
            background-color: #d9d9d9;
            text-align: left;
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

        .ritz .waffle .s101 {
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

        .ritz .waffle .s46 {
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

        .ritz .waffle .s91 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #d9d9d9;
            text-align: left;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
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

        .ritz .waffle .s100 {
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
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s11 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #000000;
            text-align: center;
            font-weight: bold;
            font-style: italic;
            color: #ffffff;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: middle;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s50 {
            border-left: none;
            border-right: none;
            background-color: #ffffff;
        }

        .ritz .waffle .s19 {
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

        .ritz .waffle .s96 {
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

        .ritz .waffle .s112 {
            border-bottom: 1px SOLID #000000;
            border-right: 1px SOLID #000000;
            background-color: #ffffff;
            text-align: center;
            font-weight: bold;
            color: #000000;
            font-family: Arial;
            font-size: 11pt;
            vertical-align: bottom;
            white-space: nowrap;
            direction: ltr;
            padding: 0px 3px 0px 3px;
        }

        .ritz .waffle .s152 {
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

        .ritz .waffle .s72 {
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

        .ritz .waffle .s49 {
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

        .ritz .waffle .s97 {
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
    @php
        $data = \App\Models\F4palliativeform::with([
            'f4esas',
            'f4painassessments',
            'f4palliativecares',
            'f4cancerdiagnoseoutcomes',
            'f4financialsupportmechanisms'
        ])->where('id', Request::query('id'))
        ->first();
    @endphp
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
        <table class="waffle no-grid" cellspacing="0" cellpadding="0" style="width: 1100px; margin: 0 auto;border: 1px solid black">
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
                    
                    <td class="s10" dir="ltr" colspan="40">FORM 4: SUPPORTIVE/PALLIATIVE CARE FORM</td>
                </tr>
                <tr style="height: 19px">
                    
                    <td class="s11" colspan="40"> (Initial and Follow-up)</td>
                </tr>
                <tr style="height: 9px">
                    
                    <td class="s12" colspan="40"></td>
                </tr>
                <tr style="height: 24px">
                    <td class="s13" dir="ltr">138</td>
                    <td class="s14" colspan="7">Date</td>

                    {{-- Split the date (YYYY-MM-DD) into Y Y Y Y - M M - D D --}}
                    @php
                        use Carbon\Carbon;
                        $date = isset($data->date) ? Carbon::parse($data->date)->format('Y-m-d') : null;
                    @endphp

                    <td class="s15" dir="ltr" style="color: black">{{ $date[0] ?? '' }}</td> {{-- Y --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $date[1] ?? '' }}</td> {{-- Y --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $date[2] ?? '' }}</td> {{-- Y --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $date[3] ?? '' }}</td> {{-- Y --}}
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $date[5] ?? '' }}</td> {{-- M --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $date[6] ?? '' }}</td> {{-- M --}}
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $date[8] ?? '' }}</td> {{-- D --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $date[9] ?? '' }}</td> {{-- D --}}

                    <td class="s17" colspan="22"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s13" dir="ltr">139</td>
                    <td class="s14" colspan="7">Name of Patient</td>
                    <td class="s18" dir="ltr" colspan="10" style="color: black">
                        {{ $data->name['firstname'] ?? '' }}
                    </td>
                    <td class="s18" dir="ltr" colspan="10" style="color: black">
                        {{ $data->name['middlename'] ?? '' }}
                    </td>
                    <td class="s18" dir="ltr" colspan="9" style="color: black">
                        {{ $data->name['lastname'] ?? '' }}
                    </td>
                    <td class="s15" dir="ltr" colspan="3" style="color: black">
                        {{ $data->name['suffix'] ?? '' }}
                    </td>
                </tr>

                @php
                    $reasons = $data->reason ?? [];
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr" rowspan="4">140</td>
                    <td class="s20" dir="ltr" colspan="7" rowspan="4">Reason for
                        Supportive-Palliative<br>Care Consult</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Palliative Care with Curative Intent', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:232px;left:-1px">Palliative Care with Curative
                            Intent</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s25"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('End of Life Care', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">End of Life Care</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s25"></td>
                    <td class="s26"></td>
                </tr>
                <tr style="height: 24px">
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Palliative Care with Active Oncologic Management', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:362px;left:-1px">Palliative Care with Active
                            Oncologic Management</div>
                    </td>
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
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s24"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Survivorship Care', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Survivorship Care </div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s25"></td>
                    <td class="s26"></td>
                </tr>
                <tr style="height: 24px">
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Supportive Care', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Supportive Care</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s25"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s25" dir="ltr" colspan="4">Others, specify: </td>
                    <td class="s29" colspan="9">{{ $data->reason_other ?? '' }}</td>
                    <td class="s26"></td>
                </tr>
                <tr style="height: 24px">
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hospice Care', $reasons) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">4</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Hospice Care</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s30" dir="ltr"></td>
                    <td class="s31" dir="ltr"></td>
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
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s35"></td>
                    <td class="s37"></td>
                </tr>

                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">141</td>
                    <td class="s14" colspan="7">Palliative Care Setting</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Home</div>
                    </td>
                    <td class="s34"></td>
                    <td class="s38"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Hospital</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s39" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Community-based</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s37"></td>
                </tr> --}}

                @php
                    $setting = $data->setting ?? [];
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">141</td>
                    <td class="s14" colspan="7">Palliative Care Setting</td>

                    {{-- 1. Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Home', $setting) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Home</div>
                    </td>
                    <td class="s34"></td>
                    <td class="s38"></td>

                    {{-- 2. Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Hospital', $setting) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Hospital</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s34"></td>

                    {{-- 3. Community-based --}}
                    <td class="s39" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Community-based', $setting) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Community-based</div>
                    </td>

                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s35"></td>
                    <td class="s37"></td>
                </tr>

                @php
                    $pcs = $data->primary_cancer_site ?? [];
                @endphp
                <tr style="height: 21px">
                    <td class="s19" dir="ltr" rowspan="20">142</td>
                    <td class="s14" colspan="7" rowspan="20">Primary Cancer Site</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Adrenal', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Adrenal</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Kaposi Sarcoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">21</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Kaposi Sarcoma</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Renal Pelvis/Ureters', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">41</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Renal Pelvis/Ureters</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Anus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Anus</div>
                    </td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Kidney', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">22</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Kidney</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Salivary Glands', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">42</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Salivary Glands</div>
                    </td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td></td>
                    <td></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Biliary Tract', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Biliary Tract</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s52"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s53"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Larynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">23</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Larynx</div>
                    </td>
                    <td class="s52"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Skin', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">43</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Skin</div>
                    </td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Acute Lymphocytic Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Acute Lymphocytic Leukemia</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s47"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">24</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Leukemia</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s46"></td>
                    <td class="s57"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Small Bowel', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">44</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Small Bowel</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s57"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Acute Myelogenous Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Acute Myelogenous Leukemia</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s47"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Lip/Oral Cavity', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">25</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Lip/Oral Cavity</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Soft Tissue Sarcoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">45</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Soft Tissue Sarcoma</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s44"></td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Chronic Lymphocytic Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:231px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Chronic Lymphocytic Leukemia</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Liver', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">26</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Liver</div>
                    </td>
                    <td class="s52"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Spinal Cord', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">46</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Spinal Cord</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s47"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Chronic Myelogenous Leukemia', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:231px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Chronic Myelogenous Leukemia</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Lung', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">27</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Lung</div>
                    </td>
                    <td class="s52"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Stomach', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">47</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stomach</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Myelodysplastiv Syndromes', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:232px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Myelodysplastiv Syndromes</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s47"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Melanoma of Skin', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">28</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Melanoma of Skin</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Testis', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">48</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Testis</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blood - Plasma Cell Disorders', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:206px;left:-1px"><span
                                style="font-size:11pt;">Blood</span> - Plasma Cell Disorders</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s56"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Mesothelioma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">29</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Mesothelioma</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Thymus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">49</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Thymus</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bone', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Bone</div>
                    </td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Multiple Myeloma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">30</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Multiple Myeloma</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Thyroid', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">50</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Thyroid</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Brain (CNS)', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Brain (CNS)</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s52"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Nasopharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">31</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Nasopharynx</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Unknown Primary (Occult Primary)', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">51</td>
                    <td class="s59" colspan="9">Unknown Primary (Occult Primary)</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Breast', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Breast</div>
                    </td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Non-Hodgkin Lymphoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">32</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Non-Hodgkin Lymphoma</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s44"></td>
                    <td class="s46"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Urinary Bladder', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">52</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Urinary Bladder</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s47"></td>
                    <td class="s52"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cervix', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Cervix</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Oral Cavity', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">33</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Oral Cavity</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s46"></td>
                    <td class="s57"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Uterus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">53</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Uterus</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Colon', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Colon</div>
                    </td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s41"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Oropharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">34</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Oropharynx</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Vagina', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">54</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Vagina</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Esophagus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Esophagus</div>
                    </td>
                    <td class="s61"></td>
                    <td class="s61"></td>
                    <td class="s62"></td>
                    <td class="s52"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ovary', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">35</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Ovary</div>
                    </td>
                    <td class="s52"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Vulva', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">55</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Vulva</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s4"></td>
                    <td class="s41"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s54"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Eyes and Orbit', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">16</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Eyes and Orbit</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s52"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Pancreas', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">36</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Pancreas</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s46"></td>
                    <td class="s57"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">56</td>
                    <td class="s25" dir="ltr" colspan="5">Others, specify:</td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s2" dir="ltr"></td>
                    <td class="s59" dir="ltr"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Gallbladder', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">17</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Gallbladder</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s52"></td>
                    <td class="s42"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Paranasal Sinus', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">37</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Paranasal Sinus</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s44"></td>
                    <td class="s45"></td>
                    <td class="s46"></td>
                    <td class="s46"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s42"></td>
                    <td class="s21" dir="ltr"></td>
                    <td></td>
                    <td class="s63" colspan="8" rowspan="2"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Gastroesophageal Junction', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">18</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Gastroesophageal Junction</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s27"></td>
                    <td class="s45"></td>
                    <td class="s44"></td>
                    <td class="s57"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Peritoneal', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">38</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Peritoneal</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s46"></td>
                    <td class="s57"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s42"></td>
                    <td class="s64"></td>
                    <td class="s65"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hodgkin Lymphoma', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">19</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Hodgkin Lymphoma</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s27"></td>
                    <td class="s57"></td>
                    <td class="s46"></td>
                    <td class="s42"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Prostate', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">39</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Prostate </div>
                    </td>
                    <td class="s56"></td>
                    <td class="s46"></td>
                    <td class="s57"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s43"></td>
                    <td class="s42"></td>
                    <td class="s42"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hypopharynx', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">20</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Hypopharynx</div>
                    </td>
                    <td class="s66"></td>
                    <td class="s66"></td>
                    <td class="s39" dir="ltr"></td>
                    <td class="s67" dir="ltr"></td>
                    <td class="s35" dir="ltr"></td>
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Rectum', $pcs) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">40</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Rectum</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s38"></td>
                    <td class="s69" dir="ltr"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                {{-- <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr" rowspan="2">143</td>
                    <td class="s14" colspan="7" rowspan="2">Laterality</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Left</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Not applicable</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Bilateral</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s72" dir="ltr" rowspan="2">144</td>
                    <td class="s14" colspan="6" rowspan="2">ICD-10</td>
                    <td class="s65" colspan="9">dasada</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Right</div>
                    </td>
                    <td class="s74"></td>
                    <td class="s74"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">5</td>
                    <td class="s68" colspan="4">Unknown</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s68"></td>
                    <td class="s75"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                </tr>
                <tr style="height: 39px">
                    
                    <td class="s78" dir="ltr">145</td>
                    <td class="s20" colspan="7">Histologic<span
                            style="font-size:8pt;font-family:Arial;font-weight:bold;color:#000000;"> </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">Diagnosis</span>
                    </td>
                    <td class="s79" colspan="32"></td>
                </tr> --}}

                @php
                    $laterality = $data->laterality ?? '';
                @endphp

                <tr style="height: 21px">
                    <td class="s19" dir="ltr" rowspan="2">143</td>
                    <td class="s14" colspan="7" rowspan="2">Laterality</td>

                    {{-- Left --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $laterality === 'Left' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Left</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>

                    {{-- Not applicable --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $laterality === 'Not applicable' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Not applicable</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>

                    {{-- Bilateral --}}
                    <td class="s28" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $laterality === 'Bilateral' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Bilateral</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s47"></td>

                    {{-- ICD-10 --}}
                    <td class="s72" dir="ltr" rowspan="2">144</td>
                    <td class="s14" colspan="6" rowspan="2">ICD-10</td>
                    <td class="s65" colspan="9" style="text-align: left">{{ $data->icd10 ?? '' }}</td>
                </tr>

                <tr style="height: 21px">
                    {{-- Right --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $laterality === 'Right' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Right</div>
                    </td>
                    <td class="s74"></td>
                    <td class="s74"></td>

                    {{-- Unknown --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $laterality === 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">5</td>
                    <td class="s68" colspan="4">Unknown</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s68"></td>
                    <td class="s75"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s76"></td>
                    <td class="s77"></td>
                </tr>

                <tr style="height: 39px">
                    <td class="s78" dir="ltr">145</td>
                    <td class="s20" colspan="7">Histologic<span
                            style="font-size:8pt;font-family:Arial;font-weight:bold;color:#000000;"> </span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">Diagnosis</span>
                    </td>
                    <td class="s79" colspan="32">{{ $data->histologic_diagnosis ?? '' }}</td>
                </tr>


                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">C l i n i c a l S t a g e</td>
                </tr>

                {{-- <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr" rowspan="2">146</td>
                    <td class="s14" colspan="10" rowspan="2">Group Clinical Stage <span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                    </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage 0</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage II</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage IV</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage I</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">4</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage III</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">6</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}

                @php
                    $clinical_stage = $data->clinical_stage ?? '';
                @endphp

                <tr style="height: 21px">
                    <td class="s19" dir="ltr" rowspan="2">146</td>
                    <td class="s14" colspan="10" rowspan="2">Group Clinical Stage 
                        <span style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)
                        </span>
                    </td>

                    {{-- Stage 0 --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Stage 0' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage 0</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>

                    {{-- Stage II --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Stage II' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage II</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>

                    {{-- Stage IV --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Stage IV' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage IV</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    {{-- <td class="s48"></td> --}}
                </tr>

                <tr style="height: 21px">
                    {{-- Stage I --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Stage I' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage I</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s34"></td>
                    <td class="s34"></td>

                    {{-- Stage III --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Stage III' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">4</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Stage III</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>

                    {{-- Unknown --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ $clinical_stage === 'Unknown' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">6</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Unknown</div>
                    </td>
                    <td class="s33"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>


                @php
                    $t_stage = $data->stage['t_stage'] ?? '';
                    $n_stage = $data->stage['n_stage'] ?? '';
                    $m_stage = $data->stage['m_stage'] ?? '';
                    $s_stage = $data->stage['s_stage'] ?? '';
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">147</td>
                    <td class="s20" colspan="10">T (Tumor)
                        <span style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)
                        </span>
                    </td>
                    <td class="s81" colspan="9">{{ $t_stage }}</td>

                    <td class="s19" dir="ltr">149</td>
                    <td class="s20" colspan="10">M (Metastasis)
                        <span style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)
                        </span>
                    </td>
                    <td class="s81" colspan="9">{{ $m_stage }}</td>
                </tr>

                <tr style="height: 24px">
                    <td class="s19" dir="ltr">148</td>
                    <td class="s20" colspan="10">N (Nodes)
                        <span style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)
                        </span>
                    </td>
                    <td class="s81" colspan="9">{{ $n_stage }}</td>

                    <td class="s19" dir="ltr">150</td>
                    <td class="s20" colspan="10">S (Staging)
                        <span style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">
                            (Optional)
                        </span>
                    </td>
                    <td class="s82" colspan="9">{{ $s_stage }}</td>
                </tr>



                @php
                    $other_staging = $data->other_staging ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr" rowspan="11">151</td>
                    <td class="s20" colspan="10" rowspan="11">Other Staging Used <span
                            style="font-size:8pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(Optional)</span>
                    </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('FIGO Staging System (International Federation of Gynecology and Obstetrics)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="27">
                        FIGO Staging System (International Federation of Gynecology and Obstetrics)</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ann Arbor Staging System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s25" colspan="12">Ann Arbor Staging System</td>
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Breslow Thickness and Clark Level (for Skin Cancer)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s2" colspan="21">Breslow Thickness and Clark Level (for Skin Cancer)</td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s83"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Durie-Salmon Staging System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s2" colspan="13">Durie-Salmon Staging System</td>
                    <td class="s41"></td>
                    <td class="s25"></td>
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Biomarker/Hormone Receptor Status', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s25" colspan="19">Biomarker/Hormone Receptor Status</td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s26"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('The Child-Pugh Score (for Liver Cancer)', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s2" colspan="12">The Child-Pugh Score (for Liver Cancer)</td>
                    <td class="s25"></td>
                    <td class="s41"></td>
                    <td class="s25"></td>
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
                    <td class="s26"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Enneking Classification', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s25" colspan="16">Enneking Classification</td>
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
                    <td class="s26"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Musculoskeletal Tumor Society (MSTS) classification', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:362px;left:-1px">
                            Musculoskeletal Tumor Society (MSTS) classification</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s23"></td>
                    <td class="s52"></td>
                    <td class="s24"></td>
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
                    <td class="s26"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Nottingham Grading System', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Nottingham Grading System</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s25"></td>
                    <td class="s41"></td>
                    <td class="s25"></td>
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
                    <td class="s26"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Not Applicable', $other_staging) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">10</td>
                    <td class="s35" colspan="12">Not Applicable</td>
                    <td class="s35"></td>
                    <td class="s84"></td>
                    <td class="s35"></td>
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
                    <td class="s37"></td>
                </tr>
                <tr style="height: 34px">
                    
                    <td class="s14" dir="ltr" colspan="5">Other Remarks</td>
                    <td class="s85" colspan="24" style="text-align: left">{{ $data->other_remarks ?? '' }}</td>
                </tr>

                <tr style="height: 29px">
                    
                    <td class="s86" colspan="40">A. E S A S - r ( E d m o n t o n S y m p t o m A s s e s s m e
                        n t S y s t e m R e v i s e d )</td>
                </tr>

                @php
                    $f4esas = $data->f4esas ?? [];
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">152</td>
                    <td class="s20" dir="ltr" colspan="10">GCS Score of the Patient</td>
                    <td class="s87" colspan="8">{{ $f4esas->gcs_score ?? '' }}</td>
                    <td class="s19" dir="ltr">153</td>
                    <td class="s20" dir="ltr" colspan="12">ESAS-r Score of the Patient <span
                            style="font-size:9pt;font-weight:normal;font-style:italic;">(Only if GCS
                            Score&gt;8)</span></td>
                    <td class="s87" colspan="8">{{ $f4esas->esasr_score ?? '' }}</td>
                </tr>
                <tr style="height: 19px">
                    
                    <td class="s88" colspan="40">Please circle the number that best described how the patient
                        feel NOW:</td>
                </tr>


                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">154</td>
                    <td class="s89" colspan="13">No Pain</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr" style="border: 1px solid black; border-radius: 50%;">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Pain</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">155</td>
                    <td class="s89" colspan="13">No Tiredness</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr" style="border: 1px solid black; border-radius: 50%;">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Tiredness</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">156</td>
                    <td class="s89" colspan="13">No Drowsiness</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Drowsiness</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">157</td>
                    <td class="s89" colspan="13">No Nausea</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Nausea</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">158</td>
                    <td class="s89" colspan="13">No Lack of Apetite</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Lack of Apetite</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">159</td>
                    <td class="s89" colspan="13">No Shortness of Breath</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst PossibleShortness of Breath</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">160</td>
                    <td class="s89" colspan="13">No Depression</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Depression</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">161</td>
                    <td class="s89" colspan="13">No Anxiety</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Anxiety</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">162</td>
                    <td class="s89" colspan="13">Best Wellbeing</td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s91" colspan="13">Worst Possible Wellbeing</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">163</td>
                    <td class="s92" dir="ltr" colspan="4">Other Problem:</td>
                    <td class="s93" dir="ltr" colspan="9"></td>
                    <td class="s36"></td>
                    <td class="s90" dir="ltr">0</td>
                    <td class="s90" dir="ltr">1</td>
                    <td class="s90" dir="ltr">2</td>
                    <td class="s90" dir="ltr">3</td>
                    <td class="s90" dir="ltr">4</td>
                    <td class="s90" dir="ltr">5</td>
                    <td class="s90" dir="ltr">6</td>
                    <td class="s90" dir="ltr">7</td>
                    <td class="s90" dir="ltr">8</td>
                    <td class="s90" dir="ltr">9</td>
                    <td class="s90" dir="ltr">10</td>
                    <td class="s71"></td>
                    <td class="s94" colspan="13"></td>
                </tr> --}}

                @php
                $esas_items = [
                    ['id' => 154, 'key' => 'pain', 'label_left' => 'No Pain', 'label_right' => 'Worst Possible Pain'],
                    ['id' => 155, 'key' => 'tiredness', 'label_left' => 'No Tiredness', 'label_right' => 'Worst Possible Tiredness'],
                    ['id' => 156, 'key' => 'drowsiness', 'label_left' => 'No Drowsiness', 'label_right' => 'Worst Possible Drowsiness'],
                    ['id' => 157, 'key' => 'nausea', 'label_left' => 'No Nausea', 'label_right' => 'Worst Possible Nausea'],
                    ['id' => 158, 'key' => 'appetite', 'label_left' => 'No Lack of Apetite', 'label_right' => 'Worst Possible Lack of Apetite'],
                    ['id' => 159, 'key' => 'breath', 'label_left' => 'No Shortness of Breath', 'label_right' => 'Worst Possible Shortness of Breath'],
                    ['id' => 160, 'key' => 'depression', 'label_left' => 'No Depression', 'label_right' => 'Worst Possible Depression'],
                    ['id' => 161, 'key' => 'anxiety', 'label_left' => 'No Anxiety', 'label_right' => 'Worst Possible Anxiety'],
                    ['id' => 162, 'key' => 'wellbeing', 'label_left' => 'Best Wellbeing', 'label_right' => 'Worst Possible Wellbeing'],
                ];
                @endphp

                @foreach ($esas_items as $item)
                <tr style="height: 24px">
                    <td class="s19" dir="ltr">{{ $item['id'] }}</td>
                    <td class="s89" colspan="13">{{ $item['label_left'] }}</td>
                    <td class="s36"></td>

                    @for ($i = 0; $i <= 10; $i++)
                        <td class="s90" dir="ltr" 
                            @if($f4esas->{$item['key']} == $i)
                                style="border: 1px solid black; border-radius: 50%;"
                            @endif>
                            {{ $i }}
                        </td>
                    @endfor

                    <td class="s71"></td>
                    <td class="s91" colspan="13">{{ $item['label_right'] }}</td>
                </tr>
                @endforeach

                {{-- OTHER PROBLEM --}}
                <tr style="height: 24px">
                    <td class="s19" dir="ltr">163</td>
                    <td class="s92" dir="ltr" colspan="4">Other Problem:</td>
                    <td class="s93" dir="ltr" colspan="9" style="text-align: right">{{ $f4esas->other_problem_left_title ?? '' }}</td>
                    <td class="s36"></td>

                    @for ($i = 0; $i <= 10; $i++)
                        <td class="s90" dir="ltr" 
                            @if(isset($f4esas->other_problem) && $f4esas->other_problem_score == $i)
                                style="border: 1px solid black; border-radius: 50%;"
                            @endif>
                            {{ $i }}
                        </td>   
                    @endfor

                    <td class="s71"></td>
                    <td class="s94" colspan="13"> {{ $f4esas->other_problem_left_title ? 'Worst '.$f4esas->other_problem_right_title : '' }}</td>
                </tr>



                <tr style="height: 29px">
                    
                    <td class="s86" colspan="40">B . P a i n A s s e s s m e n t ( P Q R S T )</td>
                </tr>
                @php

                    $f4painassessments = $data->f4painassessments ?? [];
                    $assessment_date = str_split(str_replace("-", "", $f4painassessments->assessment_date ?? '' ));
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">164</td>
                    <td class="s14" colspan="10">Date of Initial Assessment</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[0] ?? '' }}</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[1] ?? '' }}</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[2] ?? '' }}</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[3] ?? '' }}</td>
                    <td class="s96">-</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[4] ?? '' }}</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[5] ?? '' }}</td>
                    <td class="s96">-</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[6] ?? '' }}</td>
                    <td class="s95" style="font-size: 13px; color: black">{{ $assessment_date[7] ?? '' }}</td>
                    <td class="s97" colspan="19"></td>
                </tr>
                @php
                    $is_pain = isset($f4painassessments['is_pain']) && $f4painassessments['is_pain'] == "Yes";
                @endphp

                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">165</td>
                    <td class="s14" colspan="10">Is there Pain?</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $is_pain ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ !$is_pain ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">166</td>
                    <td class="s14" colspan="10">Pain Score acceptable to Patient</td>
                    <td class="s84">{{ $f4painassessments->pain_score ?? '' }}</td>
                    <td class="s98" colspan="9"></td>
                    <td class="s97" colspan="19"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">167</td>
                    <td class="s14" colspan="10"><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;text-decoration:underline;text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#000000;">P</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">rovocation</span>
                    </td>
                    <td class="s99" colspan="29" style="text-align: left">{{ $f4painassessments->provocation ?? '' }}</td>
                </tr>
                @php
                    $provocation_quality = $f4painassessments->provocation_quality ?? [];
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">168</td>
                    <td class="s14" colspan="10"><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;text-decoration:underline;text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#000000;">Q</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">uality</span>
                    </td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Sensory', $provocation_quality) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Sensory</div>
                    </td>
                    <td class="s100"></td>
                    <td class="s101"></td>
                    <td class="s101"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Affective', $provocation_quality) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Affective</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cognitive', $provocation_quality) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Cognitive</div>
                    </td>
                    <td class="s100"></td>
                    <td class="s74"></td>
                    <td class="s38"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s70"></td>
                    <td class="s31" colspan="2"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s102"></td>
                </tr>
                <tr style="height: 46px">
                    
                    <td class="s19" dir="ltr" rowspan="12">169</td>
                    <td class="s14" colspan="10" rowspan="12"><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;text-decoration:underline;text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#000000;">R</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">egion</span></td>
                    <td class="s41" colspan="29">
                        <div id='embed_316406272' class='waffle-embedded-object-overlay'
                            style='width: 336px; height: 100px; display: block;'>
                            <img src='{{ asset("fullbody.png") }}'
                                style='display: block;' height='180' width='180'>
                        </div>
                    </td>
                </tr>
                <tr style="height: 19px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 23px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 23px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 23px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 25px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 20px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 20px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 20px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 20px">
                    
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
                    <td class="s83"></td>
                </tr>
                <tr style="height: 20px">
                    
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
                    <td class="s84"></td>
                    <td class="s84"></td>
                    <td class="s84"></td>
                    <td class="s84"></td>
                    <td class="s84"></td>
                    <td class="s84"></td>
                    <td class="s98"></td>
                </tr>
                <tr style="height: 29px">
                    
                    <td class="s20" dir="ltr" colspan="4">Remarks</td>
                    <td class="s79" dir="ltr" colspan="25">{{ $f4painassessments->provocation_region ?? '' }}</td>
                </tr>
                <tr style="height: 20px">
                    
                    <td class="s19" dir="ltr" rowspan="5">170</td>
                    <td class="s14" colspan="10" rowspan="5"><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;text-decoration:underline;text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#000000;">S</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">everity</span>
                    </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "1" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s103">1</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "6" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s103">6</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 20px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "2" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s103">2</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "7" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s103">7</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 20px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "3" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s103">3</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "8" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s103">8</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 20px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "4" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s103">4</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "9" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s103">9</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 20px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "5" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">5</td>
                    <td class="s105">5</td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->severity) && $f4painassessments->severity == "10" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">10</td>
                    <td class="s105">10</td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
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
                    <td class="s70"></td>
                    <td class="s106"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr">171</td>
                    <td class="s14" colspan="10"><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;text-decoration:underline;text-decoration-skip-ink:none;-webkit-text-decoration-skip:none;color:#000000;">T</span><span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">iming</span></td>
                    <td class="s107" colspan="29">{{ $f4painassessments->timing ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s108" dir="ltr">172</td>
                    <td class="s14" colspan="10">Additional Pertinent Findings</td>
                    <td class="s107" colspan="29">{{ $f4painassessments->findings ?? '' }}</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s109" colspan="40">P a i n A s s e s s m e n t f o r P e d i a t r i c P a t i e
                        n t s</td>
                </tr>
                
                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="17">173</td>
                    <td class="s14" colspan="10" rowspan="17">Patients Pain Level</td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
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
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s110"></td>
                    <td class="s110"></td>
                    <td class="s110"></td>
                    <td class="s110"></td>
                    <td class="s110" colspan="5"></td>
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
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 24px">
                    <td class="s4" colspan="29">
                        <img src='{{ asset("faces.png") }}'
                                style='display: block;' height='60' width='483'>
                    </td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s111" colspan="3">No hurt</td>
                    <td class="s111" colspan="3">Hurts Little Bit</td>
                    <td class="s111" colspan="3">Hurts Little More</td>
                    <td class="s111" colspan="3">Hurts Even More</td>
                    <td class="s111" colspan="3">Hurts Whole Lot</td>
                    <td class="s111" colspan="3">Hurts Worst</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                @php
                    $verbal = $f4painassessments->verbal_vocal ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s106" dir="ltr" colspan="9" rowspan="3">Verbal/Vocal</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('0 = Positive', $verbal) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s25" colspan="5">0 = Positive</td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('1 = Other complaint, whimper', $verbal) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">1 = Other complaint, whimper
                        </div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('2 = Pain, crying', $verbal) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s35" colspan="5">2 = Pain, crying</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                @php
                    $body_movement = $f4painassessments->body_movement ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s106" dir="ltr" colspan="9" rowspan="3">Body movement</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('0 = Moves easily', $body_movement) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s25" colspan="5">0 = Moves easily</td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('1 = Neutral shifting', $body_movement) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">1 = Neutral shifting</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('2 = Tense, failing arms/leg', $body_movement) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s35" colspan="10">2 = Tense, failing arms/leg</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                @php
                    $facial = $f4painassessments->facial ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s106" dir="ltr" colspan="9" rowspan="4">Facial</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('0 = Smiling', $facial) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s25" colspan="5">0 = Smiling</td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('1 = Neutral shifting', $facial) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">1 = Neutral shifting</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('2 = Frowtn, grimace', $facial) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s25" colspan="10">2 = Frowtn, grimace</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('3 = Clenched teeth', $facial) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">4</td>
                    <td class="s35" colspan="10">3 = Clenched teeth</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    @php
                        $touching = $f4painassessments->touching ?? [];
                    @endphp
                    <td class="s106" dir="ltr" colspan="9" rowspan="3">Touching (localizing pain)
                    </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('0 = No touching', $touching) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s25" colspan="5">0 = No touching</td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('1 = Reaching patting', $touching) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">1 = Reaching patting</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('2 = Grabbing', $touching) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s35" colspan="10">2 = Grabbing</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 42px">
                    
                    <td class="s19" dir="ltr">174</td>
                    <td class="s14" dir="ltr" colspan="10">Associated signs/Symptoms</td>
                    <td class="s112" colspan="29" style="text-align: left">{{ $f4painassessments->associated_signs ?? '' }}</td>
                </tr>

                @php
                    $signs = $f4painassessments->signs ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s19" dir="ltr" rowspan="4">175</td>
                    <td class="s14" colspan="10" rowspan="4">Pain Diagnosis</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Acute Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Acute Pain </div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Psychogenic Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Psychogenic Pain </div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Chronic Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Chronic Pain </div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Phantom Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Phantom Pain </div>
                    </td>
                    <td class="s27"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s51"></td>
                    <td class="s47"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Neuropathic Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Neuropathic Pain </div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s41"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Central Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Central Pain </div>
                    </td>
                    <td class="s27"></td>
                    <td class="s50"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
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
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Nociceptive Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">4</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Nociceptive Pain </div>
                    </td>
                    <td class="s113"></td>
                    <td class="s113"></td>
                    <td class="s113"></td>
                    <td class="s114"></td>
                    <td class="s114"></td>
                    <td class="s84"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Nociplastic Pain', $signs) ? 'checked' : 'unchecked'  }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">8</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Nociplastic Pain</div>
                    </td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s40"></td>
                    <td class="s38"></td>
                    <td class="s38"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s109" colspan="40">P a i n M a n a g e m e n t</td>
                </tr>


                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="2">176</td>
                    <td class="s20" colspan="10" rowspan="2">Paracetamol</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s75" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s119" colspan="7"></td>
                </tr> --}}

                @php
                    $pain = $data->f4painassessments ?? null;
                    $paracetamolDate = $pain && $pain->paracetamol_date ? \Carbon\Carbon::parse($pain->paracetamol_date) : null;
                @endphp

                <tr style="height: 24px">
                                    
                    <td class="s19" dir="ltr" rowspan="2">176</td>
                    <td class="s20" colspan="10" rowspan="2">Paracetamol</td>

                    {{-- ✅ 1 = Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($pain && $pain->paracetamol === 'Yes') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">
                            If <span style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span>
                            <span style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- ✅ Pain controlled: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($pain && $pain->paracetamol_pain_controlled === 'Yes') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>

                    {{-- ✅ Pain controlled: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($pain && $pain->paracetamol_pain_controlled === 'No') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>

                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                                    
                    {{-- ✅ 2 = No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($pain && $pain->paracetamol === 'No') ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s75" colspan="2">No</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- 🗓 Date fields --}}
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('Y') : 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('Y') : 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('Y') : 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('Y') : 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('m') : 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('m') : 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('d') : 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $paracetamolDate ? $paracetamolDate->format('d') : 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>

                @php
                    $nsaids = isset($f4painassessments['nsaids']) && $f4painassessments['nsaids'] == "Yes";
                @endphp

                <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="3">177</td>
                    <td class="s20" colspan="10" rowspan="3">NSAIDs, (Nonsteroidal Anti-inflammatory
                        Drugs)</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $nsaids ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, name of
                                NSAID</span></div>
                    </td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s14"></td>
                    <td class="s107" colspan="17"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ !$nsaids ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->nsaids_pain_controlled) && $f4painassessments->nsaids_pain_controlled == "Yes" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ isset($f4painassessments->nsaids_pain_controlled) && $f4painassessments->nsaids_pain_controlled == "No" ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                @php
                    $nsaids_date = str_split(str_replace("-", "", $f4painassessments->nsaids_date ?? '')) ?? '';
                @endphp
                <tr style="height: 24px">
                    
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[0] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[1] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[2] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[3] ?? 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[4] ?? 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[5] ?? 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[6] ?? 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $nsaids_date[7] ?? 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>



                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="2">178</td>
                    <td class="s20" colspan="10" rowspan="2">Tramadol</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s75" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s119" colspan="7"></td>
                </tr> --}}

                @php
                    $tramadol_date = str_split(str_replace('-', '', $f4painassessments->tramadol_date ?? ''));
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr" rowspan="2">178</td>
                    <td class="s20" colspan="10" rowspan="2">Tramadol</td>

                    {{-- ✅ 1 = Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->tramadol ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">
                            If <span style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span>
                            <span style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- ✅ Pain controlled: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->tramadol_pain_controlled ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>

                    {{-- ✅ Pain controlled: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->tramadol_pain_controlled ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>

                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 24px">
                    {{-- ✅ 2 = No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->tramadol ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s75" colspan="2">No</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- 🗓 Date fields (YYYY-MM-DD) --}}
                    <td class="s15" dir="ltr">{{ $tramadol_date[0] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[1] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[2] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[3] ?? 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[4] ?? 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[5] ?? 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[6] ?? 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $tramadol_date[7] ?? 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>



                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="3">179</td>
                    <td class="s20" colspan="10" rowspan="3">Strong Opioid</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, name of
                                Strong Opioid</span></div>
                    </td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s122"></td>
                    <td class="s123" colspan="17"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s119" colspan="7"></td>
                </tr> --}}

                @php
                    $opioid_date = str_split(str_replace('-', '', $f4painassessments->opioid_date ?? ''));
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr" rowspan="3">179</td>
                    <td class="s20" colspan="10" rowspan="3">Strong Opioid</td>

                    {{-- ✅ 1 = Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->opioid ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">
                            <span style="font-size:11pt;font-family:Arial;">If </span>
                            <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                            <span style="font-weight: normal">, name of Strong Opioid</span>
                        </div>
                    </td>
                    <td class="s121" colspan="6" dir="ltr">{{ $f4painassessments->opioid_name ?? '' }}</td>
                    <td class="s122"></td>
                    <td class="s123" colspan="17"></td>
                </tr>

                <tr style="height: 24px">
                    {{-- ✅ 2 = No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->opioid ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">
                            If <span style="font-weight:bold;">yes</span>, is pain controlled?
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- ✅ Pain controlled: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->opioid_pain_controlled ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>

                    {{-- ✅ Pain controlled: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->opioid_pain_controlled ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>

                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- 🗓 Date fields (YYYY-MM-DD) --}}
                    <td class="s15" dir="ltr">{{ $opioid_date[0] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[1] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[2] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[3] ?? 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[4] ?? 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[5] ?? 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[6] ?? 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $opioid_date[7] ?? 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>




                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="3">180</td>
                    <td class="s20" colspan="10" rowspan="3">Other Drugs </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, specify
                                name</span></div>
                    </td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s14"></td>
                    <td class="s107" colspan="17"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s119" colspan="7"></td>
                </tr> --}}


                @php
                    $other_drugs_date = str_split(str_replace('-', '', $f4painassessments->other_drugs_date ?? ''));
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr" rowspan="3">180</td>
                    <td class="s20" colspan="10" rowspan="3">Other Drugs</td>

                    {{-- ✅ 1 = Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->other_drugs ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    <td class="s120 softmerge">
                        <div class="" style="width:154px;left:-1px">
                            <span style="font-size:11pt;font-family:Arial;">If yes</span>
                            <span style="font-weight: normal">, specify name</span>
                        </div>
                    </td>

                    <td class="s121" colspan="6" dir="ltr">{{ $f4painassessments->other_drugs_specify_name ?? '' }}</td>
                    <td class="s14"></td>
                    <td class="s107" colspan="17"></td>
                </tr>

                <tr style="height: 24px">
                    {{-- ✅ 2 = No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->other_drugs ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">
                            If <span style="font-weight:bold;">yes</span>, is pain controlled?
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- ✅ Pain controlled: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->other_drugs_pain_controlled ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>

                    {{-- ✅ Pain controlled: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->other_drugs_pain_controlled ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>

                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- 🗓 Date (YYYY-MM-DD split) --}}
                    <td class="s15" dir="ltr">{{ $other_drugs_date[0] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[1] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[2] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[3] ?? 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[4] ?? 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[5] ?? 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[6] ?? 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $other_drugs_date[7] ?? 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>




                {{-- <tr style="height: 24px">
                    
                    <td class="s19" dir="ltr" rowspan="3">181</td>
                    <td class="s20" dir="ltr" colspan="10" rowspan="3">Other Non-pharmacologic
                        Treatment</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, specify
                                name</span></div>
                    </td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s121"></td>
                    <td class="s122"></td>
                    <td class="s122"></td>
                    <td class="s14"></td>
                    <td class="s107" colspan="17"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">If <span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;color:#000000;">, is pain controlled?</span>
                        </div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>
                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s119" colspan="7"></td>
                </tr> --}}


                @php
                    $non_pharma_date = str_split(str_replace('-', '', $f4painassessments->non_pharma_date ?? ''));
                @endphp

                <tr style="height: 24px">
                    <td class="s19" dir="ltr" rowspan="3">181</td>
                    <td class="s20" dir="ltr" colspan="10" rowspan="3">Other Non-pharmacologic Treatment</td>

                    {{-- ✅ 1 = Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->non_pharma ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    <td class="s120 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">
                            <span style="font-size:11pt;font-family:Arial;">If </span>
                            <span style="font-size:11pt;font-family:Arial;font-weight:bold;">yes</span>
                            <span style="font-weight: normal">, specify name</span>
                        </div>
                    </td>

                    <td class="s121" colspan="6" dir="ltr">{{ $f4painassessments->non_pharma_specify_name ?? '' }}</td>
                    <td class="s14"></td>
                    <td class="s107" colspan="17"></td>
                </tr>

                <tr style="height: 24px">
                    {{-- ✅ 2 = No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->non_pharma ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">
                            If <span style="font-weight:bold;">yes</span>, is pain controlled?
                        </div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- ✅ Pain controlled: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->non_pharma_pain_controlled ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>

                    {{-- ✅ Pain controlled: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4painassessments->non_pharma_pain_controlled ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>

                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s118"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 24px">
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s71"></td>

                    <td class="s115 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Date of Administration</div>
                    </td>

                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s116"></td>
                    <td class="s117"></td>
                    <td class="s117"></td>

                    {{-- 🗓 Date (YYYY-MM-DD split) --}}
                    <td class="s15" dir="ltr">{{ $non_pharma_date[0] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[1] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[2] ?? 'Y' }}</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[3] ?? 'Y' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[4] ?? 'M' }}</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[5] ?? 'M' }}</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[6] ?? 'D' }}</td>
                    <td class="s15" dir="ltr">{{ $non_pharma_date[7] ?? 'D' }}</td>
                    <td class="s119" colspan="7"></td>
                </tr>




                <tr style="height: 29px">
                    
                    <td class="s86" colspan="40">C. P a l l i a t i v e C a r e I n t e r v e n t i o n</td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">N u t r i t i o n a l</td>
                </tr>


                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="4">182</td>
                    <td class="s14" colspan="10" rowspan="4">Nutritional Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">If <span
                            style="font-weight:bold;">yes</span>, <span style="font-weight:bold;">where is care
                            being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}

                @php
                    $f4palliativecares = $data->f4palliativecares ?? [];
                @endphp

                <tr style="height: 21px">
                    <td class="s124" dir="ltr" rowspan="4">182</td>
                    <td class="s14" colspan="10" rowspan="4">Nutritional Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">
                        If <span style="font-weight:bold;">yes</span>,
                        <span style="font-weight:bold;">where is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nutritional_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>




                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">N u r s i n g</td>
                </tr>

                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="4">183</td>
                    <td class="s14" colspan="10" rowspan="4">Nursing Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">If <span
                            style="font-weight:bold;">yes</span>, <span style="font-weight:bold;">where is care
                            being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}



                <tr style="height: 21px">
                    <td class="s124" dir="ltr" rowspan="4">183</td>
                    <td class="s14" colspan="10" rowspan="4">Nursing Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">
                        If <span style="font-weight:bold;">yes</span>,
                        <span style="font-weight:bold;">where is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->nursing_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>





                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">R e h a b i l i t a t i o n</td>
                </tr>

                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="4">184</td>
                    <td class="s14" colspan="10" rowspan="4">Rehabilitation Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">If <span
                            style="font-weight:bold;">yes</span>, <span style="font-weight:bold;">where is care
                            being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}


                <tr style="height: 21px">
                    <td class="s124" dir="ltr" rowspan="4">184</td>
                    <td class="s14" colspan="10" rowspan="4">Rehabilitation Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">
                        If <span style="font-weight:bold;">yes</span>,
                        <span style="font-weight:bold;">where is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->rehabilitation_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>





                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">P s y c h o s o c i a l <span
                            style="font-size:12pt;font-family:Arial;font-weight:bold;font-style:italic;color:#ffffff;">
                            ( e.g. d e p r e s s i o n , a n x i e t y , w e l l - b e i n g ) </span></td>
                </tr>


                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="4">185</td>
                    <td class="s14" colspan="10" rowspan="4">Psychosocial Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">If <span
                            style="font-weight:bold;">yes</span>, <span style="font-weight:bold;">where is care
                            being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}



                <tr style="height: 21px">
                    <td class="s124" dir="ltr" rowspan="4">185</td>
                    <td class="s14" colspan="10" rowspan="4">Psychosocial Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">
                        If <span style="font-weight:bold;">yes</span>,
                        <span style="font-weight:bold;">where is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->psychosocial_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>





                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">S p i r i t u a l</td>
                </tr>
                
                {{-- <tr style="height: 21px">
                    
                    <td class="s124" dir="ltr" rowspan="4">186</td>
                    <td class="s14" colspan="10" rowspan="4">Spiritual Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">If <span
                            style="font-weight:bold;">yes</span>, <span style="font-weight:bold;">where is care
                            being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}


                <tr style="height: 21px">
                    <td class="s124" dir="ltr" rowspan="4">186</td>
                    <td class="s14" colspan="10" rowspan="4">Spiritual Care</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s26" dir="ltr" colspan="25">
                        If <span style="font-weight:bold;">yes</span>,
                        <span style="font-weight:bold;">where is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s84"></td>
                    <td class="s68"></td>
                    <td class="s84"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->spiritual_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>



                <tr style="height: 24px">
                    
                    <td class="s80" colspan="40">O t h e r P a l l i a t i v e C a r e</td>
                </tr>

                {{-- <tr style="height: 24px">
                    
                    <td class="s124" dir="ltr" rowspan="5">187</td>
                    <td class="s14" colspan="10" rowspan="5">Other/s</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s91" colspan="4">If <span
                            style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                            style="font-size:11pt;font-family:Arial;color:#000000;">, specify:</span></td>
                    <td class="s37" colspan="21"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s26" dir="ltr" colspan="25">W<span style="font-weight:bold;">here is
                            care being given</span> mainly in:</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s48"></td>
                    <td class="s59" colspan="25">Is the patient&#39;s quality of life improved with these care
                        by 25% or more?</td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s71"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr> --}}



                <tr style="height: 24px">
                    <td class="s124" dir="ltr" rowspan="5">187</td>
                    <td class="s14" colspan="10" rowspan="5">Other/s</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                    <td class="s91" colspan="4">
                        If <span style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span>
                        <span style="font-size:11pt;font-family:Arial;color:#000000;">, specify:</span>
                    </td>
                    <td class="s37" colspan="21">{{ $f4palliativecares->others_specify ?? '' }}</td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: Yes --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_care ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s26" dir="ltr" colspan="25">
                        W<span style="font-weight:bold;">here is care being given</span> mainly in:
                    </td>
                </tr>

                <tr style="height: 21px">
                    {{-- ✅ Care: No --}}
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_care ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>

                    {{-- ✅ Place: Home --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_place ?? '') === 'Home' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Home</td>
                    <td class="s125"></td>

                    {{-- ✅ Place: Hospital --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_place ?? '') === 'Hospital' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="3">Hospital</td>

                    {{-- ✅ Place: Community-based --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_place ?? '') === 'Community-based' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="6">Community-based</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>

                <tr style="height: 21px">
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s48"></td>
                    <td class="s59" colspan="25">
                        Is the patient's quality of life improved with these care by 25% or more?
                    </td>
                </tr>

                <tr style="height: 21px">
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s68"></td>
                    <td class="s71"></td>

                    {{-- ✅ Improved: Yes --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_improved ?? '') === 'Yes' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">1</td>
                    <td class="s68" colspan="2">Yes</td>
                    <td class="s125"></td>

                    {{-- ✅ Improved: No --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_improved ?? '') === 'No' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">2</td>
                    <td class="s68" colspan="2">No</td>
                    <td class="s31"></td>

                    {{-- ✅ Improved: Not assessed --}}
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ ($f4palliativecares->others_improved ?? '') === 'Not assessed' ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000"/>
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">3</td>
                    <td class="s68" colspan="5">Not assessed</td>

                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>




                <tr style="height: 29px">
                    
                    <td class="s126" colspan="40">C A N C E R D I A G N O S I S O U T C O M E</td>
                </tr>
                
                @php
                    $f4cancerdiagnoseoutcomes = $data->f4cancerdiagnoseoutcomes ?? [];
                @endphp

                {{-- <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="6">188</td>
                    <td class="s14" colspan="11" rowspan="6">Diagnosis Outcome</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Stable Disease </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Death (treatment related) </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Complete Remission </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Death (other Cause/Non-Cancer
                            Related) </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Partial Response </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing evaluation </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Disease Progression </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing treatment </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Recurrent Disease </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Completed treatment </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">6</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Death (Cancer related) </div>
                    </td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#unchecked-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">12</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Undetermined</div>
                    </td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s79"></td>
                </tr> --}}

                @php
                    $outcomes = $f4cancerdiagnoseoutcomes->diagnosis_outcome ?? [];
                @endphp

                <tr style="height: 21px">
                                    
                    <td class="s13" dir="ltr" rowspan="6">188</td>
                    <td class="s14" colspan="11" rowspan="6">Diagnosis Outcome</td>

                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Stable Disease', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Stable Disease </div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Death (treatment related)', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:206px;left:-1px">Death (treatment related)</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                                    
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Complete Remission', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Complete Remission</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Death (other Cause/Non-Cancer Related)', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">Death (other Cause/Non-Cancer Related)</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                                    
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Partial Response', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:128px;left:-1px">Partial Response</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Ongoing evaluation', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing evaluation</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                                    
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Disease Progression', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Disease Progression</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Ongoing treatment', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Ongoing treatment</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                                    
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Recurrent Disease', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Recurrent Disease</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s21" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Completed treatment', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Completed treatment</div>
                    </td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s127"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s128"></td>
                </tr>
                <tr style="height: 21px">
                                    
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Death (Cancer related)', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">6</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:180px;left:-1px">Death (Cancer related)</div>
                    </td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s30" dir="ltr">
                        <svg width="16px" height="16px" viewBox="0 0 16 16" style="display:inline;">
                            <use href="#{{ in_array('Undetermined', $outcomes) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg>
                    </td>
                    <td class="s31" dir="ltr">12</td>
                    <td class="s32 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Undetermined</div>
                    </td>
                    <td class="s129"></td>
                    <td class="s129"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s31"></td>
                    <td class="s79"></td>
                </tr>

                



                {{-- <tr style="height: 24px">
                    
                    <td class="s13" dir="ltr">189</td>
                    <td class="s14" colspan="11">Date of Diagnosis Outcome</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s15" dir="ltr">Y</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s15" dir="ltr">M</td>
                    <td class="s16" dir="ltr">-</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s15" dir="ltr">D</td>
                    <td class="s130" colspan="18"></td>
                </tr> --}}


                @php
                    $date = $f4cancerdiagnoseoutcomes->diagnosis_outcome_date ?? null;
                    $dateDigits = $date ? str_split(str_replace('-', '', \Carbon\Carbon::parse($date)->format('Y-m-d'))) : [];
                @endphp

                <tr style="height: 24px">
                    <td class="s13" dir="ltr">189</td>
                    <td class="s14" colspan="11">Date of Diagnosis Outcome</td>

                    {{-- Y Y Y Y --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[0] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[1] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[2] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[3] ?? '' }}</td>

                    <td class="s16" dir="ltr">-</td>

                    {{-- M M --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[4] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[5] ?? '' }}</td>

                    <td class="s16" dir="ltr">-</td>

                    {{-- D D --}}
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[6] ?? '' }}</td>
                    <td class="s15" dir="ltr" style="color: black">{{ $dateDigits[7] ?? '' }}</td>

                    <td class="s130" colspan="18"></td>
                </tr>


                {{-- <tr style="height: 24px">
                    
                    <td class="s13" dir="ltr" rowspan="4">190</td>
                    <td class="s14" colspan="11" rowspan="4">Cause of Death</td>
                    <td class="s106" colspan="8">Immediate Cause</td>
                    <td class="s79" colspan="20"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s106" colspan="8">Antecedent Cause</td>
                    <td class="s79" colspan="20"></td>
                </tr>
                <tr style="height: 24px">
                    
                    <td class="s106" colspan="8">Underlying Cause</td>
                    <td class="s79" colspan="20"></td>
                </tr>
                <tr style="height: 39px">
                    
                    <td class="s79" colspan="8">Other significant condition directly leading to death:</td>
                    <td class="s79" colspan="20"></td>
                </tr> --}}



                <tr style="height: 24px">
                    <td class="s13" dir="ltr" rowspan="4">190</td>
                    <td class="s14" colspan="11" rowspan="4">Cause of Death</td>
                    <td class="s106" colspan="8">Immediate Cause</td>
                    <td class="s79" colspan="20">
                        {{ $f4cancerdiagnoseoutcomes->immediate_cause ?? '' }}
                    </td>
                </tr>
                <tr style="height: 24px">
                    <td class="s106" colspan="8">Antecedent Cause</td>
                    <td class="s79" colspan="20">
                        {{ $f4cancerdiagnoseoutcomes->antecedent_cause ?? '' }}
                    </td>
                </tr>
                <tr style="height: 24px">
                    <td class="s106" colspan="8">Underlying Cause</td>
                    <td class="s79" colspan="20">
                        {{ $f4cancerdiagnoseoutcomes->underlying_cause ?? '' }}
                    </td>
                </tr>
                <tr style="height: 39px">
                    <td class="s79" colspan="8">Other significant condition directly leading to death:</td>
                    <td class="s79" colspan="20">
                        {{ $f4cancerdiagnoseoutcomes->other_condition ?? '' }}
                    </td>
                </tr>




                <tr style="height: 29px">
                    
                    <td class="s86" colspan="40">F I N A N C I A L S U P P O R T M E C H A N I S M</td>
                </tr>


                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="17">191</td>
                    <td class="s20" colspan="7" rowspan="17">Did patient avail any financial support
                        mechanism?</td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s48"></td>
                    <td class="s131 softmerge">
                        <div class="softmerge-inner" style="width:440px;left:-1px"><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">If
                            </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:bold;color:#000000;">yes</span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;color:#000000;">, specify
                                financial support mechanism: </span><span
                                style="font-size:11pt;font-family:Arial;font-weight:normal;font-style:italic;color:#000000;">(can
                                be multiple)</span></div>
                    </td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s132"></td>
                    <td class="s133"></td>
                    <td class="s133"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                @php
                    $fs = $data->f4financialsupportmechanisms['financial_support'] == "Yes" ? true : false;
                    $fsm = $data->f4financialsupportmechanisms['financial_type'] ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Discounts under Law (e.g. Senior Citizen, PWD)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s22 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:336px;left:-1px">
                            Discounts under Law (e.g. Senior Citizen, PWD)</div>
                    </td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s50"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('PhilHealth', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s2" colspan="8">PhilHealth</td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Health Maintenance Organization (HMO)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">
                            Health Maintenance Organization (HMO)</div>
                    </td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s23"></td>
                    <td class="s24"></td>
                    <td class="s24"></td>
                    <td class="s25"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Philippine Charity Sweepstakes', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:310px;left:-1px">Philippine Charity Sweepstakes
                            Office (PCSO)</div>
                    </td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s56"></td>
                    <td class="s52"></td>
                    <td class="s52"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Assistance to Individuals in Crisis Situations (AICS)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s25" colspan="24">Assistance to Individuals in Crisis Situations (AICS)</td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s1"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cancer Assistance Fund (CAF)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
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
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
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
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s133"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ $fs ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s59" colspan="2">Yes</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hospital Assistance Funds', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
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
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ !$fs ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s59" colspan="2">No</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
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
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Philippine Amusement and Gaming Corporation (PAGCOR)', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:414px;left:-1px">
                            Philippine Amusement and Gaming Corporation (PAGCOR)</div>
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
                    <td class="s56"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Non-Government Org. / Civil Society Org.', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:284px;left:-1px">
                            Non-Government Org. / Civil Society Org.</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Clinical Trial', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Clinical Trial</div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Charitable Institutions', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s2" colspan="12">Charitable Institutions</td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Private Sector Assistance Program', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:258px;left:-1px">Private Sector Assistance Program
                        </div>
                    </td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s58"></td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s134"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('None', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s22 softmerge">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s49"></td>
                    <td class="s49"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s41"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s2"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s64"></td>
                    <td class="s104"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s139"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $fsm) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">16</td>
                    <td class="s35" dir="ltr" colspan="4">Others, specify:</td>
                    <td class="s140" dir="ltr" colspan="17">{{ $data->f4financialsupportmechanisms['financial_other'] ?? '' }}</td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s70"></td>
                    <td class="s106"></td>
                </tr>

                @php
                    $cspmap_meds = $data->f4financialsupportmechanisms['cspmap_meds'] ?? [];
                @endphp

                <tr style="height: 21px">
                    
                    <td class="s13" dir="ltr" rowspan="31">192</td>
                    <td class="s20" dir="ltr" colspan="7" rowspan="31">If CSPMAP is checked, select
                        the medicines availed under the CSPMAP program. <br><span
                            style="font-weight:normal;font-style:italic;">(can be multiple)</span></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Asparaginase 10,000 IU vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s3" colspan="12">Asparaginase 10,000 IU vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Idarubicin 5 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">32</td>
                    <td class="s3" colspan="13">Idarubicin 5 mg vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bicalutamide 50 mg', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s3" colspan="12">Bicalutamide 50 mg </td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ifosfamide 1 g vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">33</td>
                    <td class="s3" colspan="13">Ifosfamide 1 g vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bleomycin (as Sulfate) 15 mg Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s3" colspan="12">Bleomycin (as Sulfate) 15 mg Vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Imatinib 400 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">34</td>
                    <td class="s3" colspan="13">Imatinib 400 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Calcium Folinate (Leucovorin Calcium) 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s3" colspan="12">Calcium Folinate (Leucovorin Calcium) 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Imatinib Mesilate 100 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">35</td>
                    <td class="s3" colspan="13">Imatinib Mesilate 100 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Capecitabine 500 mg Tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s3" colspan="12">Capecitabine 500 mg Tablet</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Irinotecan 40 mg/2 mL vial concentrate vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">36</td>
                    <td class="s3" colspan="13">Irinotecan 40 mg/2 mL vial concentrate vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Carboplatin 150 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s3" colspan="12">Carboplatin 150 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Letrozole 2.5 mg Tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">37</td>
                    <td class="s3" colspan="13">Letrozole 2.5 mg Tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Carboplatin 450 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s3" colspan="12">Carboplatin 450 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Leuproreline Acetate 3.75 mg vial (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">38</td>
                    <td class="s3" colspan="13">Leuproreline Acetate 3.75 mg vial (PFS)</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cisplatin 1 mg/mL, 10 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">8</td>
                    <td class="s3" colspan="12">Cisplatin 1 mg/mL, 10 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Mercaptopurine 50 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">39</td>
                    <td class="s3" colspan="13">Mercaptopurine 50 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cisplatin 1 mg/mL, 50 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s3" colspan="12">Cisplatin 1 mg/mL, 50 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Mesna 100 mg/mL, 4 mL Amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">40</td>
                    <td class="s3" colspan="13">Mesna 100 mg/mL, 4 mL Amp</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cyclophosphamide 500 mg powder vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s3" colspan="12">Cyclophosphamide 500 mg powder vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Methotrexate 2.5 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">41</td>
                    <td class="s3" colspan="13">Methotrexate 2.5 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cytarabine 100 mg/mL 1 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s3" colspan="12">Cytarabine 100 mg/mL 1 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Methotrexate 25 mg/mL, 2 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">42</td>
                    <td class="s3" colspan="13">Methotrexate 25 mg/mL, 2 mL vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Cytarabine 100 mg/mL 5 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s3" colspan="12">Cytarabine 100 mg/mL 5 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Metoclopramide 5 mg/mL, 2 mL Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">43</td>
                    <td class="s3" colspan="13">Metoclopramide 5 mg/mL, 2 mL Ampule</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Dacarbazine 200 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s3" colspan="12">Dacarbazine 200 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 10 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">44</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 10 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Dactinomycin (Actinomycin D) 500 mcg powder vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s3" colspan="12">Dactinomycin (Actinomycin D) 500 mcg powder vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">45</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Diazepam 5mg/mL, 2 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s3" colspan="12">Diazepam 5mg/mL, 2 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Morphine (as Sulfate) 30 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">46</td>
                    <td class="s3" colspan="13">Morphine (as Sulfate) 30 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Diphenhydramine (as Hydrochloride)  50 mg/mL, 1 mL Amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">16</td>
                    <td class="s3" colspan="12">Diphenhydramine (as Hydrochloride)  50 mg/mL, 1 mL Amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Omeprazole 40 mg powder vial + 10 mL solvent Ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">47</td>
                    <td class="s3" colspan="13">Omeprazole 40 mg powder vial + 10 mL solvent Ampule</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Docetaxel 20 mg/mL, 1 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">17</td>
                    <td class="s3" colspan="12">Docetaxel 20 mg/mL, 1 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">48</td>
                    <td class="s3" colspan="13">Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Docetaxel 40 mg/mL, 2 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">18</td>
                    <td class="s3" colspan="12">Docetaxel 40 mg/mL, 2 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">49</td>
                    <td class="s3" colspan="13">Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Doxorubicin 10 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">19</td>
                    <td class="s3" colspan="12">Doxorubicin 10 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">50</td>
                    <td class="s3" colspan="13">Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Doxorubicin 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">20</td>
                    <td class="s3" colspan="12">Doxorubicin 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Paclitaxel 6 mg/mL, 16.7 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">51</td>
                    <td class="s3" colspan="13">Paclitaxel 6 mg/mL, 16.7 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Epirubicin 50 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">21</td>
                    <td class="s3" colspan="12">Epirubicin 50 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Paclitaxel 6 mg/mL, 25 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">52</td>
                    <td class="s3" colspan="13">Paclitaxel 6 mg/mL, 25 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Etoposide 20 mg/mL, 5 mL amp/vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">22</td>
                    <td class="s3" colspan="12">Etoposide 20 mg/mL, 5 mL amp/vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">53</td>
                    <td class="s55 softmerge">
                        <div class="softmerge-inner" style="width:340px;left:-1px">
                            Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s141"></td>
                    <td class="s142"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Fentanyl Citrate 50 mcg/mL, 2 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">23</td>
                    <td class="s3" colspan="12">Fentanyl Citrate 50 mcg/mL, 2 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Rituximab 10 mg/mL, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">54</td>
                    <td class="s3" colspan="13">Rituximab 10 mg/mL, 10 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">24</td>
                    <td class="s143" colspan="14">Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)
                    </td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Rituximab 10 mg/mL, 50 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">55</td>
                    <td class="s3" colspan="13">Rituximab 10 mg/mL, 50 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Fluorouracil 50 mg/mL, 10 mL vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">25</td>
                    <td class="s3" colspan="12">Fluorouracil 50 mg/mL, 10 mL vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Tamoxifen 20 mg tablet', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">56</td>
                    <td class="s3" colspan="13">Tamoxifen 20 mg tablet</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Gemcitabine 1 g vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">26</td>
                    <td class="s3" colspan="12">Gemcitabine 1 g vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Trastuzumab 150 mg Lyophilized Powder', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">57</td>
                    <td class="s3" colspan="13">Trastuzumab 150 mg Lyophilized Powder</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Gemcitabine 200 mg vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">27</td>
                    <td class="s3" colspan="12">Gemcitabine 200 mg vial</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Trastuzumab 600 mg/ 5ml (120mg/ml), 5ml Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">58</td>
                    <td class="s3" colspan="13">Trastuzumab 600 mg/ 5ml (120mg/ml), 5ml Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">28</td>
                    <td class="s3" colspan="14">Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Vinblastine Sulfate 1 mg/mL, 10 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">59</td>
                    <td class="s3" colspan="13">Vinblastine Sulfate 1 mg/mL, 10 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Haloperidol 5 mg/mL, 1 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">29</td>
                    <td class="s3" colspan="12">Haloperidol 5 mg/mL, 1 mL amp</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Vincristine (as Sulfate) 1 mg/mL, 1 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">60</td>
                    <td class="s3" colspan="13">Vincristine (as Sulfate) 1 mg/mL, 1 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hydroxyurea 500 mg capsule', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">30</td>
                    <td class="s3" colspan="12">Hydroxyurea 500 mg capsule</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Vincristine (as sulfate) 1 mg/mL, 2 mL Vial', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">61</td>
                    <td class="s3" colspan="13">Vincristine (as sulfate) 1 mg/mL, 2 mL Vial</td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Hyoscine (as N-butyl bromide) 20 mg/mL. 1 mL amp', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">31</td>
                    <td class="s118" colspan="13">Hyoscine (as N-butyl bromide) 20 mg/mL. 1 mL amp</td>
                    <td class="s36"></td>
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $cspmap_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">62</td>
                    <td class="s118" dir="ltr" colspan="4">Others, specify: </td>
                    <td class="s144" colspan="10">{{ $data->f4financialsupportmechanisms['cspmap_other'] ?? '' }}</td>
                </tr>
                @php
                    $other_meds = $data->f4financialsupportmechanisms['other_meds'] ?? [];
                @endphp
                <tr style="height: 21px">
                    
                    <td class="s145" dir="ltr" rowspan="8">193</td>
                    <td class="s20" colspan="7" rowspan="8">Other Medicines Availed</td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('All-trans Retinoic Acid (ATRA)', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">1</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:180px;left:-1px">All-trans Retinoic Acid (ATRA)
                        </div>
                    </td>
                    <td class="s141"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                    <td class="s28" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Lenvatinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">9</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Lenvatinib</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Arsenic', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">2</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:50px;left:-1px">Arsenic</div>
                    </td>
                    <td class="s142"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Osimertinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">10</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Osimertinib</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Atezolizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">3</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Atezolizumab</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Pegylated Asparaginase', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">11</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:154px;left:-1px">Pegylated Asparaginase</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s51"></td>
                    <td class="s51"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bevacizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">4</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Bevacizumab</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s146"></td>
                    <td class="s147"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Pembrolizumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">12</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Pembrolizumab</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Blinatumab', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">5</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Blinatumab</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s147"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Procarbazine', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">13</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:102px;left:-1px">Procarbazine</div>
                    </td>
                    <td class="s27"></td>
                    <td class="s27"></td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Bortezomib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">6</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Bortezomib</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s147"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('None', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">14</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:50px;left:-1px">None</div>
                    </td>
                    <td class="s47"></td>
                    <td class="s47"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s149"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Dasatinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">7</td>
                    <td class="s55 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Dasatinib</div>
                    </td>
                    <td class="s141"></td>
                    <td class="s147"></td>
                    <td class="s147"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s148"></td>
                    <td class="s21" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Others, specify:', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s1" dir="ltr">15</td>
                    <td class="s4" colspan="4">Others, specify:</td>
                    <td class="s150" colspan="12">{{ $data->f4financialsupportmechanisms['other_med_other'] ?? '' }}</td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s4"></td>
                    <td class="s48"></td>
                </tr>
                <tr style="height: 21px">
                    
                    <td class="s30" dir="ltr"><svg width="16px" height="16px" viewBox="0 0 16 16"
                            style="display:inline;">
                            <use href="#{{ in_array('Erlotinib', $other_meds) ? 'checked' : 'unchecked' }}-checkbox-id" fill="#000000" />
                        </svg></td>
                    <td class="s31" dir="ltr">8</td>
                    <td class="s151 softmerge" dir="ltr">
                        <div class="softmerge-inner" style="width:76px;left:-1px">Erlotinib</div>
                    </td>
                    <td class="s152"></td>
                    <td class="s153"></td>
                    <td class="s153"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s154"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s36"></td>
                    <td class="s71"></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <script>
        function posObj(sheet, id, row, col, x, y) {
            var rtl = false;
            var sheetElement = document.getElementById(sheet);
            if (!sheetElement) {
                sheetElement = document.getElementById(sheet + '-grid-container');
            }
            if (sheetElement) {
                rtl = sheetElement.getAttribute('dir') == 'rtl';
            }
            var r = document.getElementById(sheet + 'R' + row);
            var c = document.getElementById(sheet + 'C' + col);
            if (r && c) {
                var objElement = document.getElementById(id);
                var s = objElement.style;
                var t = y;
                while (r && r != sheetElement) {
                    t += r.offsetTop;
                    r = r.offsetParent;
                }
                var offsetX = x;
                while (c && c != sheetElement) {
                    offsetX += c.offsetLeft;
                    c = c.offsetParent;
                }
                if (rtl) {
                    offsetX -= objElement.offsetWidth;
                }
                s.left = offsetX + 'px';
                s.top = t + 'px';
                s.display = 'block';
                s.border = '1px solid #000000';
            }
        }

        function posObjs() {
            posObj('2132369599', 'embed_316406272', 72, 18, 10, 2);
            posObj('2132369599', 'embed_62271196', 92, 10, 27, 4);
        }
        posObjs();
    </script>
</body>

</html>
