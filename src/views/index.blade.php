<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{ config('launchpad.title') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="description" content="{{ config('launchpad.desc') }}" />
    <meta property="og:site_name" content="{{ config('launchpad.name') }}" />
    <meta property="og:title" content="{{ config('launchpad.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ config('launchpad.desc') }}" />
    <meta property="og:image" content="{{ asset('_launchpad/assets/images/share.png') }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="800" />
    <meta property="og:url" content="{{ config('launchpad.url') }}" />
    <meta property="twitter:card" content="summary_large_image" />
    <link rel="canonical" href="{{ config('launchpad.url') }}" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,700,700italic%7CPoppins:700,700italic,600,600italic,900,900italic" rel="stylesheet" type="text/css" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/shared/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/shared/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/shared/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/shared/favicon/site.webmanifest') }}">

    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            -webkit-text-size-adjust: none
        }

        mark {
            background-color: transparent;
            color: inherit
        }

        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            min-width: 320px;
            min-height: var(--viewport-height);
            line-height: 1.0;
            word-wrap: break-word;
            overflow-x: hidden;
            background-color: #FFFFFF;
        }

        body:after {
            display: block;
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #15171C;
            z-index: 1;
            opacity: 0;
            visibility: hidden;
            transition: opacity .75s ease-in-out 0s, visibility .75s 0s;
            transform: scale(1);
        }

        body.is-loading:after {
            opacity: 1;
            visibility: visible;
        }

        :root {
            --site-language-direction: ltr;
            --site-language-alignment: left;
            --viewport-height: 100vh;
            --background-height: 100vh;
        }

        html {
            font-size: 18pt;
        }

        u {
            text-decoration: underline;
        }

        strong {
            color: inherit;
            font-weight: bolder;
        }

        em {
            font-style: italic;
        }

        code {
            font-family: 'Lucida Console', 'Courier New', monospace;
            font-weight: normal;
            text-indent: 0;
            letter-spacing: 0;
            font-size: 0.9em;
            margin: 0 0.25em;
            padding: 0.25em 0.5em;
            background-color: rgba(144, 144, 144, 0.25);
            border-radius: 0.25em;
        }

        mark {
            background-color: rgba(144, 144, 144, 0.25);
        }

        s {
            text-decoration: line-through;
        }

        a {
            color: inherit;
            text-decoration: underline;
            transition: color 0.25s ease;
        }

        #wrapper {
            -webkit-overflow-scrolling: touch;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            min-height: var(--viewport-height);
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        #main {
            display: flex;
            position: relative;
            max-width: 100%;
            z-index: 1;
            align-items: center;
            justify-content: center;
            flex-grow: 0;
            flex-shrink: 0;
            text-align: left;
            transition: opacity 1.375s ease-in-out 0s;
        }

        #main>.inner {
            position: relative;
            z-index: 1;
            border-radius: inherit;
            padding: 2.75rem 6.75rem;
            max-width: 100%;
            width: 98rem;
        }

        #main>.inner>header {
            margin-bottom: 2rem;
        }

        #main>.inner>footer {
            margin-top: 2rem;
        }

        #main>.inner>*>* {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        #main>.inner>*> :first-child {
            margin-top: 0 !important;
        }

        #main>.inner>*> :last-child {
            margin-bottom: 0 !important;
        }

        #main>.inner>.full {
            margin-left: calc(-6.75rem);
            width: calc(100% + 13.5rem + 0.4725px);
            max-width: calc(100% + 13.5rem + 0.4725px);
        }

        #main>.inner>.full:first-child {
            margin-top: -2.75rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main>.inner>.full:last-child {
            margin-bottom: -2.75rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #main>.inner>.full.screen {
            width: 100vw;
            max-width: 100vw;
            position: relative;
            border-radius: 0 !important;
            left: 0;
            right: auto;
            margin-left: calc(-6.75rem);
        }

        #main>.inner>*>.full {
            margin-left: calc(-6.75rem);
            width: calc(100% + 13.5rem + 0.4725px);
            max-width: calc(100% + 13.5rem + 0.4725px);
        }

        #main>.inner>*>.full.screen {
            width: 100vw;
            max-width: 100vw;
            position: relative;
            border-radius: 0 !important;
            left: 0;
            right: auto;
            margin-left: calc(-6.75rem);
        }

        #main>.inner>.active>.full:first-child {
            margin-top: -2.75rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main>.inner>.active {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #main>.inner>.active>.full:last-child {
            margin-bottom: -2.75rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        body.is-loading #main {
            opacity: 0;
        }

        #main>.inner>header,
        #main>.inner>footer {
            transition: opacity 0.25s ease-in-out 0.375s, visibility 0.25s linear 0.375s;
        }

        #main>.inner>header.hidden,
        #main>.inner>footer.hidden {
            transition: opacity 0.25s ease-in-out, visibility 0.25s;
            opacity: 0;
            visibility: hidden;
        }

        #main>.inner>section {
            transition: opacity 0.5s ease-in-out 0.25s, min-height 0.25s ease-in-out, max-height 0.25s ease-in-out;
        }

        #main>.inner>section.inactive {
            transition: opacity 0.25s ease-in-out;
            opacity: 0;
        }

        body.is-instant #main,
        body.is-instant #main>.inner>*,
        body.is-instant #main>.inner>section>* {
            transition: none !important;
        }

        body.is-instant:after {
            display: none !important;
            transition: none !important;
        }

        h1,
        h2,
        h3,
        p {
            direction: var(--site-language-direction);
        }

        h1 br+br,
        h2 br+br,
        h3 br+br,
        p br+br {
            display: block;
            content: ' ';
        }

        h1 .li,
        h2 .li,
        h3 .li,
        p .li {
            display: list-item;
            padding-left: 0.5em;
            margin: 0.75em 0 0 1em;
        }

        #text08 br+br {
            margin-top: 0.975rem;
        }

        #text08 {
            color: #2B2B2B;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1em;
            line-height: 1.625;
            font-weight: 300;
        }

        #text08 a {
            text-decoration: underline;
        }

        #text08 a:hover {
            text-decoration: none;
        }

        #text02 br+br {
            margin-top: 0.975rem;
        }

        #text02 {
            color: rgba(59, 59, 59, 0.4);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.75em;
            line-height: 1.625;
            font-weight: 300;
        }

        #text02 a {
            text-decoration: underline;
        }

        #text02 a:hover {
            text-decoration: none;
        }

        #text05 br+br {
            margin-top: 0.825rem;
        }

        #text05 {
            color: #2B2B2B;
            font-family: 'Poppins', sans-serif;
            letter-spacing: -0.05rem;
            width: 100%;
            font-size: 2em;
            line-height: 1.375;
            font-weight: 700;
        }

        #text05 a {
            text-decoration: underline;
        }

        #text05 a:hover {
            text-decoration: none;
        }

        #text04 br+br {
            margin-top: 0.975rem;
        }

        #text04 {
            color: #2B2A2A;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.875em;
            line-height: 1.625;
            font-weight: 400;
        }

        #text04 a {
            text-decoration: underline;
        }

        #text04 a:hover {
            text-decoration: none;
        }

        #text06 br+br {
            margin-top: 0.975rem;
        }

        #text06 {
            color: #2B2B2B;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.875em;
            line-height: 1.625;
            font-weight: 400;
        }

        #text06 a {
            text-decoration: underline;
        }

        #text06 a:hover {
            text-decoration: none;
        }

        #text03 br+br {
            margin-top: 0.45rem;
        }

        #text03 {
            color: #2B2B2B;
            font-family: 'Poppins', sans-serif;
            letter-spacing: -0.05rem;
            width: 100%;
            font-size: 1.875em;
            line-height: 0.75;
            font-weight: 700;
        }

        #text03 a {
            text-decoration: underline;
        }

        #text03 a:hover {
            text-decoration: none;
        }

        #text01 br+br {
            margin-top: 0.975rem;
        }

        #text01 {
            color: #2B2B2B;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1em;
            line-height: 1.625;
            font-weight: 300;
        }

        #text01 a {
            text-decoration: underline;
        }

        #text01 a:hover {
            text-decoration: none;
        }

        #text07 br+br {
            margin-top: 0.975rem;
        }

        #text07 {
            color: #2B2B2B;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1em;
            line-height: 1.625;
            font-weight: 300;
        }

        #text07 a {
            text-decoration: underline;
        }

        #text07 a:hover {
            text-decoration: none;
        }

        .image {
            position: relative;
            max-width: 100%;
            display: block;
        }

        .image a,
        .image span {
            position: relative;
            max-width: 100%;
            display: inline-block;
            vertical-align: top;
        }

        .image a img,
        .image span img {
            display: block;
        }

        .image img {
            width: 100%;
            max-width: 100%;
            display: inline-block;
            vertical-align: top;
        }

        .image.full img {
            display: block;
        }

        .image.full:first-child img {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .image.full:last-child img {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .image.full a,
        .image.full span {
            display: block;
        }

        .image.full:first-child a,
        .image.full:first-child span {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .image.full:last-child a,
        .image.full:last-child span {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #image01 img {
            width: 7.5rem;
        }

        #image02 img {
            width: 10.125rem;
        }

        form .inner {
            display: inline-flex;
            max-width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
        }

        form label {
            direction: var(--site-language-direction);
            display: block;
        }

        form .field button {
            background-color: transparent;
            border: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        form .field button>svg {
            height: 50%;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="number"],
        form textarea,
        form select,
        form .file {
            text-align: var(--site-language-alignment);
            direction: var(--site-language-direction);
            display: block;
            background-color: transparent;
            border: 0;
            width: 100%;
            outline: 0;
        }

        form input[type="tel"] {
            -webkit-appearance: none;
        }

        form textarea {
            height: 10rem;
            line-height: normal;
        }

        form select {
            background-size: 1rem;
            background-repeat: no-repeat;
            text-overflow: ellipsis;
            -webkit-appearance: none;
        }

        form select option {
            background-color: white;
            color: black;
        }

        form select::-ms-expand {
            display: none;
        }

        form input[type="checkbox"] {
            -webkit-appearance: none;
            display: block;
            float: left;
            margin-right: -2rem;
            opacity: 0;
            width: 1rem;
            z-index: -1;
        }

        form input[type="checkbox"]+label {
            display: inline-flex;
            text-align: left;
            line-height: 1.6;
            align-items: center;
        }

        form input[type="checkbox"]+label:before {
            content: '';
            display: inline-block;
            background-position: center;
            background-repeat: no-repeat;
            vertical-align: middle;
            cursor: pointer;
            flex-grow: 0;
            flex-shrink: 0;
        }

        form input[type="number"] {
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }

        form input[type="number"]::-webkit-inner-spin-button,
        form input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        form .number {
            position: relative;
        }

        form .number>input[type="number"] {
            text-align: center;
        }

        form .number>button {
            position: absolute;
        }

        form .field .number>button>svg {
            height: 40%;
        }

        form .file {
            position: relative;
        }

        form .file>button {
            position: absolute;
        }

        form .file>input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        form .file[data-filename]:before {
            content: attr(data-filename);
            display: block;
            white-space: nowrap;
            position: absolute;
            top: 0;
            height: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            background-repeat: no-repeat;
        }

        form .file[data-filename=""]:before {
            content: attr(data-placeholder);
            background-image: none !important;
            padding-left: 0 !important;
        }

        form .field .file>button>svg {
            height: 53%;
        }

        form .actions {
            max-width: 100%;
        }

        form .actions button {
            background-color: transparent;
            border: 0;
            cursor: pointer;
            text-align: center;
            max-width: 100%;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }

        form .actions button:disabled {
            opacity: 0.35;
            cursor: default;
            pointer-events: none;
        }

        @keyframes button-spinner {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        #form01 .inner>* {
            margin: 0 0 0 1.25rem;
        }

        #form01 .inner> :first-child {
            margin: 0;
        }

        #form01 .inner {
            width: 43rem;
            flex-wrap: nowrap;
            flex-direction: row;
            align-items: center;
        }

        #form01 label:first-child {
            margin: 0.25rem 0 0.9375rem 0;
            font-size: 1em;
            line-height: 1.5;
            font-family: '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            font-weight: 400;
            color: #000000;
        }

        #form01 .field button {
            width: 2.4rem;
            height: 2.4rem;
            line-height: 2.4rem;
            background-size: 1.2rem;
            border-radius: 0.16rem;
            background-color: #009e95;
            transition: color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
        }

        #form01 .field button:hover {
            background-color: #0EB5AC;
        }

        #form01 .field button svg {
            fill: #FFFFFF;
            transition: fill 0.25s ease;
        }

        #form01 input[type="text"],
        #form01 input[type="email"],
        #form01 input[type="tel"],
        #form01 input[type="number"],
        #form01 textarea,
        #form01 select,
        #form01 input[type="checkbox"]+label,
        #form01 .file {
            font-size: 1em;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            border-radius: 0.25rem;
        }

        #form01 input[type="text"],
        #form01 input[type="email"],
        #form01 input[type="tel"],
        #form01 input[type="number"],
        #form01 textarea,
        #form01 select,
        #form01 .file {
            color: #2B2B2B;
            border: solid 1px rgba(43, 43, 43, 0.4);
        }

        #form01 input[type="text"]:focus,
        #form01 input[type="email"]:focus,
        #form01 input[type="tel"]:focus,
        #form01 input[type="number"]:focus,
        #form01 textarea:focus,
        #form01 select:focus,
        #form01 .file.focus {
            border-color: #009E95;
            box-shadow: 0 0 0 1px #009E95;
        }

        #form01 input[type="checkbox"]+label {
            color: #2B2B2B;
        }

        #form01 input[type="text"],
        #form01 input[type="email"],
        #form01 input[type="tel"],
        #form01 input[type="number"],
        #form01 select,
        #form01 .file {
            height: 3rem;
            padding: 0 1.05rem;
            line-height: calc(3rem - 2px);
        }

        #form01 textarea {
            padding: 1.05rem;
            height: 15rem;
            line-height: 1.5;
            padding-top: 0.7875rem;
        }

        #form01 select {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='504' height='552' preserveAspectRatio='none' viewBox='0 0 504 552'%3E%3Cpath d='M483.9,210.9L252,442.9L20.1,210.9l67.9-67.9L252,307.1l164.1-164.1L483.9,210.9z' fill='rgba(43,43,43,0.4)' /%3E%3C/svg%3E");
            background-position: calc(100% - 1.05rem) center;
            padding-right: 3rem;
        }

        #form01 input[type="checkbox"]+label:before {
            border-radius: 0.25rem;
            color: #2B2B2B;
            border: solid 1px rgba(43, 43, 43, 0.4);
            width: 2.25rem;
            height: 2.25rem;
            background-size: 1.275rem;
            margin-right: 1.125rem;
        }

        #form01 input[type="checkbox"]:checked+label:before {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='648' height='552' preserveAspectRatio='none' viewBox='0 0 648 552'%3E%3Cpath d='M225.3,517.7L2.1,293.1l68.1-67.7L226,382.3L578.1,35.6l67.4,68.4L225.3,517.7z' fill='%232B2B2B' /%3E%3C/svg%3E");
        }

        #form01 input[type="checkbox"]:focus+label:before {
            border-color: #009E95;
            box-shadow: 0 0 0 1px #009E95;
        }

        #form01 .number>input[type="number"] {
            padding-left: 2.9rem;
            padding-right: 2.9rem;
        }

        #form01 .number>button.decrement {
            bottom: calc(0.3rem - 1px);
            left: calc(0.3rem - 1px);
        }

        #form01 .number>button.increment {
            bottom: calc(0.3rem - 1px);
            right: calc(0.3rem - 1px);
        }

        #form01 .file:before {
            width: calc(100% - 4.05rem);
            background-size: 1rem;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M27.4,4.5c-0.4-0.4-0.8-0.7-1.5-0.9c-0.6-0.3-1.2-0.4-1.7-0.4H7.1c-0.5,0-0.9,0.2-1.3,0.5S5.3,4.5,5.3,5.1v30.7 c0,0.5,0.2,0.9,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5h25.8c0.5,0,0.9-0.2,1.3-0.5c0.4-0.4,0.5-0.8,0.5-1.3V13.7c0-0.5-0.1-1.1-0.4-1.7 c-0.3-0.6-0.6-1.1-0.9-1.5L27.4,4.5z M25.7,6.2l6,6c0.2,0.2,0.3,0.4,0.4,0.8h-7.2V5.8C25.3,5.9,25.5,6.1,25.7,6.2z M7.7,35.2V5.7 h14.7v8c0,0.5,0.2,0.9,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5h8v19.7H7.7z' style='opacity: 0.375' fill='%232B2B2B' /%3E%3C/svg%3E");
            background-position: left;
            padding-left: 1.4rem;
        }

        #form01 .file>button {
            bottom: calc(0.3rem - 1px);
            right: calc(0.3rem - 1px);
        }

        #form01 .actions button {
            height: 3rem;
            line-height: 3rem;
            padding: 0 1.5rem;
            text-transform: uppercase;
            font-size: 0.625em;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.175rem;
            padding-left: calc(0.175rem + 1.5rem);
            font-weight: 600;
            border-radius: 0.25rem;
            direction: var(--site-language-direction);
            background-color: #009e95;
            color: #FFFFFF;
            transition: color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
            position: relative;
        }

        #form01 .actions button:hover {
            background-color: #0EB5AC;
        }

        #form01 .inner .field {
            width: 100%;
            flex-grow: 1;
            flex-shrink: 1;
        }

        #form01 .inner .actions {
            flex-grow: 0;
            flex-shrink: 0;
        }

        #form01 .actions button:before {
            pointer-events: none;
            content: '';
            display: block;
            width: 2.25rem;
            height: 2.25rem;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -1.125rem 0 0 -1.125rem;
            animation: button-spinner 1s infinite linear;
            transition: opacity 0.25s ease;
            transition-delay: 0s;
            opacity: 0;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iOTZweCIgaGVpZ2h0PSI5NnB4IiB2aWV3Qm94PSIwIDAgOTYgOTYiIHpvb21BbmRQYW49ImRpc2FibGUiPjxzdHlsZT5jaXJjbGUge2ZpbGw6IHRyYW5zcGFyZW50OyBzdHJva2U6ICNGRkZGRkY7IHN0cm9rZS13aWR0aDogMnB4OyB9PC9zdHlsZT48ZGVmcz48Y2xpcFBhdGggaWQ9ImNvcm5lciI+PHBvbHlnb24gcG9pbnRzPSIwLDAgNDgsMCA0OCw0OCA5Niw0OCA5Niw5NiAwLDk2IiAvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGNsaXAtcGF0aD0idXJsKCNjb3JuZXIpIj48Y2lyY2xlIGN4PSI0OCIgY3k9IjQ4IiByPSIzMiIvPjwvZz48L3N2Zz4=');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 2.25rem;
        }

        #form01 .actions button.waiting {
            color: transparent;
        }

        #form01 .actions button.waiting svg {
            fill: transparent;
        }

        #form01 .actions button.waiting:before {
            opacity: 1.0;
            transition-delay: 0.125s;
        }

        #form01 ::-webkit-input-placeholder {
            color: #2B2B2B;
            opacity: 0.55;
        }

        #form01 :-moz-placeholder {
            color: #2B2B2B;
            opacity: 0.55;
        }

        #form01 ::-moz-placeholder {
            color: #2B2B2B;
            opacity: 0.55;
        }

        #form01 :-ms-input-placeholder {
            color: #2B2B2B;
            opacity: 0.55;
        }

        #form01 .file[data-filename=""]:before {
            color: #2B2B2B;
            opacity: 0.55;
        }

        #form01 input[name="phone"] {
            display: none;
        }

        .container {
            position: relative;
        }

        .container>.wrapper {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
        }

        .container>.wrapper>.inner {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
        }

        #main .container.full:first-child>.wrapper {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #main .container.full:first-child>.wrapper>.inner {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper>.inner {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container02>.wrapper {
            display: inline-block;
            width: 60rem;
            background-color: transparent;
        }

        #container02>.wrapper>.inner {
            padding: 0rem 0rem;
        }

        #container02.default>.wrapper>.inner>* {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        #container02.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        #container02.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        #container02.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        #container02.columns>.wrapper>.inner>* {
            flex-shrink: 0;
            flex-grow: 0;
            max-width: 100%;
            padding: 0 0 0 2rem;
        }

        #container02.columns>.wrapper>.inner>*>* {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        #container02.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        #container02.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        #container02.columns>.wrapper>.inner>*:first-child {
            margin-left: -2rem;
        }

        #container02.default>.wrapper>.inner>.full {
            margin-left: calc(0rem);
            width: calc(100% + 0rem + 0.4725px);
            max-width: none;
        }

        #container02.default>.wrapper>.inner>.full:first-child {
            margin-top: 0rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #container02.default>.wrapper>.inner>.full:last-child {
            margin-bottom: 0rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container02.columns>.wrapper>.inner>div>.full {
            margin-left: calc(-1rem);
            width: calc(100% + 2rem + 0.4725px);
            max-width: none;
        }

        #container02.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(0rem);
            width: calc(100% + 1rem + 0.4725px);
        }

        #container02.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + 1rem + 0.4725px);
        }

        #container02.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(0rem) !important;
        }

        #container02.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(0rem) !important;
        }

        #container02.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        #container02.columns>.wrapper>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        #container02.columns>.wrapper>.inner>.full:last-child {
            border-top-right-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            height: calc(100% + 0rem);
            border-radius: inherit;
        }

        #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
            height: 100%;
            border-radius: inherit;
        }

        #container01>.wrapper>.inner {
            padding: 0rem 0rem;
        }

        #container01 {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: flex-start;
            background-color: transparent;
        }

        #container01>.wrapper {
            width: 100%;
            max-width: 100%;
        }

        #container01.default>.wrapper>.inner>* {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        #container01.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        #container01.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        #container01.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        #container01.columns>.wrapper>.inner>* {
            flex-shrink: 0;
            flex-grow: 0;
            max-width: 100%;
            padding: 0 0 0 1.875rem;
        }

        #container01.columns>.wrapper>.inner>*>* {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        #container01.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        #container01.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        #container01.columns>.wrapper>.inner>*:first-child {
            margin-left: -1.875rem;
        }

        #container01.default>.wrapper>.inner>.full {
            margin-left: calc(0rem);
            width: calc(100% + 0rem + 0.4725px);
            max-width: none;
        }

        #container01.default>.wrapper>.inner>.full:first-child {
            margin-top: 0rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #container01.default>.wrapper>.inner>.full:last-child {
            margin-bottom: 0rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>div>.full {
            margin-left: calc(-0.9375rem);
            width: calc(100% + 1.875rem + 0.4725px);
            max-width: none;
        }

        #container01.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(0rem);
            width: calc(100% + 0.9375rem + 0.4725px);
        }

        #container01.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + 0.9375rem + 0.4725px);
        }

        #container01.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(0rem) !important;
        }

        #container01.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(0rem) !important;
        }

        #container01.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        #container01.columns>.wrapper>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full:last-child {
            border-top-right-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            height: calc(100% + 0rem);
            border-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
            height: 100%;
            border-radius: inherit;
        }

        #container01>.wrapper>.inner> :nth-child(1) {
            width: calc(55% + 0.93rem);
        }

        #container01>.wrapper>.inner> :nth-child(2) {
            width: calc(45% + 0.93rem);
            text-align: right;
        }

        #columns02>.wrapper {
            display: inline-block;
            width: 60rem;
            background-color: transparent;
        }

        #columns02>.wrapper>.inner {
            padding: 0rem 0rem;
        }

        #columns02.default>.wrapper>.inner>* {
            margin-top: 0.625rem;
            margin-bottom: 0.625rem;
        }

        #columns02.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        #columns02.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        #columns02.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        #columns02.columns>.wrapper>.inner>* {
            flex-shrink: 0;
            flex-grow: 0;
            max-width: 100%;
            padding: 0 0 0 2rem;
        }

        #columns02.columns>.wrapper>.inner>*>* {
            margin-top: 0.625rem;
            margin-bottom: 0.625rem;
        }

        #columns02.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        #columns02.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        #columns02.columns>.wrapper>.inner>*:first-child {
            margin-left: -2rem;
        }

        #columns02.default>.wrapper>.inner>.full {
            margin-left: calc(0rem);
            width: calc(100% + 0rem + 0.4725px);
            max-width: none;
        }

        #columns02.default>.wrapper>.inner>.full:first-child {
            margin-top: 0rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #columns02.default>.wrapper>.inner>.full:last-child {
            margin-bottom: 0rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #columns02.columns>.wrapper>.inner>div>.full {
            margin-left: calc(-1rem);
            width: calc(100% + 2rem + 0.4725px);
            max-width: none;
        }

        #columns02.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(0rem);
            width: calc(100% + 1rem + 0.4725px);
        }

        #columns02.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + 1rem + 0.4725px);
        }

        #columns02.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(0rem) !important;
        }

        #columns02.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(0rem) !important;
        }

        #columns02.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        #columns02.columns>.wrapper>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        #columns02.columns>.wrapper>.inner>.full:last-child {
            border-top-right-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            height: calc(100% + 0rem);
            border-radius: inherit;
        }

        #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
            height: 100%;
            border-radius: inherit;
        }

        #columns03>.wrapper {
            display: inline-block;
            width: 60rem;
            background-color: transparent;
        }

        #columns03>.wrapper>.inner {
            padding: 0rem 0rem;
        }

        #columns03.default>.wrapper>.inner>* {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        #columns03.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        #columns03.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        #columns03.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        #columns03.columns>.wrapper>.inner>* {
            flex-shrink: 0;
            flex-grow: 0;
            max-width: 100%;
            padding: 0 0 0 2rem;
        }

        #columns03.columns>.wrapper>.inner>*>* {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        #columns03.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        #columns03.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        #columns03.columns>.wrapper>.inner>*:first-child {
            margin-left: -2rem;
        }

        #columns03.default>.wrapper>.inner>.full {
            margin-left: calc(0rem);
            width: calc(100% + 0rem + 0.4725px);
            max-width: none;
        }

        #columns03.default>.wrapper>.inner>.full:first-child {
            margin-top: 0rem !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #columns03.default>.wrapper>.inner>.full:last-child {
            margin-bottom: 0rem !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #columns03.columns>.wrapper>.inner>div>.full {
            margin-left: calc(-1rem);
            width: calc(100% + 2rem + 0.4725px);
            max-width: none;
        }

        #columns03.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(0rem);
            width: calc(100% + 1rem + 0.4725px);
        }

        #columns03.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + 1rem + 0.4725px);
        }

        #columns03.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(0rem) !important;
        }

        #columns03.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(0rem) !important;
        }

        #columns03.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        #columns03.columns>.wrapper>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        #columns03.columns>.wrapper>.inner>.full:last-child {
            border-top-right-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            height: calc(100% + 0rem);
            border-radius: inherit;
        }

        #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
            height: 100%;
            border-radius: inherit;
        }

        .buttons {
            cursor: default;
            padding: 0;
            letter-spacing: 0;
        }

        .buttons li a {
            align-items: center;
            justify-content: center;
            max-width: 100%;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        #buttons01 {
            width: calc(100% + 0rem);
            margin-left: -0rem;
        }

        #buttons01 li {
            display: inline-block;
            vertical-align: middle;
            max-width: calc(100% - 0rem);
            margin: 0rem;
        }

        #buttons01 li a {
            display: flex;
            width: auto;
            height: 2.5rem;
            line-height: 2.5rem;
            vertical-align: middle;
            padding: 0 1.25rem;
            text-transform: uppercase;
            font-size: 0.625em;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.175rem;
            padding-left: calc(0.175rem + 1.25rem);
            font-weight: 600;
            border-radius: 0.25rem;
            direction: var(--site-language-direction);
            transition: color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
        }

        #buttons01 .button {
            background-color: #009e95;
            color: #FFFFFF;
        }

        #buttons01 .button:hover {
            background-color: #0EB5AC !important;
        }

        .video {
            position: relative;
        }

        .video video {
            display: inline-block;
            vertical-align: top;
            max-width: 100%;
        }

        .video .frame {
            position: relative;
            overflow: hidden;
            max-width: 100%;
            display: inline-block;
            vertical-align: top;
        }

        .video .frame:before {
            content: '';
            display: block;
            width: 100%;
        }

        .video .frame iframe {
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #000000;
        }

        .video.full video {
            display: block;
        }

        .video.full:first-child video {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .video.full:last-child video {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .video.full .frame {
            display: block;
        }

        .video.full:first-child .frame {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .video.full:last-child .frame {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #video01 video {
            width: 31.75rem;
        }

        #video01 .frame {
            width: 31.75rem;
        }

        #video01 .frame:before {
            padding-top: 56.25%;
        }

        @media (max-width: 1680px) {
            html {
                font-size: 13pt;
            }
        }

        @media (max-width: 1280px) {
            html {
                font-size: 13pt;
            }
        }

        @media (max-width: 980px) {
            html {
                font-size: 11pt;
            }
        }

        @media (max-width: 736px) {
            html {
                font-size: 11pt;
            }
            #main {
                text-align: center;
            }
            #main h1,
            #main h2,
            #main h3,
            #main p {
                text-align: inherit;
            }
            #main>.inner {
                padding: 3.5rem 2rem;
            }
            #main>.inner>header {
                margin-bottom: 2rem;
            }
            #main>.inner>footer {
                margin-top: 2rem;
            }
            #main>.inner>*>* {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
            #main>.inner>.full {
                margin-left: calc(-2rem);
                width: calc(100% + 4rem + 0.4725px);
                max-width: calc(100% + 4rem + 0.4725px);
            }
            #main>.inner>.full:first-child {
                margin-top: -3.5rem !important;
            }
            #main>.inner>.full:last-child {
                margin-bottom: -3.5rem !important;
            }
            #main>.inner>.full.screen {
                margin-left: calc(-2rem);
            }
            #main>.inner>*>.full {
                margin-left: calc(-2rem);
                width: calc(100% + 4rem + 0.4725px);
                max-width: calc(100% + 4rem + 0.4725px);
            }
            #main>.inner>*>.full.screen {
                margin-left: calc(-2rem);
            }
            #main>.inner>.active>.full:first-child {
                margin-top: -3.5rem !important;
            }
            #main>.inner>.active>.full:last-child {
                margin-bottom: -3.5rem !important;
            }
            #text08 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 1em;
                line-height: 1.625;
            }
            #text02 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 0.75em;
                line-height: 1.625;
            }
            #text05 {
                letter-spacing: -0.04375rem;
                width: 100%;
                font-size: 2em;
                line-height: 1.375;
            }
            #text04 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 0.875em;
                line-height: 1.625;
            }
            #text06 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 0.875em;
                line-height: 1.625;
            }
            #text03 {
                letter-spacing: -0.04375rem;
                width: 100%;
                font-size: 1.875em;
                line-height: 0.75;
            }
            #text01 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 1em;
                line-height: 1.625;
            }
            #text07 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 1em;
                line-height: 1.625;
            }
            #image01 img {
                width: 9.25rem;
            }
            #image02 img {
                width: 10.125rem;
            }
            #form01 label:first-child {
                font-size: 1em;
                line-height: 1.5;
                letter-spacing: 0rem;
            }
            #form01 input[type="text"],
            #form01 input[type="email"],
            #form01 input[type="tel"],
            #form01 input[type="number"],
            #form01 textarea,
            #form01 select,
            #form01 input[type="checkbox"]+label,
            #form01 .file {
                font-size: 1em;
                letter-spacing: 0rem;
            }
            #form01 textarea {
                line-height: 1.5;
                padding-top: 0.7875rem;
            }
            #form01 .actions button {
                font-size: 0.625em;
                letter-spacing: 0.175rem;
                padding-left: calc(0.175rem + 1.5rem);
            }
            #form01 .inner {
                flex-direction: column;
            }
            #form01 .inner .field {
                flex-grow: 0;
            }
            #form01 .inner>* {
                margin: 1.25rem 0 0 0;
            }
            #form01 .inner> :first-child {
                margin: 0;
            }
            #container02>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #container02.default>.wrapper>.inner>* {
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
            }
            #container02.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
            #container02.columns>.wrapper>.inner>span {
                display: none;
            }
            #container02.columns>.wrapper>.inner>*>* {
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
            }
            #container02.columns>.wrapper>.inner>* {
                padding: 1rem 0 !important;
            }
            #container02.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }
            #container02.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }
            #container02.columns>.wrapper>.inner>div.after-spacer {
                padding-top: 0 !important;
            }
            #container02.columns>.wrapper>.inner>div.before-spacer {
                padding-bottom: 0 !important;
            }
            #container02.default>.wrapper>.inner>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.default>.wrapper>.inner>.full:first-child {
                margin-top: 0rem !important;
            }
            #container02.default>.wrapper>.inner>.full:last-child {
                margin-bottom: 0rem !important;
            }
            #container02.columns>.wrapper>.inner>div>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #container02.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #container02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(0rem) !important;
            }
            #container02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(0rem) !important;
            }
            #container02.columns>.wrapper>.inner>div:first-of-type,
            #container02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #container02.columns>.wrapper>.inner>div:last-of-type,
            #container02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #container02.columns>.wrapper>.inner>div:first-of-type,
            #container02.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }
            #container02.columns>.wrapper>.inner>div:last-of-type,
            #container02.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }
            #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }
            #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                position: relative;
                width: 100%;
                height: auto;
            }
            #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
                height: auto;
            }
            #container02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>iframe {
                height: 100%;
            }
            #container01>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #container01>.wrapper {
                max-width: 100%;
            }
            #container01.default>.wrapper>.inner>* {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            #container01.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
            #container01.columns>.wrapper>.inner>span {
                display: none;
            }
            #container01.columns>.wrapper>.inner>*>* {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            #container01.columns>.wrapper>.inner>* {
                padding: 0.9375rem 0 !important;
            }
            #container01.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }
            #container01.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }
            #container01.columns>.wrapper>.inner>div.after-spacer {
                padding-top: 0 !important;
            }
            #container01.columns>.wrapper>.inner>div.before-spacer {
                padding-bottom: 0 !important;
            }
            #container01.default>.wrapper>.inner>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.default>.wrapper>.inner>.full:first-child {
                margin-top: 0rem !important;
            }
            #container01.default>.wrapper>.inner>.full:last-child {
                margin-bottom: 0rem !important;
            }
            #container01.columns>.wrapper>.inner>div>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -0.9375rem !important;
            }
            #container01.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -0.9375rem !important;
            }
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(0rem) !important;
            }
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(0rem) !important;
            }
            #container01.columns>.wrapper>.inner>div:first-of-type,
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #container01.columns>.wrapper>.inner>div:last-of-type,
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #container01.columns>.wrapper>.inner>div:first-of-type,
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }
            #container01.columns>.wrapper>.inner>div:last-of-type,
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }
            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }
            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                position: relative;
                width: 100%;
                height: auto;
            }
            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
                height: auto;
            }
            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>iframe {
                height: 100%;
            }
            #container01>.wrapper>.inner> :nth-child(1) {
                width: 100% !important;
                min-height: 100% !important;
                text-align: inherit !important;
            }
            #container01>.wrapper>.inner> :nth-child(2) {
                width: 100% !important;
                min-height: 100% !important;
                text-align: inherit !important;
            }
            #columns02>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #columns02.default>.wrapper>.inner>* {
                margin-top: 0.625rem;
                margin-bottom: 0.625rem;
            }
            #columns02.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
            #columns02.columns>.wrapper>.inner>span {
                display: none;
            }
            #columns02.columns>.wrapper>.inner>*>* {
                margin-top: 0.625rem;
                margin-bottom: 0.625rem;
            }
            #columns02.columns>.wrapper>.inner>* {
                padding: 1rem 0 !important;
            }
            #columns02.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }
            #columns02.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }
            #columns02.columns>.wrapper>.inner>div.after-spacer {
                padding-top: 0 !important;
            }
            #columns02.columns>.wrapper>.inner>div.before-spacer {
                padding-bottom: 0 !important;
            }
            #columns02.default>.wrapper>.inner>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.default>.wrapper>.inner>.full:first-child {
                margin-top: 0rem !important;
            }
            #columns02.default>.wrapper>.inner>.full:last-child {
                margin-bottom: 0rem !important;
            }
            #columns02.columns>.wrapper>.inner>div>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #columns02.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(0rem) !important;
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(0rem) !important;
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type,
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type,
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type,
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type,
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }
            #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }
            #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                position: relative;
                width: 100%;
                height: auto;
            }
            #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
                height: auto;
            }
            #columns02.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>iframe {
                height: 100%;
            }
            #columns03>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #columns03.default>.wrapper>.inner>* {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            #columns03.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
            #columns03.columns>.wrapper>.inner>span {
                display: none;
            }
            #columns03.columns>.wrapper>.inner>*>* {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            #columns03.columns>.wrapper>.inner>* {
                padding: 1rem 0 !important;
            }
            #columns03.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }
            #columns03.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }
            #columns03.columns>.wrapper>.inner>div.after-spacer {
                padding-top: 0 !important;
            }
            #columns03.columns>.wrapper>.inner>div.before-spacer {
                padding-bottom: 0 !important;
            }
            #columns03.default>.wrapper>.inner>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.default>.wrapper>.inner>.full:first-child {
                margin-top: 0rem !important;
            }
            #columns03.default>.wrapper>.inner>.full:last-child {
                margin-bottom: 0rem !important;
            }
            #columns03.columns>.wrapper>.inner>div>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #columns03.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(0rem) !important;
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(0rem) !important;
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type,
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type,
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type,
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type,
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }
            #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }
            #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                position: relative;
                width: 100%;
                height: auto;
            }
            #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>* {
                height: auto;
            }
            #columns03.columns>.wrapper>.inner>.full>.full:first-child:last-child>*>iframe {
                height: 100%;
            }
            #buttons01 li a {
                font-size: 0.625em;
                letter-spacing: 0.175rem;
                padding-left: calc(0.175rem + 1.25rem);
            }
            #video01 video {
                width: 31.75rem;
            }
            #video01 .frame {
                width: 31.75rem;
            }
        }

        @media (max-width: 480px) {
            #main>.inner>header {
                margin-bottom: 1.75rem;
            }
            #main>.inner>footer {
                margin-top: 1.75rem;
            }
            #main>.inner>*>* {
                margin-top: 1.75rem;
                margin-bottom: 1.75rem;
            }
            #form01 .inner .actions {
                width: 100%;
            }
            #form01 .actions button {
                width: 100%;
                max-width: 32rem;
            }
            #container02.default>.wrapper>.inner>* {
                margin-top: 0.4375rem;
                margin-bottom: 0.4375rem;
            }
            #container02.columns>.wrapper>.inner>*>* {
                margin-top: 0.4375rem;
                margin-bottom: 0.4375rem;
            }
            #container01.default>.wrapper>.inner>* {
                margin-top: 1.3125rem;
                margin-bottom: 1.3125rem;
            }
            #container01.columns>.wrapper>.inner>*>* {
                margin-top: 1.3125rem;
                margin-bottom: 1.3125rem;
            }
            #columns02.default>.wrapper>.inner>* {
                margin-top: 0.546875rem;
                margin-bottom: 0.546875rem;
            }
            #columns02.columns>.wrapper>.inner>*>* {
                margin-top: 0.546875rem;
                margin-bottom: 0.546875rem;
            }
            #columns03.default>.wrapper>.inner>* {
                margin-top: 1.3125rem;
                margin-bottom: 1.3125rem;
            }
            #columns03.columns>.wrapper>.inner>*>* {
                margin-top: 1.3125rem;
                margin-bottom: 1.3125rem;
            }
        }

        @media (max-width: 360px) {
            #main>.inner {
                padding: 2.625rem 1.5rem;
            }
            #main>.inner>header {
                margin-bottom: 1.5rem;
            }
            #main>.inner>footer {
                margin-top: 1.5rem;
            }
            #main>.inner>*>* {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            #main>.inner>.full {
                margin-left: calc(-1.5rem);
                width: calc(100% + 3rem + 0.4725px);
                max-width: calc(100% + 3rem + 0.4725px);
            }
            #main>.inner>.full:first-child {
                margin-top: -2.625rem !important;
            }
            #main>.inner>.full:last-child {
                margin-bottom: -2.625rem !important;
            }
            #main>.inner>.full.screen {
                margin-left: calc(-1.5rem);
            }
            #main>.inner>*>.full {
                margin-left: calc(-1.5rem);
                width: calc(100% + 3rem + 0.4725px);
                max-width: calc(100% + 3rem + 0.4725px);
            }
            #main>.inner>*>.full.screen {
                margin-left: calc(-1.5rem);
            }
            #main>.inner>.active>.full:first-child {
                margin-top: -2.625rem !important;
            }
            #main>.inner>.active>.full:last-child {
                margin-bottom: -2.625rem !important;
            }
            #text08 {
                font-size: 1em;
            }
            #text02 {
                font-size: 0.75em;
            }
            #text05 {
                font-size: 1.5em;
            }
            #text04 {
                font-size: 0.875em;
            }
            #text06 {
                font-size: 0.875em;
            }
            #text03 {
                font-size: 1.5em;
            }
            #text01 {
                font-size: 1em;
            }
            #text07 {
                font-size: 1em;
            }
            #container02>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #container02.default>.wrapper>.inner>* {
                margin-top: 0.375rem;
                margin-bottom: 0.375rem;
            }
            #container02.columns>.wrapper>.inner>*>* {
                margin-top: 0.375rem;
                margin-bottom: 0.375rem;
            }
            #container02.default>.wrapper>.inner>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.default>.wrapper>.inner>.full:first-child {
                margin-top: -0rem !important;
            }
            #container02.default>.wrapper>.inner>.full:last-child {
                margin-bottom: -0rem !important;
            }
            #container02.columns>.wrapper>.inner>div>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container02.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #container02.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #container02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(-0rem) !important;
            }
            #container02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(-0rem) !important;
            }
            #container01>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #container01.default>.wrapper>.inner>* {
                margin-top: 1.125rem;
                margin-bottom: 1.125rem;
            }
            #container01.columns>.wrapper>.inner>*>* {
                margin-top: 1.125rem;
                margin-bottom: 1.125rem;
            }
            #container01.default>.wrapper>.inner>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.default>.wrapper>.inner>.full:first-child {
                margin-top: -0rem !important;
            }
            #container01.default>.wrapper>.inner>.full:last-child {
                margin-bottom: -0rem !important;
            }
            #container01.columns>.wrapper>.inner>div>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #container01.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -0.9375rem !important;
            }
            #container01.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -0.9375rem !important;
            }
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(-0rem) !important;
            }
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(-0rem) !important;
            }
            #columns02>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #columns02.default>.wrapper>.inner>* {
                margin-top: 0.46875rem;
                margin-bottom: 0.46875rem;
            }
            #columns02.columns>.wrapper>.inner>*>* {
                margin-top: 0.46875rem;
                margin-bottom: 0.46875rem;
            }
            #columns02.default>.wrapper>.inner>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.default>.wrapper>.inner>.full:first-child {
                margin-top: -0rem !important;
            }
            #columns02.default>.wrapper>.inner>.full:last-child {
                margin-bottom: -0rem !important;
            }
            #columns02.columns>.wrapper>.inner>div>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns02.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #columns02.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #columns02.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(-0rem) !important;
            }
            #columns02.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(-0rem) !important;
            }
            #columns03>.wrapper>.inner {
                padding: 0rem 0rem;
            }
            #columns03.default>.wrapper>.inner>* {
                margin-top: 1.125rem;
                margin-bottom: 1.125rem;
            }
            #columns03.columns>.wrapper>.inner>*>* {
                margin-top: 1.125rem;
                margin-bottom: 1.125rem;
            }
            #columns03.default>.wrapper>.inner>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.default>.wrapper>.inner>.full:first-child {
                margin-top: -0rem !important;
            }
            #columns03.default>.wrapper>.inner>.full:last-child {
                margin-bottom: -0rem !important;
            }
            #columns03.columns>.wrapper>.inner>div>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(-0rem);
                width: calc(100% + 0rem + 0.4725px);
            }
            #columns03.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: -1rem !important;
            }
            #columns03.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: -1rem !important;
            }
            #columns03.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(-0rem) !important;
            }
            #columns03.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(-0rem) !important;
            }
            #buttons01 {
                width: calc(100% + 0rem);
                margin-left: -0rem;
            }
            #buttons01 li {
                max-width: calc(100% - 0rem);
                margin: 0rem;
            }
        }
    </style><noscript><style>body {overflow: auto !important;}body:after {display: none !important;}#main > .inner {opacity: 1.0 !important;}#main {opacity: 1.0 !important;transform: none !important;transition: none !important;filter: none !important;}#main > .inner > section {opacity: 1.0 !important;transform: none !important;transition: none !important;filter: none !important;}</style></noscript></head>
<body
    class="is-loading">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <section id="home-section">
                    <div id="container02" class="container default">
                        <div class="wrapper">
                            <div class="inner">
                                <div id="image01" class="image">
                                    <img src="{{ asset('_launchpad/assets/images/logo-h.png') }}" alt="" />
                                </div>
                                <div id="image02" class="image">
                                    {{--
                                    <a href="{{ config('launchpad.maker.url') }}/?utm_source=launchpad&utm_medium=logo&utm_campaign={{ config('app.name') }}">
                                        <img src="{{ asset('_launchpad/assets/images/sn.png') }}" alt="smartynetwork-studio" />
                                    </a>
                                    --}}
                                    <img src="{{ asset('_launchpad/assets/images/sn.png') }}" alt="smartynetwork-studio" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="container01" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <h1 id="text05">Grow your brand <span style="color: #009e95">with viral contests</span></h1>
                                    <p id="text04"><span><span style="color: #009e95">ApeContest</span> helps you run fully-branded, multi-language contests so you can:</span><br /> <br />
                                        <span>💰 Reward your customers</span><br /> <br />
                                        <span>🚀 Grow your brand awareness</span><br/> <br />
                                        <span>🔄 Own your data</span><br /> <br />
                                        <span>👨👩 Find new users</span></p>
                                    <p id="text06"><span>We are currently just finishing up the last details before our first release.</span><br /> <span><strong>Leave your email 👇 to get access once it&#39;s ready!</strong></span></p>
                                    <form enctype="multipart/form-data"
                                        id="form01" method="post" data-autofocus="1">
                                        <div class="inner">
                                            <div class="field">
                                                <input type="email" name="email" id="form01-email" placeholder="Email" maxlength="128" required />
                                            </div>
                                            <div class="field">
                                                <input type="text" name="phone" id="form01-phone" placeholder="Telephone" maxlength="128" />
                                            </div>
                                            <div class="actions"><button type="submit">Request Access</button></div>
                                        </div><input type="hidden" name="id" value="form01" /></form>
                                </div>
                                <div>
                                    {{-- <div id="video01" class="video">
                                        <video src="{{ asset('_launchpad/assets/videos/video01.mp4') }}" poster="{{ asset('_launchpad/assets/videos/video01.mp4.jpg') }}" playsinline muted autoplay loop></video>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="columns02" class="container default">
                        <div class="wrapper">
                            <div class="inner">
                                <p id="text08">
                                    <strong>Made for makers</strong> 🏗️ by <strong><a href="{{ config('launchpad.maker.reddit.url') }}">{{ config('launchpad.maker.reddit.name') }}</a></strong></p>
                                <p id="text02">&copy; {{ config('app.name') }}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="done-section">
                    <div id="columns03" class="container default">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <img src="{{ asset('_launchpad/assets/images/logo-square.png') }}" alt="{{ config('app.name') }}" style="max-width:100px;"/>
                                </div>
                                <h2 id="text03">Thank you!</h2>
                                <p id="text01">You&#39;ll hear from us soon! We are finishing up our first release and hope it will be live very soon.</p>
                                <ul id="buttons01" class="buttons">
                                    <li><a href="#home" class="button n01">Okay</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p id="text07">Have a question? Reach out on <a href="{{ config('launchpad.maker.reddit.url') }}">Reddit</a></p>
                </section>
            </div>
        </div>
    </div>
    <script>
        (function() {
            var on = addEventListener,
                $ = function(q) {
                    return document.querySelector(q)
                },
                $$ = function(q) {
                    return document.querySelectorAll(q)
                },
                $body = document.body,
                $inner = $('.inner'),
                client = (function() {
                    var o = {
                            browser: 'other',
                            browserVersion: 0,
                            os: 'other',
                            osVersion: 0,
                            mobile: false,
                            canUse: null
                        },
                        ua = navigator.userAgent,
                        a, i;
                    a = [
                        ['firefox', /Firefox\/([0-9\.]+)/],
                        ['edge', /Edge\/([0-9\.]+)/],
                        ['safari', /Version\/([0-9\.]+).+Safari/],
                        ['chrome', /Chrome\/([0-9\.]+)/],
                        ['chrome', /CriOS\/([0-9\.]+)/],
                        ['ie', /Trident\/.+rv:([0-9]+)/]
                    ];
                    for (i = 0; i < a.length; i++) {
                        if (ua.match(a[i][1])) {
                            o.browser = a[i][0];
                            o.browserVersion = parseFloat(RegExp.$1);
                            break;
                        }
                    }
                    a = [
                        ['ios', /([0-9_]+) like Mac OS X/, function(v) {
                            return v.replace('_', '.').replace('_', '');
                        }],
                        ['ios', /CPU like Mac OS X/, function(v) {
                            return 0
                        }],
                        ['ios', /iPad; CPU/, function(v) {
                            return 0
                        }],
                        ['android', /Android ([0-9\.]+)/, null],
                        ['mac', /Macintosh.+Mac OS X ([0-9_]+)/, function(v) {
                            return v.replace('_', '.').replace('_', '');
                        }],
                        ['windows', /Windows NT ([0-9\.]+)/, null],
                        ['undefined', /Undefined/, null],
                    ];
                    for (i = 0; i < a.length; i++) {
                        if (ua.match(a[i][1])) {
                            o.os = a[i][0];
                            o.osVersion = parseFloat(a[i][2] ? (a[i][2])(RegExp.$1) : RegExp.$1);
                            break;
                        }
                    }
                    if (o.os == 'mac' && ('ontouchstart' in window) && ((screen.width == 1024 && screen.height == 1366) || (screen.width == 834 && screen.height == 1112) || (screen.width == 810 && screen.height == 1080) || (screen.width == 768 && screen.height == 1024))) o.os = 'ios';
                    o.mobile = (o.os == 'android' || o.os == 'ios');
                    var _canUse = document.createElement('div');
                    o.canUse = function(p) {
                        var e = _canUse.style,
                            up = p.charAt(0).toUpperCase() + p.slice(1);
                        return (p in e || ('Moz' + up) in e || ('Webkit' + up) in e || ('O' + up) in e || ('ms' + up) in e);
                    };
                    return o;
                }()),
                trigger = function(t) {
                    if (client.browser == 'ie') {
                        var e = document.createEvent('Event');
                        e.initEvent(t, false, true);
                        dispatchEvent(e);
                    } else dispatchEvent(new Event(t));
                },
                cssRules = function(selectorText) {
                    var ss = document.styleSheets,
                        a = [],
                        f = function(s) {
                            var r = s.cssRules,
                                i;
                            for (i = 0; i < r.length; i++) {
                                if (r[i] instanceof CSSMediaRule && matchMedia(r[i].conditionText).matches)(f)(r[i]);
                                else if (r[i] instanceof CSSStyleRule && r[i].selectorText == selectorText) a.push(r[i]);
                            }
                        },
                        x, i;
                    for (i = 0; i < ss.length; i++) f(ss[i]);
                    return a;
                },
                thisHash = function() {
                    var h = location.hash ? location.hash.substring(1) : null,
                        a;
                    if (!h) return null;
                    if (h.match(/\?/)) {
                        a = h.split('?');
                        h = a[0];
                        history.replaceState(undefined, undefined, '#' + h);
                        window.location.search = a[1];
                    }
                    if (h.length > 0 && !h.match(/^[a-zA-Z]/)) h = 'x' + h;
                    if (typeof h == 'string') h = h.toLowerCase();
                    return h;
                },
                scrollToElement = function(e, style, duration) {
                    var y, cy, dy, start, easing, offset, f;
                    if (!e) y = 0;
                    else {
                        offset = (e.dataset.scrollOffset ? parseInt(e.dataset.scrollOffset) : 0) * parseFloat(getComputedStyle(document.documentElement).fontSize);
                        switch (e.dataset.scrollBehavior ? e.dataset.scrollBehavior : 'default') {
                            case 'default':
                            default:
                                y = e.offsetTop + offset;
                                break;
                            case 'center':
                                if (e.offsetHeight < window.innerHeight) y = e.offsetTop - ((window.innerHeight - e.offsetHeight) / 2) + offset;
                                else y = e.offsetTop - offset;
                                break;
                            case 'previous':
                                if (e.previousElementSibling) y = e.previousElementSibling.offsetTop + e.previousElementSibling.offsetHeight + offset;
                                else y = e.offsetTop + offset;
                                break;
                        }
                    }
                    if (!style) style = 'smooth';
                    if (!duration) duration = 750;
                    if (style == 'instant') {
                        window.scrollTo(0, y);
                        return;
                    }
                    start = Date.now();
                    cy = window.scrollY;
                    dy = y - cy;
                    switch (style) {
                        case 'linear':
                            easing = function(t) {
                                return t
                            };
                            break;
                        case 'smooth':
                            easing = function(t) {
                                return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
                            };
                            break;
                    }
                    f = function() {
                        var t = Date.now() - start;
                        if (t >= duration) window.scroll(0, y);
                        else {
                            window.scroll(0, cy + (dy * easing(t / duration)));
                            requestAnimationFrame(f);
                        }
                    };
                    f();
                },
                scrollToTop = function() {
                    scrollToElement(null);
                },
                loadElements = function(parent) {
                    var a, e, x, i;
                    a = parent.querySelectorAll('iframe[data-src]:not([data-src=""])');
                    for (i = 0; i < a.length; i++) {
                        a[i].src = a[i].dataset.src;
                        a[i].dataset.src = "";
                    }
                    a = parent.querySelectorAll('video[autoplay]');
                    for (i = 0; i < a.length; i++) {
                        if (a[i].paused) a[i].play();
                    }
                    e = parent.querySelector('[data-autofocus="1"]');
                    x = e ? e.tagName : null;
                    switch (x) {
                        case 'FORM':
                            e = e.querySelector('.field input, .field select, .field textarea');
                            if (e) e.focus();
                            break;
                        default:
                            break;
                    }
                },
                unloadElements = function(parent) {
                    var a, e, x, i;
                    a = parent.querySelectorAll('iframe[data-src=""]');
                    for (i = 0; i < a.length; i++) {
                        if (a[i].dataset.srcUnload === '0') continue;
                        a[i].dataset.src = a[i].src;
                        a[i].src = '';
                    }
                    a = parent.querySelectorAll('video');
                    for (i = 0; i < a.length; i++) {
                        if (!a[i].paused) a[i].pause();
                    }
                    e = $(':focus');
                    if (e) e.blur();
                };
            window._scrollToTop = scrollToTop;
            var thisURL = function() {
                return window.location.href.replace(window.location.search, '').replace(/#$/, '');
            };
            var getVar = function(name) {
                var a = window.location.search.substring(1).split('&'),
                    b, k;
                for (k in a) {
                    b = a[k].split('=');
                    if (b[0] == name) return b[1];
                }
                return null;
            };
            var errors = {
                handle: function(handler) {
                    window.onerror = function(message, url, line, column, error) {
                        (handler)(error.message);
                        return true;
                    };
                },
                unhandle: function() {
                    window.onerror = null;
                }
            };
            var db = {
                open: function(objectStoreName, handler) {
                    var request = indexedDB.open('carrd');
                    request.onupgradeneeded = function(event) {
                        event.target.result.createObjectStore(objectStoreName, {
                            keyPath: 'id'
                        });
                    };
                    request.onsuccess = function(event) {
                        (handler)(event.target.result.transaction([objectStoreName], 'readwrite').objectStore(objectStoreName));
                    };
                },
                put: function(objectStore, values, handler) {
                    var request = objectStore.put(values);
                    request.onsuccess = function(event) {
                        (handler)();
                    };
                    request.onerror = function(event) {
                        throw new Error('db.put: error');
                    };
                },
                get: function(objectStore, id, handler) {
                    var request = objectStore.get(id);
                    request.onsuccess = function(event) {
                        if (!event.target.result) throw new Error('db.get: could not retrieve object with id "' + id + '"');
                        (handler)(event.target.result);
                    };
                    request.onerror = function(event) {
                        throw new Error('db.get: error');
                    };
                },
                delete: function(objectStore, id, handler) {
                    objectStore.delete(id).onsuccess = function(event) {
                        (handler)(event.target.result);
                    };
                },
            };
            on('load', function() {
                setTimeout(function() {
                    $body.className = $body.className.replace(/\bis-loading\b/, 'is-playing');
                    setTimeout(function() {
                        $body.className = $body.className.replace(/\bis-playing\b/, 'is-ready');
                    }, 1750);
                }, 100);
            });
            (function() {
                var initialSection, initialScrollPoint, initialId, header, footer, name, hideHeader, hideFooter, disableAutoScroll, h, e, ee, k, locked = false,
                    doNext = function() {
                        var section;
                        section = $('#main > .inner > section.active').nextElementSibling;
                        if (!section || section.tagName != 'SECTION') return;
                        location.href = '#' + section.id.replace(/-section$/, '');
                    },
                    doPrevious = function() {
                        var section;
                        section = $('#main > .inner > section.active').previousElementSibling;
                        if (!section || section.tagName != 'SECTION') return;
                        location.href = '#' + (section.matches(':first-child') ? '' : section.id.replace(/-section$/, ''));
                    },
                    doFirst = function() {
                        var section;
                        section = $('#main > .inner > section:first-of-type');
                        if (!section || section.tagName != 'SECTION') return;
                        location.href = '#' + section.id.replace(/-section$/, '');
                    },
                    doLast = function() {
                        var section;
                        section = $('#main > .inner > section:last-of-type');
                        if (!section || section.tagName != 'SECTION') return;
                        location.href = '#' + section.id.replace(/-section$/, '');
                    },
                    sections = {};
                window._next = doNext;
                window._previous = doPrevious;
                window._first = doFirst;
                window._last = doLast;
                window._scrollToTop = function() {
                    var section, id;
                    scrollToElement(null);
                    if (!!(section = $('section.active'))) {
                        id = section.id.replace(/-section$/, '');
                        if (id == 'home') id = '';
                        history.pushState(null, null, '#' + id);
                    }
                };
                if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
                header = $('#header');
                footer = $('#footer');
                h = thisHash();
                if (h && !h.match(/^[a-zA-Z0-9\-]+$/)) h = null;
                if (e = $('[data-scroll-id="' + h + '"]')) {
                    initialScrollPoint = e;
                    initialSection = initialScrollPoint.parentElement;
                    initialId = initialSection.id;
                } else if (e = $('#' + (h ? h : 'home') + '-section')) {
                    initialScrollPoint = null;
                    initialSection = e;
                    initialId = initialSection.id;
                }
                if (!initialSection) {
                    initialScrollPoint = null;
                    initialSection = $('#' + 'home' + '-section');
                    initialId = initialSection.id;
                    history.replaceState(undefined, undefined, '#');
                }
                name = (h ? h : 'home');
                hideHeader = name ? ((name in sections) && ('hideHeader' in sections[name]) && sections[name].hideHeader) : false;
                hideFooter = name ? ((name in sections) && ('hideFooter' in sections[name]) && sections[name].hideFooter) : false;
                disableAutoScroll = name ? ((name in sections) && ('disableAutoScroll' in sections[name]) && sections[name].disableAutoScroll) : false;
                if (header && hideHeader) {
                    header.classList.add('hidden');
                    header.style.display = 'none';
                }
                if (footer && hideFooter) {
                    footer.classList.add('hidden');
                    footer.style.display = 'none';
                }
                ee = $$('#main > .inner > section:not([id="' + initialId + '"])');
                for (k = 0; k < ee.length; k++) {
                    ee[k].className = 'inactive';
                    ee[k].style.display = 'none';
                }
                initialSection.classList.add('active');
                loadElements(initialSection);
                if (header) loadElements(header);
                if (footer) loadElements(footer);
                if (!disableAutoScroll) scrollToElement(null, 'instant');
                on('load', function() {
                    if (initialScrollPoint) scrollToElement(initialScrollPoint, 'instant');
                });
                on('hashchange', function(event) {
                    var section, scrollPoint, id, sectionHeight, currentSection, currentSectionHeight, name, hideHeader, hideFooter, disableAutoScroll, h, e, ee, k;
                    if (locked) return false;
                    h = thisHash();
                    if (h && !h.match(/^[a-zA-Z0-9\-]+$/)) return false;
                    if (e = $('[data-scroll-id="' + h + '"]')) {
                        scrollPoint = e;
                        section = scrollPoint.parentElement;
                        id = section.id;
                    } else if (e = $('#' + (h ? h : 'home') + '-section')) {
                        scrollPoint = null;
                        section = e;
                        id = section.id;
                    } else {
                        scrollPoint = null;
                        section = $('#' + 'home' + '-section');
                        id = section.id;
                        history.replaceState(undefined, undefined, '#');
                    }
                    if (!section) return false;
                    if (!section.classList.contains('inactive')) {
                        name = (section ? section.id.replace(/-section$/, '') : null);
                        disableAutoScroll = name ? ((name in sections) && ('disableAutoScroll' in sections[name]) && sections[name].disableAutoScroll) : false;
                        if (scrollPoint) scrollToElement(scrollPoint);
                        else if (!disableAutoScroll) scrollToElement(null);
                        return false;
                    } else {
                        locked = true;
                        if (location.hash == '#home') history.replaceState(null, null, '#');
                        name = (section ? section.id.replace(/-section$/, '') : null);
                        disableAutoScroll = name ? ((name in sections) && ('disableAutoScroll' in sections[name]) && sections[name].disableAutoScroll) : false;
                        currentSection = $('section:not(.inactive)');
                        if (currentSection) {
                            currentSection.classList.add('inactive');
                            unloadElements(currentSection);
                            setTimeout(function() {
                                currentSection.style.display = 'none';
                                currentSection.classList.remove('active');
                            }, 250);
                        }
                        setTimeout(function() {
                            section.style.display = '';
                            trigger('resize');
                            if (!disableAutoScroll) scrollToElement(null, 'instant');
                            setTimeout(function() {
                                section.classList.remove('inactive');
                                section.classList.add('active');
                                setTimeout(function() {
                                    loadElements(section);
                                    if (scrollPoint) scrollToElement(scrollPoint, 'instant');
                                    locked = false;
                                }, 500);
                            }, 75);
                        }, 250);
                    }
                    return false;
                });
                on('click', function(event) {
                    var t = event.target,
                        tagName = t.tagName.toUpperCase();
                    switch (tagName) {
                        case 'IMG':
                        case 'SVG':
                        case 'USE':
                        case 'U':
                        case 'STRONG':
                        case 'EM':
                        case 'CODE':
                        case 'S':
                        case 'MARK':
                        case 'SPAN':
                            while (!!(t = t.parentElement))
                                if (t.tagName == 'A') break;
                            if (!t) return;
                            break;
                        default:
                            break;
                    }
                    if (t.tagName == 'A' && t.getAttribute('href').substr(0, 1) == '#' && t.hash == window.location.hash) {
                        event.preventDefault();
                        history.replaceState(undefined, undefined, '#');
                        location.replace(t.hash);
                    }
                });
            })();
            var style, sheet, rule;
            style = document.createElement('style');
            style.appendChild(document.createTextNode(''));
            document.head.appendChild(style);
            sheet = style.sheet;
            if (client.mobile) {
                (function() {
                    var f = function() {
                        document.documentElement.style.setProperty('--viewport-height', window.innerHeight + 'px');
                        document.documentElement.style.setProperty('--background-height', (window.innerHeight + 250) + 'px');
                    };
                    on('load', f);
                    on('resize', f);
                    on('orientationchange', function() {
                        setTimeout(function() {
                            (f)();
                        }, 100);
                    });
                })();
            }
            if (client.os == 'android') {
                (function() {
                    sheet.insertRule('body::after { }', 0);
                    rule = sheet.cssRules[0];
                    var f = function() {
                        rule.style.cssText = 'height: ' + (Math.max(screen.width, screen.height)) + 'px';
                    };
                    on('load', f);
                    on('orientationchange', f);
                    on('touchmove', f);
                })();
                $body.classList.add('is-touch');
            } else if (client.os == 'ios') {
                if (client.osVersion <= 11)(function() {
                    sheet.insertRule('body::after { }', 0);
                    rule = sheet.cssRules[0];
                    rule.style.cssText = '-webkit-transform: scale(1.0)';
                })();
                if (client.osVersion <= 11)(function() {
                    sheet.insertRule('body.ios-focus-fix::before { }', 0);
                    rule = sheet.cssRules[0];
                    rule.style.cssText = 'height: calc(100% + 60px)';
                    on('focus', function(event) {
                        $body.classList.add('ios-focus-fix');
                    }, true);
                    on('blur', function(event) {
                        $body.classList.remove('ios-focus-fix');
                    }, true);
                })();
                $body.classList.add('is-touch');
            } else if (client.browser == 'ie') {
                if (!('matches' in Element.prototype)) Element.prototype.matches = (Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector);
                (function() {
                    var a = cssRules('body::before'),
                        r;
                    if (a.length > 0) {
                        r = a[0];
                        if (r.style.width.match('calc')) {
                            r.style.opacity = 0.9999;
                            setTimeout(function() {
                                r.style.opacity = 1;
                            }, 100);
                        } else {
                            document.styleSheets[0].addRule('body::before', 'content: none !important;');
                            $body.style.backgroundImage = r.style.backgroundImage.replace('url("images/', 'url("assets/images/');
                            $body.style.backgroundPosition = r.style.backgroundPosition;
                            $body.style.backgroundRepeat = r.style.backgroundRepeat;
                            $body.style.backgroundColor = r.style.backgroundColor;
                            $body.style.backgroundAttachment = 'fixed';
                            $body.style.backgroundSize = r.style.backgroundSize;
                        }
                    }
                })();
                (function() {
                    var t, f;
                    f = function() {
                        var mh, h, s, xx, x, i;
                        x = $('#wrapper');
                        x.style.height = 'auto';
                        if (x.scrollHeight <= innerHeight) x.style.height = '100vh';
                        xx = $$('.container.full');
                        for (i = 0; i < xx.length; i++) {
                            x = xx[i];
                            s = getComputedStyle(x);
                            x.style.minHeight = '';
                            x.style.height = '';
                            mh = s.minHeight;
                            x.style.minHeight = 0;
                            x.style.height = '';
                            h = s.height;
                            if (mh == 0) continue;
                            x.style.height = (h > mh ? 'auto' : mh);
                        }
                    };
                    (f)();
                    on('resize', function() {
                        clearTimeout(t);
                        t = setTimeout(f, 250);
                    });
                    on('load', f);
                })();
            } else if (client.browser == 'edge') {
                (function() {
                    var xx = $$('.container > .inner > div:last-child'),
                        x, y, i;
                    for (i = 0; i < xx.length; i++) {
                        x = xx[i];
                        y = getComputedStyle(x.parentNode);
                        if (y.display != 'flex' && y.display != 'inline-flex') continue;
                        x.style.marginLeft = '-1px';
                    }
                })();
            }
            if (!client.canUse('object-fit')) {
                (function() {
                    var xx = $$('.image[data-position]'),
                        x, w, c, i, src;
                    for (i = 0; i < xx.length; i++) {
                        x = xx[i];
                        c = x.firstElementChild;
                        if (c.tagName != 'IMG') {
                            w = c;
                            c = c.firstElementChild;
                        }
                        if (c.parentNode.classList.contains('deferred')) {
                            c.parentNode.classList.remove('deferred');
                            src = c.getAttribute('data-src');
                            c.removeAttribute('data-src');
                        } else src = c.getAttribute('src');
                        c.style['backgroundImage'] = 'url(\'' + src + '\')';
                        c.style['backgroundSize'] = 'cover';
                        c.style['backgroundPosition'] = x.dataset.position;
                        c.style['backgroundRepeat'] = 'no-repeat';
                        c.src = 'data:image/svg+xml;charset=utf8,' + escape('<svg xmlns="http://www.w3.org/2000/svg" width="1" height="1" viewBox="0 0 1 1"></svg>');
                        if (x.classList.contains('full') && (x.parentNode && x.parentNode.classList.contains('full')) && (x.parentNode.parentNode && x.parentNode.parentNode.parentNode && x.parentNode.parentNode.parentNode.classList.contains('container')) && x.parentNode.children.length == 1) {
                            (function(x, w) {
                                var p = x.parentNode.parentNode,
                                    f = function() {
                                        x.style['height'] = '0px';
                                        clearTimeout(t);
                                        t = setTimeout(function() {
                                            if (getComputedStyle(p).flexDirection == 'row') {
                                                if (w) w.style['height'] = '100%';
                                                x.style['height'] = (p.scrollHeight + 1) + 'px';
                                            } else {
                                                if (w) w.style['height'] = 'auto';
                                                x.style['height'] = 'auto';
                                            }
                                        }, 125);
                                    },
                                    t;
                                on('resize', f);
                                on('load', f);
                                (f)();
                            })(x, w);
                        }
                    }
                })();
                (function() {
                    var xx = $$('.gallery img'),
                        x, p, i, src;
                    for (i = 0; i < xx.length; i++) {
                        x = xx[i];
                        p = x.parentNode;
                        if (p.classList.contains('deferred')) {
                            p.classList.remove('deferred');
                            src = x.getAttribute('data-src');
                        } else src = x.getAttribute('src');
                        p.style['backgroundImage'] = 'url(\'' + src + '\')';
                        p.style['backgroundSize'] = 'cover';
                        p.style['backgroundPosition'] = 'center';
                        p.style['backgroundRepeat'] = 'no-repeat';
                        x.style['opacity'] = '0';
                    }
                })();
            }

            function form(id, settings) {
                var _this = this;
                this.id = id;
                this.action = settings.action;
                this.method = settings.method;
                this.code = ('code' in settings ? settings.code : null);
                this.success = settings.success;
                this.initHandler = ('initHandler' in settings ? settings.initHandler : null);
                this.presubmitHandler = ('presubmitHandler' in settings ? settings.presubmitHandler : null);
                this.failure = ('failure' in settings ? settings.failure : null);
                this.optional = ('optional' in settings ? settings.optional : []);
                this.events = ('events' in settings ? settings.events : {});
                this.recaptcha = ('recaptcha' in settings ? settings.recaptcha : null);
                this.$form = $('#' + this.id);
                this.$form.addEventListener('change', function(event) {
                    if (event.target.tagName != 'INPUT') return;
                    _this.refreshInput(event.target);
                });
                this.$form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    _this.triggerSubmit();
                });
                this.$form.addEventListener('keydown', function(event) {
                    if (event.keyCode == 13 && event.ctrlKey) {
                        event.preventDefault();
                        event.stopPropagation();
                        _this.triggerSubmit();
                    }
                });
                var x = $('#' + this.id + ' input[name="' + settings.hid + '"]');
                if (x) {
                    x.disabled = true;
                    x.parentNode.style.display = 'none';
                }
                this.$submit = $('#' + this.id + ' .actions button[type="submit"]');
                this.$submit.disabled = false;
                this.initInputs();
                if (this.initHandler) {
                    errors.handle(function(message) {
                        return _this.failureHandler(message);
                    });
                    if (!this.initHandler()) errors.unhandle();
                }
                if (this.recaptcha) {
                    grecaptcha.ready(function() {
                        var id;
                        id = grecaptcha.render(_this.$submit, {
                            sitekey: _this.recaptcha.key,
                            isolated: true,
                            theme: (_this.recaptcha.darkMode ? 'dark' : 'light'),
                            callback: function(token) {
                                _this.submit({
                                    recaptchaToken: token
                                }, ['g-recaptcha-response']);
                                grecaptcha.reset(id);
                            }
                        });
                    });
                }
            };
            form.prototype.refreshInput = function(input) {
                var a = [],
                    p;
                switch (input.type) {
                    case 'file':
                        p = input.parentNode;
                        if (input.files.length > 0) p.setAttribute('data-filename', input.files[0].name);
                        else p.setAttribute('data-filename', '');
                        break;
                    default:
                        break;
                }
            };
            form.prototype.refreshInputs = function() {
                var i;
                for (i = 0; i < this.$form.elements.length; i++) this.refreshInput(this.$form.elements[i]);
            };
            form.prototype.normalizeNumberInput = function(input) {
                var min = parseFloat(input.min),
                    max = parseFloat(input.max),
                    step = parseFloat(input.step),
                    v = parseFloat(input.value);
                if (isNaN(v)) {
                    if (!input.required) {
                        input.value = null;
                        return;
                    }
                    v = isNaN(min) ? 0 : min;
                }
                if (!isNaN(min) && v < min) v = min;
                if (!isNaN(max) && v > max) v = max;
                if (!isNaN(step) && (v % step) !== 0) v = Math.round(v / step) * step;
                switch (input.dataset.category) {
                    case 'currency':
                        v = parseFloat(v).toFixed(2);
                        break;
                    default:
                    case 'decimal':
                        v = parseFloat(v);
                        break;
                    case 'integer':
                        v = parseInt(v);
                        break;
                }
                input.value = v;
            };
            form.prototype.initInputs = function() {
                var _this = this,
                    i, input;
                for (i = 0; i < this.$form.elements.length; i++) {
                    input = this.$form.elements[i];
                    switch (input.type) {
                        case 'number':
                            (function(input) {
                                var p = input.parentNode,
                                    decrement = p.querySelector('button.decrement'),
                                    increment = p.querySelector('button.increment');
                                input.addEventListener('blur', function(event) {
                                    _this.normalizeNumberInput(input);
                                });
                                if (decrement && increment) {
                                    decrement.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        _this.normalizeNumberInput(input);
                                        input.stepDown(1);
                                        _this.normalizeNumberInput(input);
                                    });
                                    increment.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        _this.normalizeNumberInput(input);
                                        input.stepUp(1);
                                        _this.normalizeNumberInput(input);
                                    });
                                }
                            })(input);
                            break;
                        case 'file':
                            (function(input) {
                                var p = input.parentNode,
                                    select = p.querySelector('button.select');
                                select.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    input.click();
                                });
                                input.addEventListener('focus', function(event) {
                                    event.target.parentNode.classList.add('focus');
                                });
                                input.addEventListener('blur', function(event) {
                                    event.target.parentNode.classList.remove('focus');
                                });
                            })(input);
                            break;
                        case 'text':
                        case 'textarea':
                        case 'email':
                            input.addEventListener('blur', function(event) {
                                this.value = this.value.replace(/^\s+/, '').replace(/\s+$/, '');
                            });
                            break;
                    }
                    this.refreshInput(input);
                }
            };
            form.prototype.notify = function(type, message) {
                if (message.match(/^(#[a-zA-Z0-9\_\-]+|[a-z0-9\-\.]+:[a-zA-Z0-9\~\!\@\#$\%\&\-\_\+\=\;\,\.\?\/\:]+)$/)) location.href = message;
                else alert((type == 'failure' ? 'ERROR: ' : '') + message);
            };
            form.prototype.getRequiredInputValue = function(name, type) {
                var k, $f, $ff, types;
                $ff = this.$form.elements;
                for (k in $ff) {
                    $f = $ff[k];
                    if (((Array.isArray(type) && type.includes($f.type)) || $f.type == type) && $f.name == name && $f.value !== '' && $f.value !== null) return $f.value;
                }
                return null;
            };
            form.prototype.getEmail = function() {
                return this.getRequiredInputValue('email', 'email');
            };
            form.prototype.getAmount = function() {
                var x;
                x = this.getRequiredInputValue('amount', ['select-one', 'number']);
                if (!x) return null;
                x = parseFloat(x);
                if (isNaN(x) || x < 1.00 || x > 100000.00) return null;
                return x;
            };
            form.prototype.values = function() {
                var a = {};
                for (i in this.$form.elements) {
                    e = this.$form.elements[i];
                    if (!e.name || !e.value) continue;
                    switch (e.type) {
                        case 'checkbox':
                            a[e.name] = (e.checked ? 'checked' : null);
                            break;
                        case 'file':
                            a[e.name] = {
                                name: e.files[0].name,
                                blob: new Blob([e.files[0]], {
                                    type: e.files[0].type
                                })
                            };
                            break;
                        default:
                            a[e.name] = e.value;
                            break;
                    }
                }
                a['id'] = this.id;
                return a;
            };
            form.prototype.scrollIntoView = function() {
                window.scrollTo(0, this.$form.offsetTop);
            };
            form.prototype.triggerSubmit = function() {
                if (this.recaptcha) this.$submit.click();
                else if (!this.$submit.disabled) this.submit();
            };
            form.prototype.submit = function(values, ignore) {
                var _this = this,
                    result, _success, _failure, a, i, e, fd, k, x, $f, $ff;
                result = true;
                $ff = this.$form.elements;
                for (k in $ff) {
                    $f = $ff[k];
                    if (!$f || typeof $f != 'object') continue;
                    if (ignore && ('name' in $f) && ignore.indexOf($f.name) != -1) continue;
                    if ($f.type != 'text' && $f.type != 'email' && $f.type != 'textarea' && $f.type != 'select-one' && $f.type != 'checkbox' && $f.type != 'number' && $f.type != 'tel' && $f.type != 'file' && $f.type != 'hidden') continue;
                    if ($f.disabled) continue;
                    if ($f.type == 'text' || $f.type == 'email' || $f.type == 'textarea' || $f.type == 'hidden') $f.value = $f.value.replace(/^\s+/, '').replace(/\s+$/, '');
                    if ($f.value === '' || $f.value === null || ($f.type == 'checkbox' && !$f.checked)) {
                        if (this.optional.indexOf($f.name) !== -1) continue;
                        result = false;
                    } else {
                        switch ($f.type) {
                            case 'email':
                                result = result && $f.value.match(new RegExp("^([a-zA-Z0-9\\_\\-\\.\\+]+)@([a-zA-Z0-9\\-\\.]+)\\.([a-zA-Z]+)$"));
                                break;
                            case 'select-one':
                                result = result && $f.value.match(new RegExp("^[^\\<\\>]+$"));
                                break;
                            case 'checkbox':
                                result = result && $f.checked && ($f.value == 'checked');
                                break;
                            case 'number':
                                result = result && $f.value.match(new RegExp("^[0-9\\-\\.]+$"));
                                break;
                            case 'tel':
                                result = result && $f.value.match(new RegExp("^[0-9\\-\\+\\(\\)\\ \\#\\*]+$"));
                                break;
                            case 'file':
                                break;
                            default:
                            case 'text':
                            case 'textarea':
                            case 'hidden':
                                result = result && $f.value.match(new RegExp("^[^\\<\\>]+$"));
                                break;
                        }
                    }
                    if (!result) break;
                }
                if (!result) {
                    this.notify('failure', 'Missing or invalid fields. Please try again.');
                    return;
                }
                if ('onsubmit' in this.events) this.events.onsubmit.apply(this.$form);
                switch (this.method) {
                    default:
                    case 'ajax':
                        break;
                    case 'get':
                    case 'post':
                        this.$form.submit();
                        return;
                    case 'code':
                        if (typeof this.code == 'function') {
                            this.waiting(true);
                            _success = function() {
                                if ('onsuccess' in _this.events) _this.events.onsuccess.apply(_this.$form);
                                _this.notify('success', _this.success);
                                _this.waiting(false);
                            };
                            _failure = function() {
                                if ('onfailure' in _this.events) _this.events.onfailure.apply(_this.$form);
                                _this.notify('failure', _this.failure ? _this.failure : 'Missing or invalid fields. Please try again.');
                                _this.waiting(false);
                            };
                            result = this.code.apply(this.$form, [_success, _failure]);
                            if (result === true) _success();
                            else if (result === false) _failure();
                        }return;
                }
                if (x = $(':focus')) x.blur();
                errors.handle(function(message) {
                    return _this.failureHandler(message);
                });
                a = this.values();
                if (values) {
                    for (k in values) a[k] = values[k];
                }
                if (this.presubmitHandler) this.presubmitHandler.call(this, a);
                else this.submitHandler(a);
            };
            form.prototype.submitHandler = function(values) {
                var _this = this,
                    x, k, data;
                this.waiting(true);
                data = new FormData;
                for (k in values) {
                    if (values[k] && typeof values[k] == 'object' && ('blob' in values[k])) data.append(k, values[k].blob, values[k].name);
                    else data.append(k, values[k]);
                }
                x = new XMLHttpRequest();
                x.open('POST', this.action);
                x.send(data);
                x.onreadystatechange = function() {
                    var o;
                    if (x.readyState != 4) return;
                    if (x.status != 200) throw new Error('Failed server response (' + x.status + ')');
                    try {
                        o = JSON.parse(x.responseText);
                    } catch (e) {
                        throw new Error('Invalid server response');
                    }
                    if (!('result' in o) || !('message' in o)) throw new Error('Incomplete server response');
                    if (o.result !== true) throw new Error(o.message);
                    if ('onsuccess' in _this.events) _this.events.onsuccess.apply(this.$form);
                    _this.$form.reset();
                    _this.refreshInputs();
                    _this.notify('success', (_this.success ? _this.success : o.message));
                    _this.waiting(false);
                    errors.unhandle();
                };
            };
            form.prototype.failureHandler = function(message) {
                console.log('failed (' + message + ')');
                if ('onfailure' in this.events) this.events.onfailure.apply(this.$form);
                if (message.match(/ALERT:/)) window.alert(message.substring(message.indexOf('ALERT:') + 7));
                else this.notify('failure', (this.failure ? this.failure : message));
                this.waiting(false);
                errors.unhandle();
                return true;
            };
            form.prototype.waiting = function(x) {
                var _this = this;
                if (x) {
                    $body.classList.add('is-instant');
                    this.$submit.disabled = true;
                    this.$submit.classList.add('waiting');
                    if (this.recaptcha) setTimeout(function() {
                        _this.$submit.disabled = true;
                    }, 0);
                } else {
                    $body.classList.remove('is-instant');
                    this.$submit.classList.remove('waiting');
                    this.$submit.disabled = false;
                }
            };
            form.prototype.pause = function(values, handler) {
                var _this = this;
                this.waiting(true);
                db.open('formData', function(objectStore) {
                    db.delete(objectStore, _this.id, function() {
                        db.put(objectStore, values, function() {
                            handler.call(_this);
                        });
                    });
                });
            };
            form.prototype.resume = function(handler) {
                var _this = this;
                this.waiting(true);
                this.scrollIntoView();
                db.open('formData', function(objectStore) {
                    db.get(objectStore, _this.id, function(values) {
                        db.delete(objectStore, _this.id, function() {
                            var e, i, v;
                            for (i in _this.$form.elements) {
                                e = _this.$form.elements[i];
                                if (!e.name) continue;
                                v = (e.name in values ? values[e.name] : null);
                                switch (e.type) {
                                    case 'checkbox':
                                        e.checked = (v == 'checked' ? true : false);
                                        break;
                                    case 'file':
                                        if (v) e.parentNode.setAttribute('data-filename', v.name);
                                        break;
                                    default:
                                        e.value = v;
                                        break;
                                }
                            }
                            handler.call(_this, values);
                        });
                    });
                });
            };
            new form('form01', {
                action: "{{ route('launchpad.store') }}",
                method: 'ajax',
                hid: 'phone',
                success: '#done',
                failure: 'Sorry, something went wrong. Please verify your email or try again later.',
                optional: [],
            });
        })();
    </script>
    </body>

</html>
